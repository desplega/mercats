<?php

namespace App\Filament\Resources\MarketResource\RelationManagers;

use App\Models\Market;
use App\Models\Store;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OwnersRelationManager extends RelationManager
{
    protected static string $relationship = 'owners';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')->required(),
                Forms\Components\TextInput::make('last_name')->required(),
                Forms\Components\TextInput::make('address')->required(),
                Forms\Components\TextInput::make('tax_number')->required(),
                Forms\Components\Select::make('market_id')
                    ->label('Market')
                    ->options(Market::all()->pluck('name', 'id')->toArray())
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('store_id', 0)),
                Forms\Components\Select::make('store_id')
                    ->label('Store')
                    ->options(function (callable $get) {
                        $market = Market::find($get('market_id'));
                        if (!$market) {
                            return Store::all()->pluck('name', 'id');
                        }
                        return $market->stores->pluck('name', 'id');
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('store.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
