<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MailResource\Pages;
use App\Filament\Resources\MailResource\RelationManagers;
use App\Models\Mail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Filters\SelectFilter;

class MailResource extends Resource
{
    protected static ?string $model = Mail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Internal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Select::make('service_id')
                        ->relationship(name: 'service', titleAttribute: 'title')
                        ->searchable(['title'])->preload(),
                    Forms\Components\Select::make('project_theme_id')
                        ->relationship(name: 'project_theme', titleAttribute: 'name')
                        ->searchable(['name'])->preload(),
                    Forms\Components\TextInput::make('name'),
                    Forms\Components\TextInput::make('email'),
                    Forms\Components\TextInput::make('company_name'),
                    Forms\Components\TextArea::make('project_details')->rows(6),
                    Forms\Components\DateTimePicker::make('updated_at'),
                    Forms\Components\DateTimePicker::make('created_at'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('company_name')->searchable(),
                Tables\Columns\TextColumn::make('service.title'),
                Tables\Columns\TextColumn::make('project_theme.name'),
                Tables\Columns\TextColumn::make('updated_at') ?? Tables\Columns\TextColumn::make('created_at'),
            ])
            ->filters([
                SelectFilter::make('service')
                    ->relationship('service', 'title')
                    ->multiple()->searchable()->preload(),
                SelectFilter::make('project_theme')
                    ->relationship('project_theme', 'name')
                    ->multiple()->searchable()->preload(),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->tooltip('More'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMails::route('/'),
            'create' => Pages\CreateMail::route('/create'),
            'view' => Pages\ViewMail::route('/{record}'),
            'edit' => Pages\EditMail::route('/{record}/edit'),
        ];
    }
}
