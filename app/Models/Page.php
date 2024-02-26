<?php

namespace App\Models;

use Code16\JockoClient\Eloquent\JockoModel;
use Code16\JockoClient\Eloquent\Media;
use Code16\JockoClient\JockoCms\Form\JockoField;
use Code16\JockoClient\JockoCms\JockoCollectionFormConfig;
use Code16\JockoClient\JockoCms\JockoCollectionListConfig;
use Code16\JockoClient\JockoCms\JockoCollectionConfig;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Code16\JockoClient\JockoCms\List\JockoColumn;

class Page extends JockoModel
{
    use HasFactory;

    protected array $jockoCustomAttributes = [
        'key',
    ];

    public static function configureJockoCollection(JockoCollectionConfig $config): JockoCollectionConfig
    {
        return $config
            ->setLabel('Pages')
            ->setIcon('fa-file')
            ->setHasPublicationState();
    }

    public static function configureJockoCollectionList(JockoCollectionListConfig $config): JockoCollectionListConfig
    {
        return $config
            ->addColumn(JockoColumn::makeImage('cover', 1))
            ->addColumn(JockoColumn::makeText('title', 4)->setLabel('Title'));
    }

    public static function configureJockoCollectionForm(JockoCollectionFormConfig $config): JockoCollectionFormConfig
    {
        return $config
            ->addCustomField(
                JockoField::makeText('key')
                    ->setIsUpdatable(false)
                    ->setLabel('Key')
            );
    }
}
