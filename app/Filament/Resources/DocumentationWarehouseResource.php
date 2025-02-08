<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentationWarehouseResource\Pages;
use App\Filament\Resources\DocumentationWarehouseResource\RelationManagers;
use App\Models\DocumentationWarehouse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentationWarehouseResource extends Resource
{
    protected static ?string $model = DocumentationWarehouse::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Halaman Documentation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail')
                            ->image()
                            ->required(),
                Forms\Components\TextInput::make('title')
                            ->maxLength(15)
                            ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDocumentationWarehouses::route('/'),
            'create' => Pages\CreateDocumentationWarehouse::route('/create'),
            'edit' => Pages\EditDocumentationWarehouse::route('/{record}/edit'),
        ];
    }
}