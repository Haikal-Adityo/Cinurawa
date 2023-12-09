<?php

namespace App\Filament\Resources\TagResource\RelationManagers;

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
use Filament\Resources\RelationManagers\RelationManager;
use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Carbon\Carbon;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Form $form): Form
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
                        
                                $count = Post::where('slug', $slug)->count();
                        
                                if ($count > 0) {
                                    $maxSuffix = Post::where('slug', 'REGEXP', '^' . $slug . '-[0-9]+$')->max('slug');
                                    $maxSuffix = $maxSuffix ? (int)substr($maxSuffix, strrpos($maxSuffix, '-') + 1) : 0;
                                    $slug = $slug . '-' . ($maxSuffix + 1);
                                }
                        
                                $set('slug', $slug);
                            }),
                            
                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->unique(Post::class, 'slug', ignoreRecord: true),

                            Select::make('category_id')
                            ->relationship('category', 'name')
                            ->columnSpan('full')
                            ->preload()
                            ->required()
                            ->searchable(),

                        FileUpload::make('thumbnail')->preserveFilenames()
                            ->image()
                            ->imageEditor()
                            ->required()
                            ->columnSpan('full')
                            ->directory('blog/blog-thumbnails')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                $originalName = $file->getClientOriginalName();
                                $timestamp = now()->timestamp;

                                $formattedTimestamp = Carbon::createFromTimestamp($timestamp)->format('Y-m-d_H-i-s_');

                                $newFileName = str($originalName)->prepend($formattedTimestamp);

                                return (string) $newFileName;
                            }),

                        RichEditor::make('content')
                            ->required()
                            ->columnSpan('full')
                            ->fileAttachmentsDirectory('blog/blog-attachments'),

                    ])
                    ->columns(2)
                ])
                ->columnSpan(['lg' => 2]),

                Group::make()
                ->schema([
                    Section::make('Status')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Published')
                            ->helperText('This post will be published to the website.'),

                        Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Post $record): ?string => $record->created_at?->diffForHumans())
                            ->hidden(fn (?Post $record) => $record === null),

                        Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Post $record): ?string => $record->updated_at?->diffForHumans())
                            ->hidden(fn (?Post $record) => $record === null),
                    ])
                    ->columnSpan(['lg' => 1]),

                    Section::make()
                    ->schema([
                        Select::make('tags')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->preload(),
                    ])
                    ->columnSpan(['lg' => 1]),
                ])
                ->columnSpan(['lg' => 1])
            ])
            ->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Image'),

                TextColumn::make('title')
                    ->limit('50')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->limit('50')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('is_published')
                    ->boolean(),
            ])
            ->filters([
                Filter::make('Published')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true)),
                Filter::make('NotPublished')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', false)),

                SelectFilter::make('Category')
                    ->relationship('category', 'name'),

                SelectFilter::make('Tag')
                    ->relationship('tags', 'name'),
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
}
