<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeResource\Pages;
use App\Filament\Resources\WeResource\RelationManagers;
use App\Models\We;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WeResource extends Resource
{
    protected static ?string $model = We::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationLabel = 'О компание';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('text_company')->required(),
                Forms\Components\RichEditor::make('text_team')->required(),
                Forms\Components\RichEditor::make('text_contact')->required(),
                Forms\Components\FileUpload::make('image')->directory('uploads/image')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text_company'),
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
            'index' => Pages\ListWes::route('/'),
            'create' => Pages\CreateWe::route('/create'),
            'edit' => Pages\EditWe::route('/{record}/edit'),
        ];
    }
}
