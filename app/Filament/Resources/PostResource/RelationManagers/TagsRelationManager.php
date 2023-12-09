<?php

namespace App\Filament\Resources\PostResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TagsRelationManager extends RelationManager
{
    protected static string $relationship = 'tags';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('name')
                        ->live()
                        ->afterStateUpdated(fn (Set $set, ?string $state) => 
                            $set('slug', Str::slug($state)))
                        ->required(),

                    TextInput::make('slug')->disabled(),
                ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit('50')->sortable(),
                TextColumn::make('slug')->limit('50'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make()->preloadRecordSelect(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
