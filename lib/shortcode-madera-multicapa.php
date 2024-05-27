<?php

function wp_muestrarios_madera_multicapa_shortcode($params = array(), $content = null) {
  ob_start(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../general.css??hash=<?=date("YMDHis");?>" />
  <div class="swiper mySwiper swiper-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide mosaic">
        <a href="" data-goto="1" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FORESTAL.jpg');">Roble</a>
        <a href="" data-goto="2" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE01.jpg');">Haya</a>
        <a href="" data-goto="3" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA01.jpg');">Fresno</a>
        <a href="" data-goto="4" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE01.jpg');">Arce</a>
        <a href="" data-goto="5" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-01.jpg');">Cerezo</a>
        <a href="" data-goto="6" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-EUROPA.jpg');">Pino</a>
        <a href="" data-goto="7" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA01.jpg');">Teca</a>
        <a href="" data-goto="8" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE01.jpg');">Merbau</a>
        <a href="" data-goto="9" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE01.jpg');">Jatoba</a>
        <a href="" data-goto="10" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE01.jpg');">Ipe</a>
        <a href="" data-goto="11" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-ELEGANCE.jpg');">Sucupira</a>
        <a href="" data-goto="12" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE01.jpg');">Massaranduba</a>
        <a href="" data-goto="13" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-GRIS.jpg');">Tauari</a>
      </div>
      <div class="swiper-slide">
        <div class="swiper mySwiper1 swiper-v">
          <div class="swiper-wrapper">
            <div class="swiper-slide menumosaic">
              <a href="" data-goto="1" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FORESTAL.jpg');">3 lamas</a>
              <a href="" data-goto="2" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA01.jpg');">Europa</a>
              <a href="" data-goto="3" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-magna/ROBLE-MAGNA.jpg');">Magna</a>
              <a href="" data-goto="4" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME01.jpg');">Monolama</a>
              <a href="" data-goto="5" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-MONOLAMA-BRUMA.jpg');">Preaceitado</a>
              <a href="" data-goto="6" style="background-image: url('/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-01.jpg');">Vintage</a>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FORESTAL.jpg');">Roble Forestal</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FUME.jpg');">Roble Fume</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-LATINA.jpg');">Roble Latina</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-PLUS.jpg');">Roble Plus</div>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA01.jpg');">Roble Europa 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA02.jpg');">Roble Europa 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA03.jpg');">Roble Europa 3</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA-FUME.jpg');">Roble Europa Fume</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA-PLUS.jpg');">Roble Europa Plus</div>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-magna/ROBLE-MAGNA.jpg');">Roble Magna</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-magna/ROBLE-MAGNA-PLUS.jpg');">Roble Magna PLus</div>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME01.jpg');">Roble Fume 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME02.jpg');">Roble Fume 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME03.jpg');">Roble Fume 3</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE01.jpg');">Roble Invisible 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE02.jpg');">Roble Invisible 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE03.jpg');">Roble Invisible 3</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-CHOCOLATE.jpg');">Roble Monolama Chocolate</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-FLOR-DE-SAL.jpg');">Roble Monolama Flor de Sal</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-NATURAL-PORO-BLANCO.jpg');">Roble Monolama Natural Poro Blanco</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TIERRA-DE-SIENA.jpg');">Roble Monolama Tierra de Siena</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TITANIO.jpg');">Roble Monolama Titanio</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TITANIO-PORO-BLANCO.jpg');">Roble Monolama Titanio Poro Blanco</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL01.jpg');">Roble Natural 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL02.jpg');">Roble Natural 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL03.jpg');">Roble Natural 3</div>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-MONOLAMA-BRUMA.jpg');">Roble Monolama Bruma</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-COGNAC.jpg');">Roble Precintado Cognac</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-NATURAL.jpg');">Roble Precintado Natural</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA01.jpg');">Roble Precintado Perla 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA02.jpg');">Roble Precintado Perla 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA03.jpg');">Roble Precintado Perla 3</div>
            </div>
            <div class="swiper-slide muestrario">
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-01.jpg');">Piedra Luna 1</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-02.jpg');">Piedra Luna 2</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-03.jpg');">Piedra Luna 3</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-OCEANWOOD.jpg');">Roble Vintage Oceanwood</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-SEPIA.jpg');">Roble Vintage Sepia</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-SPIRIT.jpg');">Roble Vintage Spirit</div>
              <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-STONE.jpg');">Roble Vintage Stone</div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE01.jpg');">Haya Elegance 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE02.jpg');">Haya Elegance 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE03.jpg');">Haya Elegance 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-01.jpg');">Haya Forestal 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-02.jpg');">Haya Forestal 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-03.jpg');">Haya Forestal 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-LATINA-VAPORIZADA01.jpg');">Haya Latina Vaporizada 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-LATINA-VAPORIZADA02.jpg');">Haya Latina Vaporizada 2</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA01.jpg');">Fresno Latina 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA02.jpg');">Fresno Latina 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA03.jpg');">Fresno Latina 3</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE01.jpg');">Arce Elegance 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE02.jpg');">Arce Elegnce 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-EUROPA.jpg');">Arce Europa</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL01.jpg');">Arce Forestal 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL02.jpg');">Arce Forestal 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL03.jpg');">Arce Forestal 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-LATINA.jpg');">Arce Latina</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-PLUS.jpg');">Arce Plus</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-01.jpg');">Cerezo Europa 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-02.jpg');">Cerezo Europa 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-03.jpg');">Cerezo Europa 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-LATINA.jpg');">Cerezo Latina</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-PLUS.jpg');">Cerezo Plus</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-EUROPA.jpg');">Pino Europa</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA01.jpg');">Pino Magna 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA02.jpg');">Pino Magna 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA03.jpg');">Pino Magna 3</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA01.jpg');">Teca Europa 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA02.jpg');">Teca Europa 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA03.jpg');">Teca Europa 3</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE01.jpg');">Merbau Elegance 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE02.jpg');">Merbau Elagance 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE03.jpg');">Merbau Elegance 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-EUROPA.jpg');">Merbau Europa</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-LATINA.jpg');">Merbau Latina</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-MAGNA.jpg');">Merbau Magna</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE01.jpg');">Jatoba Elegance 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE02.jpg');">Jatoba Elegance 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE03.jpg');">Jatoba Elegance 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-EUROPA.jpg');">Jatoba Europa</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA01.jpg');">Jatoba Latina 1</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA02.jpg');">Jatoba Latina 2</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA03.jpg');">Jatoba Latina 3</div>
        <div class="muestra half" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-MAGNA.jpg');">Jatoba Magna</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE01.jpg');">Ipe Elegance 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE02.jpg');">Ipe Elegance 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE03.jpg');">Ipe Elegance 3</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-EUROPA.jpg');">Ipe Europa</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-ELEGANCE.jpg');">Sucupira Elegance</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA01.jpg');">Sucupira Europa 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA02.jpg');">Sucupira Europa 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA03.jpg');">Sucupira Europa 3</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE01.jpg');">Massaranduba Elegance 1</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE02.jpg');">Massaranduba Elegance 2</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE03.jpg');">Massaranduba Elegance 3</div>
        <div class="muestra" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-EUROPA.jpg');">Massaranduba Europa</div>
      </div>
      <div class="swiper-slide muestrario">
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE01.jpg');">Tauari Elegance 1</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE02.jpg');">Tauari Elegance 2</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE03.jpg');">Tauari Elegance 3</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-GRIS.jpg');">Tauari Elegance Gris</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-TOSTADO.jpg');">Tauari Elegance Blanco</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA.jpg');">Tauari Europa</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-GRIS.jpg');">Tauari Europa Gris</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-BLANCO.jpg');">Tauari Europa Blanco</div>
        <div class="muestra third" style="--bgimage: url('/wp-admin/admin-ajax.php?action=muestrario_rotar&image=/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-TOSTADO.jpg');">Tauari Europa Tostado</div>
      </div>
    </div>
    <div id="returnhome">Volver</div>
    <div id="popup"></div>
    <div id="controls" class="nozoom">
      <span class="close">&#x292B;</span><span class="zoom out">&#x2212;</span><span class="zoom in">+</span>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/wp-content/plugins/wp-muestrario/lib/../general.js?hash=<?=date("YMDHis");?>"></script>
  <script>
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
  </script>
  <?php
  return ob_get_clean();
}
add_shortcode('muestrarios-madera-multicapa', 'wp_muestrarios_madera_multicapa_shortcode');
