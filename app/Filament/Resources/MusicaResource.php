<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MusicaResource\Pages;
use App\Filament\Resources\MusicaResource\RelationManagers;
use App\Models\Musica;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MusicaResource extends Resource
{
    protected static ?string $model = Musica::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('igreja_id')
                    ->label('Igreja')
                    ->relationship('igreja', 'nome')
                    ->required(),
                Forms\Components\TextInput::make('titulo')
                    ->required(),
                Forms\Components\TextInput::make('autor'),
                Forms\Components\Select::make('tom_original')
                    ->label('Tom original')
                    ->required()
                    ->options([
                        'C' => 'C (Dó)',
                        'C#' => 'C# (Dó#)',
                        'D' => 'D (Ré)',
                        'D#' => 'D# (Ré#)',
                        'E' => 'E (Mi)',
                        'F' => 'F (Fá)',
                        'F#' => 'F# (Fá#)',
                        'G' => 'G (Sol)',
                        'G#' => 'G# (Sol#)',
                        'A' => 'A (Lá)',
                        'A#' => 'A# (Lá#)',
                        'B' => 'B (Si)',
                        'Cm' => 'Cm (Dó menor)',
                        'C#m' => 'C#m (Dó# menor)',
                        'Dm' => 'Dm (Ré menor)',
                        'D#m' => 'D#m (Ré# menor)',
                        'Em' => 'Em (Mi menor)',
                        'Fm' => 'Fm (Fá menor)',
                        'F#m' => 'F#m (Fá# menor)',
                        'Gm' => 'Gm (Sol menor)',
                        'G#m' => 'G#m (Sol# menor)',
                        'Am' => 'Am (Lá menor)',
                        'A#m' => 'A#m (Lá# menor)',
                        'Bm' => 'Bm (Si menor)',
                    ])
                    ->searchable(),
                Forms\Components\Textarea::make('cifra')
                    ->label('Cifra')
                    ->rows(15)
                    ->autosize()
                    ->placeholder('[C]Grandes são Tuas obras')
                    ->columnSpan(2)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('igreja_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('autor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tom_original')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMusicas::route('/'),
            'create' => Pages\CreateMusica::route('/create'),
            'edit' => Pages\EditMusica::route('/{record}/edit'),
        ];
    }
}
