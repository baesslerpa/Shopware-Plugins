// {namespace name="backend/emotion/swag_vimeo_element"}
//{block name="emotion_components/backend/vimeo_video"}
Ext.define('Shopware.apps.Emotion.view.components.SalesmachineSliderElement', {
    /**
     * Extend from the base class for the emotion components
     */
    extend: 'Shopware.apps.Emotion.view.components.Base',

    /**
     * Create the alias matching the xtype you defined in your `createEmotionComponent()` method.
     * The pattern is always 'widget.' + xtype
     */
    alias: 'widget.salesmachine-slider-element',

    /**
     * Contains the translations of each input field which was created with the EmotionComponentInstaller.
     * Use the name of the field as identifier
     */
    snippets: {
    },

    /**
     * The constructor method of each component.
     */
    initComponent: function () {
        var me = this;

        /**
         * Call the original method of the base class.
         */
        me.callParent(arguments);
    }
});
//{/block}
