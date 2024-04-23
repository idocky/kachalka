<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coach;

use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Coach>
 */
class CoachResource extends ModelResource
{
    protected string $model = Coach::class;

    protected string $title = 'Тренери';

    public string $column = 'full_name';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('ПІБ', 'full_name'),
                Number::make('Стаж', 'experience'),
                \MoonShine\Fields\Image::make('Фото', 'image')
            ]),
        ];
    }

    /**
     * @param Coach $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
