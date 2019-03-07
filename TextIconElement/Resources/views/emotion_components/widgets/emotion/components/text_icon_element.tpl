{block name="widgets_emotion_components_text_icon_element"}
{if $Data.element_link}<a href="{$Data.element_link}" class="texticon">
<div class="texticon-outer">
  <div class="texticon-inner">

    {if $Data.element_icon}
      <div class="texticon-icon" style="background-image: url('{$Data.element_icon}');">
      </div>
    {/if}

    <div class="texticon-textbox">
      {if $Data.element_headline}
        <div class="texticon-headline">
          {$Data.element_headline}
        </div>
      {/if}

      {if $Data.element_text}
        <div class="texticon-text">
          {$Data.element_text}
        </div>
      {/if}

      {if $Data.element_button}
        <div class="texticon-button">
          {$Data.element_button}
        </div>
      {/if}
    </div>
  </div>
  </div>
</a>
{else}
<div class="texticon">
  <div class="texticon-outer">
    <div class="texticon-inner">

      {if $Data.element_icon}
        <div class="texticon-icon" style="background-image: url('{$Data.element_icon}');">
        </div>
      {/if}

      <div class="texticon-textbox">
        {if $Data.element_headline}
          <div class="texticon-headline">
            {$Data.element_headline}
          </div>
        {/if}

        {if $Data.element_text}
          <div class="texticon-text">
            {$Data.element_text}
          </div>
        {/if}

        {if $Data.element_button}
          <div class="texticon-button">
            {$Data.element_button}
          </div>
        {/if}
      </div>
    </div>
    </div>
</div>
{/if}
{/block}
