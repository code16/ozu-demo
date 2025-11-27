<?php

namespace App\Settings;

use Code16\OzuClient\OzuCms\Form\OzuField;
use Code16\OzuClient\OzuCms\OzuSettingsFormConfig;
use Code16\OzuClient\Support\Settings\OzuSiteSettings;

class Settings extends OzuSiteSettings
{
    public string $siteTitle = 'Ozu - Demo';

    public string $githubUrl = 'https://github.com/code16/ozu-client';
    public string $youtubeDemoVideoUrl = 'https://www.youtube.com/watch?v=ZBYZHeB67O4';
    public string $linkedinUrl = 'https://www.linkedin.com/company/code-16-web/posts/?feedView=all';

    public static function configureSettingsForm(OzuSettingsFormConfig $config): OzuSettingsFormConfig
    {
        return $config
            ->addSettingField(
                OzuField::makeText('siteTitle')
                    ->setLabel('Site Title')
                    ->setValidationRules(['required', 'string', 'max:150'])
            )
            ->addSettingField(
                OzuField::makeText('githubUrl')
                    ->setLabel('Github URL')
            )
            ->addSettingField(
                OzuField::makeText('youtubeDemoVideoUrl')
                    ->setLabel('Youtube Demo Video URL')
            )
            ->addSettingField(
                OzuField::makeText('linkedinUrl')
                    ->setLabel('Linkedin URL')
            );
    }
}
