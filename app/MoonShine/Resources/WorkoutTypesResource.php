<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\WorkoutType;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<WorkoutType>
 */
class WorkoutTypesResource extends ModelResource
{
    protected string $model = WorkoutType::class;

    protected string $title = 'WorkoutTypes';

    public string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Назва', 'title'),
                Slug::make('Slug')
                    ->from('title'),
                Image::make('Зображення', 'image'),
                Textarea::make('Опис', 'description')

            ]),
        ];
    }

    /**
     * @param WorkoutTypes $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
