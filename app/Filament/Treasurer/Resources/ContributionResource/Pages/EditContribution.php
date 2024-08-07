<?php

namespace App\Filament\Treasurer\Resources\ContributionResource\Pages;

use App\Filament\Treasurer\Resources\ContributionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContribution extends EditRecord
{
    protected static string $resource = ContributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
