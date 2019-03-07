//
//{block name="backend/emotion/view/detail/elements/base"}
//{$smarty.block.parent}
Ext.define('Shopware.apps.Emotion.view.detail.elements.SalesmachineSliderElement', {

    /**
     * Extend from the base class for the grid elements.
     */
    extend: 'Shopware.apps.Emotion.view.detail.elements.Base',

    /**
     * Create the alias matching with the xtype you defined for your element.
     * The pattern is always 'widget.detail-element-' + xtype
     */
    //alias: 'widget.detail-element-emotion-components-vimeo',

    /**
     * You can define an additional CSS class which will be used for the grid element.
     */
    componentCls: 'emotion--salesmachine-slider',

    /**
     * Define the path to an image for the icon of your element.
     * You could also use a base64 string.
     */
    icon: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQwIDc5LjE2MDQ1MSwgMjAxNy8wNS8wNi0wMTowODoyMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QURDQkMyN0Q5NzJCMTFFODlDNDJFQjQwMDZFRjQxRjEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QURDQkMyN0U5NzJCMTFFODlDNDJFQjQwMDZFRjQxRjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBRENCQzI3Qjk3MkIxMUU4OUM0MkVCNDAwNkVGNDFGMSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBRENCQzI3Qzk3MkIxMUU4OUM0MkVCNDAwNkVGNDFGMSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoUWctEAAAAzUExURYeHh6Wlpff39+Hh4Y+Pj+jo6LS0tJ6enpaWlsPDw9LS0ry8vPDw8NnZ2crKyq2trf///wOCxlQAAAARdFJOU/////////////////////8AJa2ZYgAAA89JREFUeNrsmtmSGyEMRdXsTW/z/1+bKWfKMw0SkoA4lYp5teGwCCFdNXy8vMEb+T8jt+XWXoFc4NbeyH6kOZOVIIOfhDSrAxAhARY7AfkAipESKIfM7vfAYuQn1I8g/XN4BRJgM93I9XtgFRLS0Yc0P8fWIZsLpZHWwQASolcj831gNRLcoUQGGEUCZBWyJHYhYVMgK2IfEoIYWRM7kSgTZMReJKwi5AoTkYgNAXc7vprvRYJnkd4h3W73mkYeWF+3M0gT2QNpRAXmwubLIDdkmlYRiJy8CRU9LDLJXRX7WMcd572HSTXRKMMtxBhiA7kJiGyEh5jDSiJ3CZEPKo1rWi00BsOJgji23ttAIC17paShs6+2a8eRS8PLKaP1s7FMaExtHUgQLnqZQD8gcSQnqUwoIEjD+mNVGnSUdmFq5Cl50RWZ10K9Yt89EjWrTuROnRNQxrMO55eBMCAgYgF6kWJkucyzREbhSSqy6GKZS4HcaW/RjSy9mbkjs+xO6rSCwiKPO3LD930MuaHBO+BHuU9BevQwAY0H4yQRJmF/BXQ+2yRkwPYOUI+YJymEaJIKqCPwk5AW82g4cp4QSiMXufWo2t1+LhrZ1li9vTWFxLjQyGuaUilGrtOQG42Mfwi50kj3euTyt5Hb681n+ZeRkUbeXb6bhpT7WDMJuTeQWZJy6ZEHFvxA45UZR66N99KA3H4UyNgIRPAoZRRp0IgK8BT0mFJMzGgGAHiqF6Y80BcaUQGReJkJRIMnHc+jcPJwXdoKe01l5hXw3+cFPs/HAqjcfjyULbXko0rc3exllkpArRWEycs8qaIJkEqTGzPaSvjxiNQUYebdLOWtBVO3qtLBMUA86OIF0Oc9srV7ua0JVyozp/3LDzI2KjTQMOv+46xKWIlSnTPMYdZFs4OU8ysRmAlppcSFriB4mLDOwBRKgC0GKZkmcOWgAonUZupyUPN2RLboBaz236idIx7A8eVEYLX/R1otcwpoYa967YHX/h8LlUQJJ7bE2hZEJavHZeYes5zQfnVBSVSy+oKe9PaaNRGd6j6yktXzTDNGNfmiOjhEJ8NLViTzc6O24+cw/tgi/WeMSHw90WI+tusrUk/tv6FE6hsRjilqCVcfQeFFlC0S1ga6a61ogbJvEMf3ykb7jlZ6aNPsY2SRH2brJDa/imMEZttjRbGtk7OadtZeF9YZ8zL610eVUiD/5IiU+5xmrVCM/DzTwC/VBSsaS1yfMLlJdUEcrahKIv68sC1O16mp5airMMbmNTxFn7Bmq02W3l/nv5ED7ZcAAwBjwBhiz98IUAAAAABJRU5ErkJggg==',

    // /**
    //  * You can override the original `createPreview()` method
    //  * to create a custom grid preview for your element.
    //  *
    //  * @returns { string }
    //  */
    // createPreview: function () {
    //     var me = this,
    //         preview = '',
    //         image = me.getConfigValue('vimeo_video_thumbnail'),
    //         style;
    //
    //     if (Ext.isDefined(image)) {
    //         style = Ext.String.format('background-image: url([0]);', image);
    //
    //         preview = Ext.String.format('<div class="x-emotion-banner-element-preview" style="[0]"></div>', style);
    //     }
    //
    //     return preview;
    // }
});
//{/block}
