<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortofolioResource\Pages;
use App\Filament\Resources\PortofolioResource\RelationManagers;
use App\Models\Portofolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Carbon\Carbon;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Portofolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                ->schema([
                    Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $slug = Str::slug($state);
                        
                                $count = Portofolio::where('slug', $slug)->count();
                        
                                if ($count > 0) {
                                    $maxSuffix = Portofolio::where('slug', 'REGEXP', '^' . $slug . '-[0-9]+$')->max('slug');
                                    $maxSuffix = $maxSuffix ? (int)substr($maxSuffix, strrpos($maxSuffix, '-') + 1) : 0;
                                    $slug = $slug . '-' . ($maxSuffix + 1);
                                }
                        
                                $set('slug', $slug);
                            }),
                            
                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->unique(Portofolio::class, 'slug', ignoreRecord: true),

                        TextInput::make('sub_title')->required(),

                        FileUpload::make('thumbnail')
                            ->preserveFilenames()
                            ->directory('portofolio/portofolio-thumbnails')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                $originalName = $file->getClientOriginalName();
                                $timestamp = now()->timestamp;

                                $formattedTimestamp = Carbon::createFromTimestamp($timestamp)->format('Y-m-d_H-i-s_');

                                $newFileName = str($originalName)->prepend($formattedTimestamp);

                                return (string) $newFileName;
                            })
                            ->image()
                            ->imageEditor()
                            ->required(),

                        RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDirectory('portofolio/portofolio-attachments'),

                    ])
                ])
                ->columnSpan(['lg' => 2]),

                Group::make()
                ->schema([
                    Section::make('Status')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Published')
                            ->helperText('This portofolio will be published to the website.'),

                        Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Portofolio $record): ?string => $record->created_at?->diffForHumans())
                            ->hidden(fn (?Portofolio $record) => $record === null),

                        Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Portofolio $record): ?string => $record->updated_at?->diffForHumans())
                            ->hidden(fn (?Portofolio $record) => $record === null),
                    ])
                    ->columnSpan(['lg' => 1]),

                ])
                ->columnSpan(['lg' => 1])
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                    
                TextColumn::make('slug')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('sub_title')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('content')
                    ->limit(50)
                    ->html(),

                IconColumn::make('is_published')
                    ->boolean(),

                ImageColumn::make('thumbnail'),
            ])
            ->filters([
                Filter::make('Published')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true)),
                Filter::make('NotPublished')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', false)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }

}
