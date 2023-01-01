<?php

namespace App\Nova;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'slug';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'slug',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Text::make('Title')->hideFromIndex()->rules('required'),
            Slug::make('Slug')->from('Title')->separator('_')->rules('required'),
            Boolean::make('Published', 'is_published')->sortable(),
            Textarea::make('Meta')->withMeta([
                'extraAttributes' => [
                    'placeholder' => 'Meta description helps SEO. Make grammatical sense, use keywords and less than 170 characters.'
                ]
            ])->alwaysShow()->rows(3),
            Textarea::make('Paragraph')->withMeta([
                'extraAttributes' => [
                    'placeholder' => 'The first paragraph of the article used as the snippet on article cards.'
                ]
            ])->alwaysShow()->rows(3),
            Text::make('Image', 'title_image')->hideFromIndex(),
            Markdown::make('Body')->alwaysShow(),
            Number::make('Views')->min(1)->hideFromDetail()->sortable(),
            Date::make('updated_at')->sortable(),
            Date::make('created_at')->sortable()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
