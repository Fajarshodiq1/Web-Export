<?php

namespace App\Filament\Resources\DocumentationProductResource\Pages;

use App\Filament\Resources\DocumentationProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocumentationProducts extends ListRecords
{
    protected static string $resource = DocumentationProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
