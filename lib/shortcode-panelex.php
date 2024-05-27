<?php

function wp_muestrarios_panelex_shortcode($params = array(), $content = null) {
  ob_start(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../general.css?hash=<?=date("YMDHis");?>" />
	<div class="swiper mySwiper swiper-h">
		<div class="swiper-wrapper">
      <div class="swiper-slide mosaic">
        <a href="" data-goto="1" class="circle" style="height: calc(50% - 10px); background-image: url('/wp-content/plugins/wp-muestrario/panelex/solids/2316golden.jpg');">solids</a>
        <a href="" data-goto="2" class="circle" style="height: calc(50% - 10px); background-image: url('/wp-content/plugins/wp-muestrario/panelex/woods/1534-NOC-NTRLE.png');">woods</a>
        <a href="" data-goto="3" class="circle" style="height: calc(50% - 10px); background-image: url('/wp-content/plugins/wp-muestrario/panelex/op-ceramix/3127-IND-CONCRTE.png');">op.ceramix</a>
        <a href="" data-goto="4" class="circle" style="height: calc(50% - 10px); background-image: url('/wp-content/plugins/wp-muestrario/panelex/precius-metals/2507-OIL-BRONZE.png');">precius metals</a>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/0888blue.jpg');">0888 blue</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/0888lapizlasul.jpg');">0888 lapizlasul</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2100antiqueblanco.jpg');">2100 antiqueblanco</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2103alumina.jpg');">2103 alumina</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2110cinder.jpg');">2110cinder</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2111blancop.jpg');">2111 blancop</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2111taupe.jpg');">2111 taupe</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2137red.jpg');">2137 red</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2158burgundi.jpg');">2158 burgundi</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2176turquesa.jpg');">2176 turquesa</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2180mediterranean.jpg');">2180 mediterranean</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2182caribean.jpg');">2182 caribean</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2186neon.jpg');">2186 neon</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2191cloud.jpg');">2191 cloud</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2192graphite.jpg');">2192 graphite</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2205citrus.jpg');">2205 citrus</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2225terracota.jpg');">2225 terracota</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2239sunset.jpg');">2239 sunset</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2248olive.jpg');">2248 olive</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2252forest.jpg');">2252 forest</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2295orangine.jpg');">2295 orangine</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2298mostaza.jpg');">2298 mostaza</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2314brun.jpg');">2314 brun</div>
        <div class="muestra minicircle sixth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/solids/2316golden.jpg');">2316 golden</div> 
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_0470-FRESNP.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/0470-FRESNP.png">0470 FRESNP</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1460-MHOGNY.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1460-MHOGNY.png">1460 MHOGNY</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1474-CLCHERRY.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1474-CLCHERRY.png">1474 CLCHERRY</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1489-CIPRES-CMEL.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1489-CIPRES-CMEL.png">1489 CIPRES CMEL</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1513-IT-WLNT.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1513-IT-WLNT.png">1513 IT WLNT</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1517-SPICED-CHESTNUT.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1517-SPICED-CHESTNUT.png">1517 SPICED CHESTNUT</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1533-CSIDEOAK.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1533-CSIDEOAK.png">1533 CSIDEOAK</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1534-NOC-NTRLE.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1534-NOC-NTRLE.png">1534 NOC NTRLE</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1555-NCE-HAVANA.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1555-NCE-HAVANA.png">1555 NCE HAVANA</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1802-RNATUL.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1802-RNATUL.png">1802 RNATUL</div>
        <div class="muestra circle sixth haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/woods/zoom_1829-GREY-OAK.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/woods/1829-GREY-OAK.png">1829 GREY OAK</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra circle half haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/op-ceramix/zoom_3127-IND-CONCRTE.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/op-ceramix/3127-IND-CONCRTE.png">3127 IND CONCRTE</div>
        <div class="muestra circle half haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/op-ceramix/zoom_3156-GSLATE.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/op-ceramix/3156-GSLATE.png">3156 GSLATE</div>
        <div class="muestra circle half haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/op-ceramix/zoom_3179-CORTN.png');" data-full="/wp-content/plugins/wp-muestrario/panelex/op-ceramix/3179-CORTN.png">3179 CORTN</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/precius-metals/2506-BRUSHED-CHAMPAGNED.png');">2506 BRUSHED CHAMPAGNED</div>
        <div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/precius-metals/2507-OIL-BRONZE.png');">2507 OIL BRONZE</div>
        <div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/precius-metals/2508-BRUSED-ROSEGOLD.png');">2508 BRUSED ROSEGOLD</div>
        <div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/panelex/precius-metals/2509-METALIC-LINEN.png');">2509 METALIC LINEN</div>
      </div>
    </div>
    <div id="returnhome">Volver</div>
    <div id="popup"></div>
    <div id="controls" class="nozoom">
      <span class="close">&#x292B;</span><span class="zoom out">&#x2212;</span><span class="zoom in">+</span>
    </div>
  </div>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="<?php echo plugin_dir_url( __FILE__ ); ?>../general.js?hash=<?=date("YMDHis");?>"></script>
	<script>
		for (var i = 1; i <= 1; i++ ) {
			swiper[i] = new Swiper(".mySwiper"+i, {
				direction: "vertical",
				spaceBetween: 0,
			});

			jQuery('.mySwiper'+i+' .menumosaic a[data-goto]').click(swiper,function(e){
				e.preventDefault();
				swiper[1].slideTo((jQuery(this).data("goto")));
			});
		}
	</script>
  <?php return ob_get_clean();
}
add_shortcode('muestrarios-panelex', 'wp_muestrarios_panelex_shortcode');


