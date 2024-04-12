<?php

function wp_muestrarios_madera_shortcode($params = array(), $content = null) {
  ob_start(); 

  $swiper = [];
  foreach (explode("\n", $content) as $line) {
    $line = trim($line);
    $item = explode(",", $line);
    if(count($item) == 2) {
      $swiper[$item[0]]['image'] = $item[1];
    } else if(count($item) == 3) {
      $swiper[$item[0]][$item[2]] = $item[1];
    } else if(count($item) == 4) {
      $swiper[$item[0]]['swiper'][$item[1]][$item[3]] = $item[2];
    }
  } ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../general.css" />
  <div class="swiper mySwiper swiper-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide mosaic">
        <?php $counter = 1; foreach($swiper as $label => $slide) { ?>
          <a href="#" data-goto="<?= $counter; ?><" style="background-image: url('<?= $slide['image']; ?>');"><?= $label; ?></a>
        <?php $counter++; unset($swiper[$label]['image']); } ?>
      </div>
      <?php $swiper_count = 0; foreach($swiper as $slide) { 
        if (isset($slide['swiper'])) { $swiper_count++; ?>
          <div class="swiper-slide">
            <div class="swiper mySwiper<?=$swiper_count; ?> swiper-v">
              <div class="swiper-wrapper">
                <div class="swiper-slide menumosaic">
                  <?php $counter = 1; foreach($slide['swiper'] as $label => $image) { ?>
                    <a href="#" data-goto="<?= $counter; ?><" style="background-image: url('<?= reset($image); ?>');"><?= $label; ?></a>
                  <?php $counter++; } ?>
                </div>
                <?php
                foreach($slide['swiper'] as $subslide) { 
                  if(count($slide) > 16) $class = " sixth";
                  else if(count($slide) > 12) $class = " quarter";
                  else if(count($slide) > 8) $class = " third";
                  else if(count($slide) > 4) $class = " half";
                  else $class = ""; ?>
                  <div class="swiper-slide muestrario">
                    <?php foreach($subslide as $name => $image) { ?>
                      <div class="muestra<?= $class; ?>" style="--bgimage: url('<?php echo admin_url( 'admin-ajax.php' ) ; ?>?action=muestrario_rotar&image=<?= $image; ?>');"><?= $name; ?></div>
                    <?php } ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } else {
          if(count($slide) > 16) $class = " sixth";
          else if(count($slide) > 12) $class = " quarter";
          else if(count($slide) > 8) $class = " third";
          else if(count($slide) > 4) $class = " half";
          else $class = ""; ?>
          <div class="swiper-slide muestrario">
            <?php foreach($slide as $name => $image) { ?>
              <div class="muestra<?= $class; ?>" style="--bgimage: url('<?php echo admin_url( 'admin-ajax.php' ) ; ?>?action=muestrario_rotar&image=<?= $image; ?>');"><?= $name; ?></div>
            <?php } ?>
          </div>
        <?php } ?>
      <?php }?>
    </div>
    <div id="popup"><i class="close">&#x292B;</i><i class="zoom out">&#x2212;</i><i class="zoom in">+</i></div>
    <div id="returnhome"><?php _e("Volver", "wp-muestrario"); ?></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ); ?>../general.js"></script>
  <?php if($swiper_count > 0) { ?>
    <script>
      for (var i = 1; i <= <?=$swiper_count; ?>; i++ ) {
        swiper[i] = new Swiper(".mySwiper"+i, {
          direction: "vertical",
          spaceBetween: 0,
        });

        jQuery('.mySwiper'+i+' .menumosaic a[data-goto]').click(swiper,function(){
          swiper[1].slideTo((jQuery(this).data("goto")));
        });
      }
    </script>
  <?php }
return ob_get_clean();
}
add_shortcode('muestrarios-madera', 'wp_muestrarios_madera_shortcode');