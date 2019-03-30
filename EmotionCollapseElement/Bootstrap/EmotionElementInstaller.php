<?php

namespace EmotionCollapseElement\Bootstrap;

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
        $collapseElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'EmotionCollapseElement',
            [
                'name' => 'Emotion Collapse Element',
                'template' => 'emotion_collapse',
                'cls' => 'emotion-collapse-element',
                'description' => 'Accordion for Shoppingworlds'
            ]
        );

        $collapseElement->createTextField([
            'name' => 'headline',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $collapseElement->createTinyMceField([
            'name' => 'collapseContent',
            'fieldLabel' => 'Content',
            'allowBlank' => true
        ]);

    }
}
