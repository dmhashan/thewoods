<!-- START REVOLUTION SLIDER 2.3.91 -->
<div class="rev-slider-container">
<div id="rev1" class="rev-slider" >
<ul>
    <?php
    foreach (Config::get('companycarousel.slides') as $key => $value) {
    ?>
        <li 
            data-transition="<?php echo $value['data']['transition']; ?>"
            data-slotamount="<?php echo $value['data']['slotamount']; ?>"
            data-masterspeed="<?php echo $value['data']['masterspeed']; ?>" >
                <img 
                    src="<?php echo $value['src']; ?>"
                    alt="<?php echo $value['alt']; ?>"
                    data-bgposition="<?php echo $value['data']['bgposition']; ?>"
                    data-duration="<?php echo $value['data']['duration']; ?>"
                    data-ease="<?php echo $value['data']['ease']; ?>"
                    data-bgfit="<?php echo $value['data']['bgfit']; ?>"
                    data-bgfitend="<?php echo $value['data']['bgfitend']; ?>"
                    data-bgpositionend="<?php echo $value['data']['bgpositionend']; ?>" >
        </li>
    <?php
    }
    ?>

</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
