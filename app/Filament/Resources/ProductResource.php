<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\CreateAction;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(50),
                    Forms\Components\TextArea::make('caption')
                        ->required()
                        ->rows(5)
                        ->minLength(50)
                        ->maxLength(300),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('caption')->limit(200)->wrap(),
            Tables\Columns\TextColumn::make('updated_at') ?? Tables\Columns\TextColumn::make('created_at'),
        ])
        ->filters([
        //
        ])
        ->actions([
            ActionGroup::make([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])->tooltip('Actions'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
