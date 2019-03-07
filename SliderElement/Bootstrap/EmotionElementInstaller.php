<?php

namespace SalesmachineSliderElement\Bootstrap;

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
        $salesmachineSliderElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'SalesmachineSliderElement',
            [
                'name' => 'Salesmachine Slider',
                'xtype' => 'salesmachine-slider-element',
                'template' => 'salesmachine_slider_element',
                'cls' => 'salesmachine-slider-element',
                'description' => 'Simple Image Slider'
            ]
        );

        $salesmachineSliderElement->createDisplayField([
                'name' => 'slide_number_one',
                'fieldLabel' => 'Slide Nummer',
                'defaultValue' => 'Dies ist Slide Nummer 1'
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_headline_one',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_subline_one',
            'fieldLabel' => 'Subline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createMediaField([
            'name' => 'slider_background_one',
            'fieldLabel' => 'Background-Image',
            'supportText' => 'Hintergrundbild des Sliders',
            'allowBlank' => true
        ]);


        //----------------------------------------------------


        $salesmachineSliderElement->createDisplayField([
                'name' => 'slide_number_two',
                'fieldLabel' => 'Slide Nummer',
                'defaultValue' => 'Dies ist Slide Nummer 2'
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_headline_two',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_subline_two',
            'fieldLabel' => 'Subline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createMediaField([
            'name' => 'slider_background_two',
            'fieldLabel' => 'Background-Image',
            'supportText' => 'Hintergrundbild des Sliders',
            'allowBlank' => true
        ]);


        //----------------------------------------------------


        $salesmachineSliderElement->createDisplayField([
                'name' => 'slide_number_three',
                'fieldLabel' => 'Slide Nummer',
                'defaultValue' => 'Dies ist Slide Nummer 3'
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_headline_three',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_subline_three',
            'fieldLabel' => 'Subline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createMediaField([
            'name' => 'slider_background_three',
            'fieldLabel' => 'Background-Image',
            'supportText' => 'Hintergrundbild des Sliders',
            'allowBlank' => true
        ]);


        //----------------------------------------------------


        $salesmachineSliderElement->createDisplayField([
                'name' => 'slide_number_four',
                'fieldLabel' => 'Slide Nummer',
                'defaultValue' => 'Dies ist Slide Nummer 4'
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_headline_four',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_subline_four',
            'fieldLabel' => 'Subline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createMediaField([
            'name' => 'slider_background_four',
            'fieldLabel' => 'Background-Image',
            'supportText' => 'Hintergrundbild des Sliders',
            'allowBlank' => true
        ]);



        //----------------------------------------------------


        $salesmachineSliderElement->createDisplayField([
                'name' => 'slide_number_five',
                'fieldLabel' => 'Slide Nummer',
                'defaultValue' => 'Dies ist Slide Nummer 5'
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_headline_five',
            'fieldLabel' => 'Headline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createTinyMceField([
            'name' => 'slider_subline_five',
            'fieldLabel' => 'Subline',
            'allowBlank' => true
        ]);

        $salesmachineSliderElement->createMediaField([
            'name' => 'slider_background_five',
            'fieldLabel' => 'Background-Image',
            'supportText' => 'Hintergrundbild des Sliders',
            'allowBlank' => true
        ]);




    }

}
