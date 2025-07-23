<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MediaResource\Pages;
use App\Filament\Admin\Resources\MediaResource\RelationManagers;
use App\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file')
                    ->label('File Upload')
                    ->image()
                    ->directory('media-library')
                    ->required(),

                Forms\Components\TextInput::make('alt_text')
                    ->label('Alt Text')
                    ->required(),

                Forms\Components\Textarea::make('caption')
                    ->label('Caption/Description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('file')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->height(60),
                Tables\Columns\TextColumn::make('file')
                    ->label('Nama File')
                    ->limit(30),
                Tables\Columns\TextColumn::make('alt_text')
                    ->label('Alt Text')
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Unggah')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