/*function wp_muestrarios_materiales_shortcode($params = array(), $content = null) {
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
          <a href="" class="circle" data-goto="<?= $counter; ?><" style="background-image: url('<?= $slide['image']; ?>');"><?= $label; ?></a>
        <?php $counter++; unset($swiper[$label]['image']); } ?>
      </div>
      <?php $swiper_count = 0; foreach($swiper as $slide) { 
        if (isset($slide['swiper'])) { $swiper_count++; ?>
          <div class="swiper-slide">
            <div class="swiper mySwiper<?=$swiper_count; ?> swiper-v">
              <div class="swiper-wrapper">
                <div class="swiper-slide menumosaic">
                  <?php $counter = 1; foreach($slide['swiper'] as $label => $image) { ?>
                    <a href="" class="circle" data-goto="<?= $counter; ?><" style="background-image: url('<?= reset($image); ?>');"><?= $label; ?></a>
                  <?php $counter++; } ?>
                </div>
                <?php
                foreach($slide['swiper'] as $subslide) { 
                  if(count($subslide) > 16) $class = " minicircle sixth";
                  else if(count($subslide) > 12) $class = " minicircle quarter";
                  else if(count($subslide) > 8) $class = " minicircle third";
                  else if(count($subslide) > 6) $class = " circle quarter";
                  else if(count($subslide) > 4) $class = " circle third";
                  else $class = " circle half"; ?>
                  <div class="swiper-slide muestrario">
                    <?php foreach($subslide as $name => $image) { ?>
                      <div class="muestra <?= $class; ?>" style="--bgimage: url('<?= $image; ?>');"><?= $name; ?></div>
                    <?php } ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } else {
          if(count($slide) > 16) $class = " minicircle sixth";
          else if(count($slide) > 12) $class = " minicircle quarter";
          else if(count($slide) > 8) $class = " minicircle third";
          else if(count($slide) > 6) $class = " circle quarter";
          else if(count($slide) > 4) $class = " circle third";
          else $class = " circle half"; ?>
          <div class="swiper-slide muestrario">
            <?php foreach($slide as $name => $image) { ?>
              <div class="muestra<?= $class; ?>" style="--bgimage: url('<?= $image; ?>');"><?= $name; ?></div>
            <?php } ?>
          </div>
        <?php } ?>
      <?php }?>
    </div>
    <div id="popup" class="nozoom"></div>
    <div id="controls">
      <span class="close">&#x292B;</span><!-- <span class="zoom out">&#x2212;</span><span class="zoom in">+</span> -->
    </div>
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

        jQuery('.mySwiper'+i+' .menumosaic a[data-goto]').click(function(e){
          e.preventDefault();
          swiper[1].slideTo((jQuery(this).data("goto")));
        });
      }
    </script>
  <?php }
return ob_get_clean();
}
add_shortcode('muestrarios-materiales', 'wp_muestrarios_materiales_shortcode');*/