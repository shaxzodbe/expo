<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('main_image')
                    ->image()
                    ->disk('public')
                    ->directory('about')
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('floating_image')
                    ->image()
                    ->disk('public')
                    ->directory('about')
                    ->visibility('public'),
                Forms\Components\TextInput::make('video_link')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('vector_1')
                    ->image()
                    ->disk('public')
                    ->directory('about')
                    ->visibility('public'),
                Forms\Components\FileUpload::make('vector_2')
                    ->image()
                    ->disk('public')
                    ->directory('about')
                    ->visibility('public'),
                Forms\Components\FileUpload::make('vector_3')
                    ->image()
                    ->disk('public')
                    ->directory('about')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('main_image'),
                Tables\Columns\ImageColumn::make('floating_image'),
                Tables\Columns\TextColumn::make('video_link')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('vector_1')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('vector_2')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('vector_3')
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
