{block name="widgets_emotion_components_fakten_element"}


<div id="counter" class="content-wrap">
  <img src="{$Data.image_element}">
  <div class="content-wrap-inner">
    <div class="facts-wrap container-medium-wrap">
      <p>{$Data.headline}</p>
      <div class="facts-wrap-inner">
        <div class="fact-1">
          <div class="counter-value" data-count="{$Data.fact1number}">0</div>
          <p>{$Data.fact1info}</p>
        </div>
        <div class="fact-2">
          <div class="counter-value" data-count="{$Data.fact2number}">0</div>
          <p>{$Data.fact2info}</p>
        </div>
        <div class="fact-3">
          <div class="counter-value" data-count="{$Data.fact3number}">0</div>
          <p>{$Data.fact3info}</p>
        </div>
      </div>
    </div>
  </div>
</div>
{/block}
