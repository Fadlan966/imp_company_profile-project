<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static ?string $navigationGroup = 'Portofolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->required()
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '1:1',
                        ]),
                    Forms\Components\Select::make('service_id')
                        ->relationship(name: 'service', titleAttribute: 'title')
                        ->searchable(['title'])->preload(),
                    Forms\Components\Select::make('project_theme_id')
                        ->relationship(name: 'project_theme', titleAttribute: 'name')
                        ->searchable(['name'])->preload(),
                    Forms\Components\TextArea::make('title')
                        ->required()
                        ->rows(3)
                        ->maxLength(180),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->wrap(),
                Tables\Columns\TextColumn::make('service.title'),
                Tables\Columns\TextColumn::make('project_theme.name'),
                Tables\Columns\ImageColumn::make('image'),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
