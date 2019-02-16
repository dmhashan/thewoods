<!-- START REVOLUTION SLIDER 2.3.91 -->
<div class="rev-slider-container animated" data-fx="fadeInUp">
<div id="rev1" class="rev-slider" >
<ul>
    <?php
    foreach (Config::get('companycarousel.slides') as $key => $value) {
    ?>
        <li 
            data-transition="{{ $value['data']['transition'] }}"
            data-slotamount="{{ $value['data']['slotamount'] }}"
            data-masterspeed="{{ $value['data']['masterspeed'] }}" >
                <img 
                    src="{{ $value['src'] }}"
                    alt="{{ $value['alt'] }}"
                    data-bgposition="{{ $value['data']['bgposition'] }}"
                    data-duration="{{ $value['data']['duration'] }}"
                    data-ease="{{ $value['data']['ease'] }}"
                    data-bgfit="{{ $value['data']['bgfit'] }}"
                    data-bgfitend="{{ $value['data']['bgfitend'] }}"
                    data-bgpositionend="{{ $value['data']['bgpositionend'] }}" >
        </li>
    <?php
    }
    ?>

</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
