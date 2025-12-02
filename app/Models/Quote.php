<?php

namespace App\Models;

use Code16\OzuClient\Eloquent\IsOzuModel;
use Code16\OzuClient\OzuCms\Form\OzuEditorField;
use Code16\OzuClient\OzuCms\Form\OzuEditorToolbarButton;
use Code16\OzuClient\OzuCms\Form\OzuTextField;
use Code16\OzuClient\OzuCms\List\OzuColumn;
use Code16\OzuClient\OzuCms\OzuCollectionConfig;
use Code16\OzuClient\OzuCms\OzuCollectionFormConfig;
use Code16\OzuClient\OzuCms\OzuCollectionListConfig;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
    use HasFactory;
    use IsOzuModel;

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'parent_id');
    }

    public static function configureOzuCollection(OzuCollectionConfig $config): OzuCollectionConfig
    {
        return $config
            ->setLabel('Quotes')
            ->setIcon('fa-comment');
    }

    public static function configureOzuCollectionList(OzuCollectionListConfig $config): OzuCollectionListConfig
    {
        return $config
            ->setIsReorderable()
            ->addColumn(OzuColumn::makeImage('cover', 1))
            ->addColumn(OzuColumn::makeText('title', 4)->setLabel('Author'))
            ->addColumn(OzuColumn::makeText('content', 8)->setLabel('Content'));
    }

    public static function configureOzuCollectionForm(OzuCollectionFormConfig $config): OzuCollectionFormConfig
    {
        return $config
            ->configureContentField(fn (OzuEditorField $field) => $field
                ->setLabel('Content')
                ->setToolbar([
                    OzuEditorToolbarButton::Bold,
                    OzuEditorToolbarButton::Italic,
                ])
            )
            ->configureTitleField(fn (OzuTextField $field) => $field
                ->setLabel('Author')
            );
    }
}
