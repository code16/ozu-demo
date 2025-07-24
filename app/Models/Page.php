<?php

namespace App\Models;

use Code16\OzuClient\Eloquent\IsOzuModel;
use Code16\OzuClient\OzuCms\Form\OzuEditorField;
use Code16\OzuClient\OzuCms\Form\OzuEditorToolbarEnum;
use Code16\OzuClient\OzuCms\Form\OzuField;
use Code16\OzuClient\OzuCms\List\OzuColumn;
use Code16\OzuClient\OzuCms\OzuCollectionConfig;
use Code16\OzuClient\OzuCms\OzuCollectionFormConfig;
use Code16\OzuClient\OzuCms\OzuCollectionListConfig;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    use IsOzuModel;

    public static function configureOzuCollection(OzuCollectionConfig $config): OzuCollectionConfig
    {
        return $config
            ->setLabel('Pages')
            ->setIcon('fa-file')
            ->setHasPublicationState();
    }

    public static function configureOzuCollectionList(OzuCollectionListConfig $config): OzuCollectionListConfig
    {
        return $config
            ->addColumn(OzuColumn::makeImage('cover', 1))
            ->addColumn(OzuColumn::makeText('title', 4)->setLabel('Title'));
    }

    public static function configureOzuCollectionForm(OzuCollectionFormConfig $config): OzuCollectionFormConfig
    {
        return $config
            ->configureContentField(fn(OzuEditorField $field) => $field
                ->setLabel('Content')
                ->setToolbar([
                    OzuEditorToolbarEnum::Heading1,
                    OzuEditorToolbarEnum::Heading2,
                    OzuEditorToolbarEnum::Separator,
                    OzuEditorToolbarEnum::Bold,
                    OzuEditorToolbarEnum::Italic,
                    OzuEditorToolbarEnum::Link,
                    OzuEditorToolbarEnum::Separator,
                    OzuEditorToolbarEnum::Video,
                    OzuEditorToolbarEnum::Image,
                    OzuEditorToolbarEnum::Quote,
                    OzuEditorToolbarEnum::Separator,
                    OzuEditorToolbarEnum::BulletList,
                    OzuEditorToolbarEnum::OrderedList,
                ])
            )
            ->addCustomField(
                OzuField::makeText('key')
                    ->setLabel('Key')
            );
    }
}
