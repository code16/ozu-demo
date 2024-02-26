<?php

namespace App\Models;

use Code16\JockoClient\Eloquent\JockoModel;
use Code16\JockoClient\Eloquent\Media;
use Code16\JockoClient\JockoCms\Form\JockoField;
use Code16\JockoClient\JockoCms\JockoCollectionFormConfig;
use Code16\JockoClient\JockoCms\JockoCollectionListConfig;
use Code16\JockoClient\JockoCms\JockoCollectionConfig;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Code16\JockoClient\JockoCms\List\JockoColumn;

class Project extends JockoModel
{
    use HasFactory;

    protected array $jockoCustomAttributes = [
        'place',
        'year',
    ];

    public function visuals(): MorphMany
    {
        return $this->morphMany(Media::class, 'model')
            ->where('model_key', 'visuals')
            ->orderBy('order');
    }

    public function url(): Attribute
    {
        return Attribute::make(function ($value) {
            return route('projects.show', $this);
        });
    }

    public static function configureJockoCollection(JockoCollectionConfig $config): JockoCollectionConfig
    {
        return $config
            ->setLabel('Projects')
            ->setIcon('fa-ruler-combined')
            ->setHasPublicationState();
    }

    public static function configureJockoCollectionList(JockoCollectionListConfig $config): JockoCollectionListConfig
    {
        return $config
            ->addColumn(JockoColumn::makeImage('cover', 1))
            ->addColumn(JockoColumn::makeText('title', 4)->setLabel('Title'))
            ->addColumn(JockoColumn::makeText('place', 3)->setLabel('Place'))
            ->addColumn(JockoColumn::makeText('year', 3)->setLabel('Year'))
            ->setIsSearchable()
            ->setIsReorderable();
    }

    public static function configureJockoCollectionForm(JockoCollectionFormConfig $config): JockoCollectionFormConfig
    {
        return $config
            ->addCustomField(
                JockoField::makeText('Place')
                    ->setLabel('Place')
                    ->setValidationRules(['required'])
            )
            ->addCustomField(
                JockoField::makeText('year')
                    ->setLabel('Year')
                    ->setValidationRules(['required', 'integer'])
                    ->setHelpMessage('Year of the project')
            )
            ->addCustomField(
                JockoField::makeImageList('visuals')
                    ->setLabel('Visuals')
                    ->setMaxItems(5)
            );
    }
}
