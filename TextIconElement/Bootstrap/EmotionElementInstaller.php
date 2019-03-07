<?php

namespace TextIconElement\Bootstrap;

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
        $textIconElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'TextIconElement',
            [
                'name' => 'Text Icon',
                'xtype' => 'text-icon-element',
                'template' => 'text_icon_element',
                'cls' => 'text-icon-element',
                'description' => 'A simple text icon element for the shopping worlds.'
            ]
        );

        $textIconElement->createMediaField([
            'name' => 'element_icon',
            'fieldLabel' => 'Icon',
            'supportText' => 'Wählen Sie ein Icon aus.',
            'allowBlank' => true
        ]);


        $textIconElement->createTextAreaField([
            'name' => 'element_headline',
            'fieldLabel' => 'Überschrift',
            'supportText' => 'Titel des Elements',
            'allowBlank' => true
        ]);

        $textIconElement->createTinyMceField([
            'name' => 'element_text',
            'fieldLabel' => 'Zusätzlicher Text',
            'supportText' => 'Text des Elements',
            'allowBlank' => true
        ]);

        $textIconElement->createTextAreaField([
            'name' => 'element_link',
            'fieldLabel' => 'Link',
            'supportText' => 'Link des Elements',
            'allowBlank' => true
        ]);

        $textIconElement->createCheckboxField([
            'name' => 'element_button',
            'fieldLabel' => 'Button',
            'supportText' => 'Soll zusätzlich ein Button angezeigt werden?',
            'allowBlank' => true
        ]);
        
    }
}
