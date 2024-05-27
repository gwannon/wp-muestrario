<?php

function wp_muestrarios_madera_maciza_shortcode($params = array(), $content = null) {
  ob_start(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../general.css??hash=<?=date("YMDHis");?>" />
  <div class="swiper mySwiper swiper-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide mosaic">
        <a href="#" data-goto="1" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/roble-macizo/ROBLE-MACIZO.jpg');">Roble</a>
        <a href="#" data-goto="2" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA01.jpg');">Haya</a>
        <a href="#" data-goto="3" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO01.jpg');">Jatoba</a>
        <a href="#" data-goto="4" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO01.jpg');">Ipe</a>
        <a href="#" data-goto="5" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA01.jpg');">Sucupira</a>
        <a href="#" data-goto="6" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA01.jpg');">Massaranbuda</a>
        <a href="#" data-goto="7" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO01.jpg');">Merbou</a>
        <a></a>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/roble-macizo/ROBLE-MACIZO.jpg');">Roble Macizo</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA01.jpg');">Haya Vaporizada Maciza 1</div>  
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA02.jpg');">Haya Vaporizada Maciza 2</div> 
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO01.jpg');">Jatoba Maciza 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO02.jpg');">Jatoba Maciza 2</div>
       </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO01.jpg');">Ipe Macizo 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO02.jpg');">Ipe Macizo 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO03.jpg');">Ipe Macizo 3</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO04.jpg');">Ipe Macizo 4</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA01.jpg');">Sucupira Maciza 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA02.jpg');">Sucupira Maciza 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA03.jpg');">Sucupira Maciza 3</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA01.jpg');">Massaranbuda Maciza 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA02.jpg');">Massaranbuda Maciza 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA03.jpg');">Massaranbuda Maciza 3</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA04.jpg');">Massaranbuda Maciza 4</div>
      </div>   
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO01.jpg');">Merbou Maciza 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO02.jpg');">Merbou Maciza 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO03.jpg');">Merbou Maciza 3</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO04.jpg');">Merbou Maciza 4</div>
      </div>  
    </div>
    <div id="returnhome">Volver</div>
    <div id="popup"></div>
    <div id="controls" class="nozoom">
      <span class="close">&#x292B;</span><span class="zoom out">&#x2212;</span><span class="zoom in">+</span>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://www.daiago.com/wp-content/plugins/wp-muestrario/lib/../general.js?hash=<?=date("YMDHis");?>"></script>
  <?php /* <script>
  for (var i = 1; i <= 1; i++ ) {
    swiper[i] = new Swiper(".mySwiper"+i, {
      direction: "vertical",
      spaceBetween: 0,
    });

    jQuery('.mySwiper'+i+' .menumosaic a[data-goto]').click(function(e){
      e.preventDefault();
      swiper[1].slideTo((jQuery(this).data("goto")));
    });
  }
</script> */ ?>
  <?php
  return ob_get_clean();
}
add_shortcode('muestrarios-madera-maciza', 'wp_muestrarios_madera_maciza_shortcode');
