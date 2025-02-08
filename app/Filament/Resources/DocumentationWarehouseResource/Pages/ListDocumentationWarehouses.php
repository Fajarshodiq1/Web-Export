<?php

namespace App\Filament\Resources\DocumentationWarehouseResource\Pages;

use App\Filament\Resources\DocumentationWarehouseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocumentationWarehouses extends ListRecords
{
    protected static string $resource = DocumentationWarehouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
