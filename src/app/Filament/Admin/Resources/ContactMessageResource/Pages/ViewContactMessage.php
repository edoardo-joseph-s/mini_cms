<?php
namespace App\Filament\Admin\Resources\ContactMessageResource\Pages;
use App\Filament\Admin\Resources\ContactMessageResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewContactMessage extends ViewRecord
{
    protected static string $resource = ContactMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('markAsRead')
                ->label('Mark as Read')
                ->action(fn ($record) => $record->update(['status' => 'read']))
                ->visible(fn ($record) => $record->status === 'new'),
        ];
    }
}
