<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workout;

use MoonShine\Fields\DateRange;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Workout>
 */
class WorkoutResource extends ModelResource
{
    protected string $model = Workout::class;

    protected string $title = 'Workouts';


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()
                    ->hideOnIndex(),
                BelongsTo::make('Тип тренування', 'workout_types', resource: new WorkoutTypesResource()),
                Text::make('Місце проведення', 'place'),
                BelongsTo::make('Тренер', 'coaches', resource: new CoachResource())
                    ->withImage('image'),
                DateRange::make('Час')
                    ->fromTo('start_time', 'end_time')
                    ->withTime(),
                BelongsTo::make('Клієнт', 'client', resource: new UserResource)
                    ->nullable()
                    ->searchable(),
                Number::make('Ціна', 'price'),
                Switcher::make('Злачено', 'is_payed')
            ]),
        ];
    }

    /**
     * @param Workout $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
