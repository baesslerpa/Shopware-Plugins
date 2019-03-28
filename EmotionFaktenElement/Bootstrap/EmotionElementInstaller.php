<?php

namespace EmotionFaktenElement\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $faktenElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'EmotionFaktenElement',
            [
                'name' => 'Emotion Fakten',
                'template' => 'emotion_fakten',
                'cls' => 'emotion-fakten-element',
                'description' => 'Simple facts counter'
            ]
        );

        $faktenElement->createTextField([
            'name' => 'headline',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $faktenElement->createMediaField([
            'name' => 'image_element',
            'fieldLabel' => 'Hintergrundbild',
            'allowBlank' => false
        ]);

        $faktenElement->createTextField([
            'name' => 'fact1number',
            'fieldLabel' => 'Fakt 1 Nummer',
            'allowBlank' => true
        ]);

        $faktenElement->createTextField([
            'name' => 'fact1info',
            'fieldLabel' => 'Fakt 1 Unterzeile',
            'allowBlank' => true
        ]);

        $faktenElement->createTextField([
            'name' => 'fact2number',
            'fieldLabel' => 'Fakt 2 Nummer',
            'allowBlank' => true
        ]);

        $faktenElement->createTextField([
            'name' => 'fact2info',
            'fieldLabel' => 'Fakt 2 Unterzeile',
            'allowBlank' => true
        ]);

        $faktenElement->createTextField([
            'name' => 'fact3number',
            'fieldLabel' => 'Fakt 3 Nummer',
            'allowBlank' => true
        ]);

        $faktenElement->createTextField([
            'name' => 'fact3info',
            'fieldLabel' => 'Fakt 3 Unterzeile',
            'allowBlank' => true
        ]);

    }
}
