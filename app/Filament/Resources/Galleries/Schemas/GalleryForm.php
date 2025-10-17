<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                        ->label('Upload Foto')
                        ->image()
                        ->disk('public')  // Tambahkan ini
                        ->required()
                        ->directory('gallery')
                        ->visibility('public')  // Tambahkan ini
                        ->maxSize(3072)
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ])
                        ->columnSpanFull(),

                TextInput::make('title')
                    ->label('Judul Foto')
                    ->required()
                    ->maxLength(255),

                Select::make('event_id')
                    ->label('Event Terkait')
                    ->relationship('event', 'title')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->helperText('Urutan tampilan foto (angka kecil tampil lebih dulu)'),
            ])->columns(2);
    }
}
