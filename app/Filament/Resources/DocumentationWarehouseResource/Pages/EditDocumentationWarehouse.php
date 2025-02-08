<?php

namespace App\Filament\Resources\DocumentationWarehouseResource\Pages;

use App\Filament\Resources\DocumentationWarehouseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocumentationWarehouse extends EditRecord
{
    protected static string $resource = DocumentationWarehouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
