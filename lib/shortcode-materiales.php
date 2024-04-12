<?php

function wp_muestrarios_materiales_shortcode($params = array(), $content = null) {
  ob_start(); 

  //PANELEX
  $content = "Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2316golden.png
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2111blancop.png,2111.blanco p
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2316golden.png,2316.golden
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2137red.png,2137.red
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/0888lapizlasul.png,0888.lapizlasul
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2110cinder.png,2110.cinder
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2191cloud.png,2191.cloud
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2103alumina.png,2103.alumina
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2192graphite.png,2192.graphite
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2225terracota.png,2225.terracota
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2239sunset.png,2239.sunset
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2295orangine.png,2295.orangine
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2158burgundi.png,2158.burgundi
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2298mostaza.png,2298.mostaza
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2314brun.png,2314.brun
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2111taupe.png,2111.taupe
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2100antiqueblanco.png,2100.antique blanco
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2248olive.png,2248.olive
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2186neon.png,2186.neon
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2252forest.png,2252.forest
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2205citrus.png,2205.citrus
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2180mediterranean.png,2180.mediterranean
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2176turquesa.png,2176.turquesa
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/2182caribean.png,2182.caribean
  Solids,/wp-content/plugins/wp-muestrario/panelex/solids/0888blue.png,0888.blue
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1534nocenaturale.png
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1534nocenaturale.png,1534 noce naturale 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1467Roblelineal.png,1467 Roble lineal
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1517spicedchestnut.png,1517.spiced chestnut 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/0470ash.png,0470.ash 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1807wengue.png,1807.wengué 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1532countrysideoak.png,1532.country side oak 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1513italianwalnut.png,1513.italian walnut 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1474classiccherry.png,1474.classic cherry 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1829greyoak.png,1829-grey oak 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1489cypresscamel.png,1489.cypress camel 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1460pear.png,1460.pear 
  Woods,/wp-content/plugins/wp-muestrario/panelex/woods/1460mahogany.png,1460.mahogany
  Op. Ceramix,/wp-content/plugins/wp-muestrario/panelex/op.ceramix/3127industrialconcrete.png
  Op. Ceramix,/wp-content/plugins/wp-muestrario/panelex/op.ceramix/3127industrialconcrete.png,3127.industrial concrete
  Op. Ceramix,/wp-content/plugins/wp-muestrario/panelex/op.ceramix/3148industrialclinker.png,3148.industrial clinker
  Op. Ceramix,/wp-content/plugins/wp-muestrario/panelex/op.ceramix/2509metaliclinen.png,2509.metalic linen
  Precious Metals,/wp-content/plugins/wp-muestrario/panelex/precius-metals/2507oliedbronce.png
  Precious Metals,/wp-content/plugins/wp-muestrario/panelex/precius-metals/2507oliedbronce.png,2507.olied bronce
  Precious Metals,/wp-content/plugins/wp-muestrario/panelex/precius-metals/2508brushedrosegold.png,2508.brushed rosegold
  Precious Metals,/wp-content/plugins/wp-muestrario/panelex/precius-metals/2506brushedchampagne.png,2506.brushed champagne
  Art Work,/wp-content/plugins/wp-muestrario/panelex/ArtWork/01serieRicharddifusion.png
  Art Work,/wp-content/plugins/wp-muestrario/panelex/ArtWork/01serieRicharddifusion.png,01.serie Richard.difusion
  Art Work,/wp-content/plugins/wp-muestrario/panelex/ArtWork/02RF.png,02.RF
  Art Work,/wp-content/plugins/wp-muestrario/panelex/ArtWork/03RF.png,03 RF
  Art Work,/wp-content/plugins/wp-muestrario/panelex/ArtWork/04RF.png,04 RF";

  //LAMINADOS
  $content = "Color,/wp-content/plugins/wp-muestrario/laminados/Color/dermacolor.jpg
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2152gold.png,2152.gold
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2111blanco.png,2111.blanco
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2137red.png,2137.red
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/221cerulean.png,2221.cerulean
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2110ebano.png,2110.ebano
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2256platinum.png,2256.platinum
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2192carbon.png,2192.carbon
  Color,Básicos,/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2119silice.png,2119.silice

  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2225terracota.png,2225.terracota
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2295orangine.png,2295.orangine
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2273pink.png,2273.pink
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2158burgundi.png,2158.burgundi
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2298mostaza.png,2298.mostaza
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2100antiqueblanco.png,2100.antique blanco
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2111taupe.png,2111.taupe
  Color,Calidos,/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2158marron.png,2158.marrón

  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2180mediterranean.png,2180.mediterranean
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2176turquesa.png,2176.turquesa
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2221cerulean.png,2221.cerulean
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/0888lapizlasul.png,0888.lapizlasul
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2248oliva.png,2248.oliva
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2186neon.png,2186.neon
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2252forest.png,2252.forest
  Color,Fríos,/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2180mediterranean.png,2205.citrus

  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/texturas.jpg
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/MAT.png,MAT
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/BRILLO.png,BRILLO
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/CUERO.png,CUERO
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/EXTREM-MATE.png,EXTREM MATE
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/PW.png,PW
  Texturas,/wp-content/plugins/wp-muestrario/laminados/Texturas/BR-BRUSHED.png,BR BRUSHED

  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/timber.jpg
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1461Laricerustic.png,1461 Larice rustic  
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1467Roblelienal.png,1467 Roble lienal   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1517spicedchestnut.png,1517.spiced-chestnut   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1469segatomiele.png,1469.segato miele   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1807wengue.png,1807.wengué   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1532countrysideoak.png,1532.country side oak   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1513italianwalnut.png,1513.italian walnut
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1474classiccherry.png,1474.classic cherry   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1532cottageoak.png,1532.cottage oak  
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1522oakwheat.png,1522.oak wheat   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1523honeyoak.png,1523.honey oak   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1524oakganache.png,1524.oak ganache   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1599naturalelm.png,1599.natural elm   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1538oak.png,1538.oak   
  RealWood,/wp-content/plugins/wp-muestrario/laminados/RealWood/1513italianwalnut.png,1531.natural elm nordic

  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/asia.jpg
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/01serieRicharddifusion.png,01.serie Richard.difusion
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/02RF.png,02.RF
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/03RF.png,03 RF
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/04RF.png,04 RF
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021cristal.png,2021.cristal
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021triaungulatemc.png,2021.triaungulate.mc
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021triangulered.png,2021.triangule.red
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021poligonal.png,2021.poligonal
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021persa.png,2021.persa
  Art Work,/wp-content/plugins/wp-muestrario/laminados/ArtWork/2021geometrico.png,2021.geométrico

  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/03tksslim.png
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/2111blanco.png,2111.blanco
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/2167latte.png,2167.latte
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/2192carbon.png,2192.carbon
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/1517spicedchestnut.png,1517.spiced-chestnut
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/01tkschocolat.png,01.tks.chocolat
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/02tksvancouver.png,02.tks.vancouver
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/03tksslim.png,03.tks.slim
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/04tkscanvas.png,04.tks.canvas
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/05tkscool.png,05.tks.ool
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/06tksdotting.png,06.tks.dotting
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/07tksclassic.png,07.tks.classic
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/07tksclassic.png,08.tks.wavequake
  TekStur,/wp-content/plugins/wp-muestrario/laminados/TekStur/2110ebano.png,2110.ebano

  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/copper.jpg
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2026dorado.png,2026.dorado
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2025alumirror.png,2025.alu mirror
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2030alubrushed.png,2030.alu brushed
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2020StainSteelhr.png,2020.Stain.Steel.hr
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2035StainSteelbrushed.png,2035.Stain.Steel brushed
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2111cooperbrushed.png,2111.cooper brushed
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2036broncepulido.png,2036.bronce pulido
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2039broncepulido.png,2039.bronce pulido
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2509metaliclinen.png,2509.metalic linen
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2273BSPink.png,2273 BS Pink
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2316BSGolden.png,2316 BS Golden
  Metálicos,/wp-content/plugins/wp-muestrario/laminados/Metalicos/2176BSTurquesa.png,2176 BS Turquesa";

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
          <a href="#" class="circle" data-goto="<?= $counter; ?><" style="background-image: url('<?= $slide['image']; ?>');"><?= $label; ?></a>
        <?php $counter++; unset($swiper[$label]['image']); } ?>
      </div>
      <?php $swiper_count = 0; foreach($swiper as $slide) { 
        if (isset($slide['swiper'])) { $swiper_count++; ?>
          <div class="swiper-slide">
            <div class="swiper mySwiper<?=$swiper_count; ?> swiper-v">
              <div class="swiper-wrapper">
                <div class="swiper-slide menumosaic">
                  <?php $counter = 1; foreach($slide['swiper'] as $label => $image) { ?>
                    <a href="#" class="circle" data-goto="<?= $counter; ?><" style="background-image: url('<?= reset($image); ?>');"><?= $label; ?></a>
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
    <div id="popup" class="nozoom"><i class="close">&#x292B;</i><i class="zoom out">&#x2212;</i><i class="zoom in">+</i></div>
    <div id="returnhome">Volver</div>
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
add_shortcode('muestrarios-materiales', 'wp_muestrarios_materiales_shortcode');