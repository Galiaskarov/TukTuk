<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantagResource\Pages;
use App\Filament\Resources\AdvantagResource\RelationManagers;
use App\Models\Advantag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvantagResource extends Resource
{
    protected static ?string $model = Advantag::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';
    protected static ?string $navigationLabel = 'Преимущества';
    protected static ?string $modelLabel = 'Преимущество';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\RichEditor::make('text')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('text')
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
            'index' => Pages\ListAdvantags::route('/'),
            'create' => Pages\CreateAdvantag::route('/create'),
            'edit' => Pages\EditAdvantag::route('/{record}/edit'),
        ];
    }
}
