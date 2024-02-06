<?php

namespace App\Models;

use Code16\JockoClient\Eloquent\JockoModel;
use Code16\JockoClient\Eloquent\Media;
use Code16\JockoClient\JockoCms\JockoCollectionFormConfig;
use Code16\JockoClient\JockoCms\JockoCollectionListConfig;
use Code16\JockoClient\JockoCms\JockoCollectionConfig;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Code16\JockoClient\JockoCms\List\JockoColumn;

class Project extends JockoModel
{
    use HasFactory;

//    protected $casts = [
//        'reference' => JockoCustomAttribute::class,
//        'year' => JockoCustomAttribute::class . ':integer',
//    ];

    public function visuals(): MorphMany
    {
        return $this->morphMany(Media::class, 'model')
            ->where('model_key', 'visuals')
            ->orderBy('order');
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
            ->addColumn(JockoColumn::makeText('reference', 3)->setLabel('Ref'))
            ->addColumn(JockoColumn::makeText('year', 3)->setLabel('Year'))
            ->setIsReorderable();
    }

    public static function configureJockoCollectionForm(JockoCollectionFormConfig $config): JockoCollectionFormConfig
    {
        return $config
//            ->addCustomField(
//                JockoField::makeText('reference')
//                    ->setLabel('Ref')
//                    ->setValidationRules(['required'])
//            )
//            ->addCustomField(
//                JockoField::makeText('year')
//                    ->setLabel('Year')
//                    ->setValidationRules(['required', 'integer'])
//            )
            ->addCustomField(
                JockoField::makeImageList('visuals')
                    ->setLabel('Visuals')
                    ->setMaxItems(5)
            );
    }
}
