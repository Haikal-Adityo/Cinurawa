<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
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
                Section::make()->schema([
                    Select::make('category_id')
                        ->relationship('category', 'name'),

                    TextInput::make('title')
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
                        })
                        ->required(),
                        
                    TextInput::make('slug')->disabled(),

                    FileUpload::make('thumbnail')
                        ->directory('blog/blog-thumbnails')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            $originalName = $file->getClientOriginalName();
                            $timestamp = now()->timestamp;

                            $formattedTimestamp = Carbon::createFromTimestamp($timestamp)->format('Y-m-d_H-i-s');

                            $newFileName = str($originalName)->prepend($formattedTimestamp);

                            return (string) $newFileName;
                        })
                        ->image()
                        ->imageEditor()
                        ->required(),

                    RichEditor::make('content')
                        ->fileAttachmentsDirectory('blog/blog-attachments'),

                    Toggle::make('is_published'),
                ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->limit('50')->sortable(),
                TextColumn::make('slug')->limit('50'),
                IconColumn::make('is_published')->boolean(),
                ImageColumn::make('thumbnail'),
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
