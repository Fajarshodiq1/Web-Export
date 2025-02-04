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
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater; 
use Filament\Forms\Components\Textarea;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

     // Menentukan grup navigasi
    protected static ?string $navigationGroup = 'All Product';

    // Ikon opsional untuk fitur ini
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    // Urutan fitur dalam grup (opsional)
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Details')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('about')
                            ->required(),
                    Forms\Components\Select::make('is_open')
                            ->options([
                                true => 'Open',
                                false => 'Not Available',
                            ]),
                    Forms\Components\FileUpload::make('thumbnail')
                            ->image()
                            ->required(),
                    Forms\Components\FileUpload::make('thumbnail2')
                            ->image()
                            ->required(),
                    Forms\Components\FileUpload::make('thumbnail3')
                            ->image()
                            ->required(),
                    Forms\Components\FileUpload::make('thumbnail4')
                            ->image()
                            ->required(),                
                        ]),

                Fieldset::make('Port')
                ->schema([
                    Forms\Components\Repeater::make('ports')
                        ->relationship('ports')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                    ]),
                ]),
                 Fieldset::make('Packing')
                ->schema([
                    Forms\Components\Repeater::make('packings')
                        ->relationship('packings')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                    ]),
                ]),
                Fieldset::make('Spesification')
                ->schema([
                    Forms\Components\Repeater::make('spesifications')
                        ->relationship('spesifications')
                        ->schema([
                            Forms\Components\TextInput::make('detail')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('spek')
                                ->required()
                                ->maxLength(255),
                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
                Tables\Columns\TextColumn::make('about'),
                
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}