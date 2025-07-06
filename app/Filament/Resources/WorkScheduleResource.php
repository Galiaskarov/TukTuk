<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkScheduleResource\Pages;
use App\Filament\Resources\WorkScheduleResource\RelationManagers;
use App\Models\WorkSchedule;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class WorkScheduleResource extends Resource
{
    protected static ?string $model = WorkSchedule::class;

    protected static ?string $modelLabel = 'Час';

    protected static ?string $pluralModelLabel = 'Часы';

    protected static ?string $navigationLabel = 'Mis Clientes';
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form->schema([
            DatePicker::make('date')->required(),
            TimePicker::make('start_time')->required()->label('Start Time'),
            TimePicker::make('end_time')->required()->label('End Time'),
            Select::make('user_id')
                ->label('User')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')->label('DATE')->sortable()->searchable(),
            ])
            ->filters([
                Filter::make('current_week')
                    ->query(fn ($query) => $query->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])),
                Filter::make('current_month')
                    ->query(fn ($query) => $query->whereMonth('date', now()->month)),
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
            'index' => Pages\ListWorkSchedules::route('/'),
            'create' => Pages\CreateWorkSchedule::route('/create'),
            'edit' => Pages\EditWorkSchedule::route('/{record}/edit'),
        ];
    }
}
