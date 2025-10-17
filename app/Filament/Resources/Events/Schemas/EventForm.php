<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Event')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, Set $set) =>
                        $set('slug', Str::slug($state))
                    )
                    ->columnSpanFull(),
                TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->columnSpanFull(),
                Textarea::make('description')
                    ->label('Deskripsi Event')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->label('Lokasi')
                    ->required()
                    ->maxLength(255)
                    ->prefixIcon('heroicon-o-map-pin'),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'upcoming' => 'Akan Datang',
                        'ongoing' => 'Berlangsung',
                        'completed' => 'Selesai'
                    ])
                    ->default('upcoming')
                    ->required()
                    ->native(false),

                DateTimePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required()
                    ->native(false)
                    ->seconds(false),

                DateTimePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->required()
                    ->native(false)
                    ->seconds(false)
                    ->after('start_date'),

                FileUpload::make('image')
                    ->label('Banner Event')
                    ->image()
                    ->disk('public')  // Tambahkan ini
                    ->directory('events')
                    ->visibility('public')  // Tambahkan ini
                    ->maxSize(2048)
                    ->imageEditor()
                    ->columnSpanFull(),
            ])->columns(2);
    }
}
