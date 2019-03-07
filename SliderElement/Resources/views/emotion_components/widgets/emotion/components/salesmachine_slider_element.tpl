{block name="widgets_emotion_components_salesmachine_slider_element"}


    {*{$Data.slider_background}

    {$Data.slider_headline}

    {$Data.slider_subline}

    {$Data.slider_background}*}

    <div class="crosscover">
      <!-- Overlay

            -->

      <div class="crosscover-list">

      {if $Data.slider_headline_one}

        <div class="crosscover-item">
              <div class="bg-img" style="background-image: url('{$Data.slider_background_one}')"></div>

              <div class="crosscover-content-wrap">

                <div class="crosscover-content-wrap-inner">
                  <strong>{$Data.slider_headline_one}</strong>
                  <p>{$Data.slider_subline_one}</p>
                </div>

              </div>

        </div>

      {/if}

      {if $Data.slider_headline_two}

        <div class="crosscover-item">
              <div class="bg-img" style="background-image: url('{$Data.slider_background_two}')"></div>

              <div class="crosscover-content-wrap">

                <div class="crosscover-content-wrap-inner">
                  <strong>{$Data.slider_headline_two}</strong>
                  <p>{$Data.slider_subline_two}</p>
                </div>

              </div>

        </div>

      {/if}

      {if $Data.slider_headline_three}

        <div class="crosscover-item">
              <div class="bg-img" style="background-image: url('{$Data.slider_background_three}')"></div>

              <div class="crosscover-content-wrap">

                <div class="crosscover-content-wrap-inner">
                  <strong>{$Data.slider_headline_three}</strong>
                  <p>{$Data.slider_subline_three}</p>
                </div>

              </div>

        </div>

      {/if}

      {if $Data.slider_headline_four}

        <div class="crosscover-item">
              <div class="bg-img" style="background-image: url('{$Data.slider_background_four}')"></div>

              <div class="crosscover-content-wrap">

                <div class="crosscover-content-wrap-inner">
                  <strong>{$Data.slider_headline_four}</strong>
                  <p>{$Data.slider_subline_four}</p>
                </div>

              </div>

        </div>

      {/if}

      {if $Data.slider_headline_five}

        <div class="crosscover-item">
              <div class="bg-img" style="background-image: url('{$Data.slider_background_five}')"></div>

              <div class="crosscover-content-wrap">

                <div class="crosscover-content-wrap-inner">
                  <strong>{$Data.slider_headline_five}</strong>
                  <p>{$Data.slider_subline_five}</p>
                </div>

              </div>

        </div>

      {/if}
    </div>
  </div>


{/block}
