<?php

namespace App\Filament\Resources\VerificationCodeResource\Pages;

use App\Filament\Resources\VerificationCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVerificationCode extends EditRecord
{
    protected static string $resource = VerificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
