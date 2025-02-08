<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentationProductResource\Pages;
use App\Filament\Resources\DocumentationProductResource\RelationManagers;
use App\Models\DocumentationProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentationProductResource extends Resource
{
    protected static ?string $model = DocumentationProduct::class;

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
            'index' => Pages\ListDocumentationProducts::route('/'),
            'create' => Pages\CreateDocumentationProduct::route('/create'),
            'edit' => Pages\EditDocumentationProduct::route('/{record}/edit'),
        ];
    }
}