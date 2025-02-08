<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackResource\Pages;
use App\Filament\Resources\TrackResource\RelationManagers;
use App\Models\ProductClick;
use App\Models\Track;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrackResource extends Resource
{
    protected static ?string $model = ProductClick::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
             TextColumn::make('product.name') // Ambil nama produk
                ->label('Product Name'),
            TextColumn::make('clicks')
                ->label('Clicks')
                ->sortable()
                ->getStateUsing(fn ($record) => ProductClick::where('product_id', $record->id)->value('click_count') ?? 0),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
              
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
            'index' => Pages\ListTracks::route('/'),
            'edit' => Pages\EditTrack::route('/{record}/edit'),
        ];
    }
}