<?php

namespace App\Filament\Treasurer\Resources\ContributionResource\Pages;

use App\Filament\Treasurer\Resources\ContributionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContribution extends ViewRecord
{
    protected static string $resource = ContributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
