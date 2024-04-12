<?php

function wp_muestrarios_madera_shortcode($params = array(), $content = null) {
  ob_start(); 

  //MACIZAS
  /*$content = "Roble,/wp-content/plugins/wp-muestrario/tarima-maciza/roble-macizo/ROBLE-MACIZO.jpg
  Roble,/wp-content/plugins/wp-muestrario/tarima-maciza/roble-macizo/ROBLE-MACIZO.jpg,Roble Macizo

  Haya,/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA01.jpg
  Haya,/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA01.jpg,Haya Vaporizada Maciza 1  
  Haya,/wp-content/plugins/wp-muestrario/tarima-maciza/haya-maciza/HAYA-VAPORIZADA-MACIZA02.jpg,Haya Vaporizada Maciza 2 

  Jatoba,/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO01.jpg
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO01.jpg,Jatoba Maciza 1
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-maciza/jatoba-maciza/JATOBA-MACIZO02.jpg,Jatoba Maciza 2

  Ipe,/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO01.jpg
  Ipe,/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO01.jpg,Ipe Macizo 1
  Ipe,/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO02.jpg,Ipe Macizo 2
  Ipe,/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO03.jpg,Ipe Macizo 3
  Ipe,/wp-content/plugins/wp-muestrario/tarima-maciza/ipe-macizo/IPE-MACIZO04.jpg,Ipe Macizo 4

  Sucupira,/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA01.jpg
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA01.jpg,Sucupira Maciza 1
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA02.jpg,Sucupira Maciza 2
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-maciza/sucupira-macizo/SUCUPIRA-MACIZA03.jpg,Sucupira Maciza 3

  Massaranbuda,/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA01.jpg
  Massaranbuda,/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA01.jpg,Massaranbuda Maciza 1
  Massaranbuda,/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA02.jpg,Massaranbuda Maciza 2
  Massaranbuda,/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA03.jpg,Massaranbuda Maciza 3
  Massaranbuda,/wp-content/plugins/wp-muestrario/tarima-maciza/massaranbuda-maciza/MASSARANDUBA-MACIZA04.jpg,Massaranbuda Maciza 4

  Merbou,/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO01.jpg
  Merbou,/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO01.jpg,Merbou Maciza 1
  Merbou,/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO02.jpg,Merbou Maciza 2
  Merbou,/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO03.jpg,Merbou Maciza 3
  Merbou,/wp-content/plugins/wp-muestrario/tarima-maciza/merbou-macizo/MERBOU-MACIZO04.jpg,Merbou Maciza 4";*/

  //MULTICAPAS
  $content = "Roble,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FORESTAL.jpg
  Roble,3 lamas,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FORESTAL.jpg,Roble Forestal
  Roble,3 lamas,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-FUME.jpg,Roble Fume
  Roble,3 lamas,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-LATINA.jpg,Roble Latina
  Roble,3 lamas,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-3-lamas/ROBLE-PLUS.jpg,Roble Plus

  Roble,Europa,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA01.jpg,Roble Europa 1
  Roble,Europa,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA02.jpg,Roble Europa 2
  Roble,Europa,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA03.jpg,Roble Europa 3
  Roble,Europa,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA-FUME.jpg,Roble Europa Fume
  Roble,Europa,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-europa/ROBLE-EUROPA-PLUS.jpg,Roble Europa Plus

  Roble,Magna,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-magna/ROBLE-MAGNA.jpg,Roble Magna
  Roble,Magna,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-magna/ROBLE-MAGNA-PLUS.jpg,Roble Magna PLus

  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME01.jpg,Roble Fume 1
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME02.jpg,Roble Fume 2
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-FUME03.jpg,Roble Fume 3
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE01.jpg,Roble Invisible 1
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE02.jpg,Roble Invisible 2
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-INVISIBLE03.jpg,Roble Invisible 3
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-CHOCOLATE.jpg,Roble Monolama Chocolate
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-FLOR-DE-SAL.jpg,Roble Monolama Flor de Sal
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-NATURAL-PORO-BLANCO.jpg,Roble Monolama Natural Poro Blanco
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TIERRA-DE-SIENA.jpg,Roble Monolama Tierra de Siena
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TITANIO.jpg,Roble Monolama Titanio
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-MONOLAMA-TITANIO-PORO-BLANCO.jpg,Roble Monolama Titanio Poro Blanco
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL01.jpg,Roble Natural 1
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL02.jpg,Roble Natural 2
  Roble,Monolama,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-monolama/ROBLE-NATURAL03.jpg,Roble Natural 3

  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-MONOLAMA-BRUMA.jpg,Roble Monolama Bruma
  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-COGNAC.jpg,Roble Precintado Cognac
  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-NATURAL.jpg,Roble Precintado Natural
  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA01.jpg,Roble Precintado Perla 1
  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA02.jpg,Roble Precintado Perla 2
  Roble,Preaceitado,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-preaceitado/ROBLE-PRECINTADO-PERLA03.jpg,Roble Precintado Perla 3

  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-01.jpg,Piedra Luna 1
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-02.jpg,Piedra Luna 2
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/PIEDRA-LUNA-03.jpg,Piedra Luna 3
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-OCEANWOOD.jpg,Roble Vintage Oceanwood
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-SEPIA.jpg,Roble Vintage Sepia
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-SPIRIT.jpg,Roble Vintage Spirit
  Roble,Vintage,/wp-content/plugins/wp-muestrario/tarima-multicapa/1-roble/roble-vintage/ROBLE-VINTAGE-STONE.jpg,Roble Vintage Stone

  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE01.jpg
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE01.jpg,Haya Elegance 1
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE02.jpg,Haya Elegance 2
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-ELEGANCE03.jpg,Haya Elegance 3
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-01.jpg,Haya Forestal 1
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-02.jpg,Haya Forestal 2
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-FORESTAL-03.jpg,Haya Forestal 3
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-LATINA-VAPORIZADA01.jpg,Haya Latina Vaporizada 1
  Haya,/wp-content/plugins/wp-muestrario/tarima-multicapa/2-haya/HAYA-LATINA-VAPORIZADA02.jpg,Haya Latina Vaporizada 2

  Fresno,/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA01.jpg
  Fresno,/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA01.jpg,Fresno Latina 1
  Fresno,/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA02.jpg,Fresno Latina 2
  Fresno,/wp-content/plugins/wp-muestrario/tarima-multicapa/3-fresno/FRESNO-LATINA03.jpg,Fresno Latina 3      

  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE01.jpg
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE01.jpg,Arce Elegance 1
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-ELEGANCE02.jpg,Arce Elegnce 2
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-EUROPA.jpg,Arce Europa
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL01.jpg,Arce Forestal 1
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL02.jpg,Arce Forestal 2
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-FORESTAL03.jpg,Arce Forestal 3
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-LATINA.jpg,Arce Latina
  Arce,/wp-content/plugins/wp-muestrario/tarima-multicapa/4-arce/ARCE-PLUS.jpg,Arce Plus

  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-01.jpg
  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-01.jpg,Cerezo Europa 1
  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-02.jpg,Cerezo Europa 2
  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-EUROPA-03.jpg,Cerezo Europa 3
  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-LATINA.jpg,Cerezo Latina
  Cerezo,/wp-content/plugins/wp-muestrario/tarima-multicapa/5-cerezo/CEREZO-PLUS.jpg,Cerezo Plus

  Pino,/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-EUROPA.jpg
  Pino,/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-EUROPA.jpg,Pino Europa
  Pino,/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA01.jpg,Pino Magna 1
  Pino,/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA02.jpg,Pino Magna 2
  Pino,/wp-content/plugins/wp-muestrario/tarima-multicapa/6-pino/PINO-MAGNA03.jpg,Pino Magna 3

  Teca,/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA01.jpg
  Teca,/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA01.jpg,Teca Europa 1
  Teca,/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA02.jpg,Teca Europa 2
  Teca,/wp-content/plugins/wp-muestrario/tarima-multicapa/7-teca/TECA-EUROPA03.jpg,Teca Europa 3

  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE01.jpg
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE01.jpg,Merbau Elegance 1
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE02.jpg,Merbau Elagance 2
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-ELEGANCE03.jpg,Merbau Elegance 3
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-EUROPA.jpg,Merbau Europa
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-LATINA.jpg,Merbau Latina
  Merbau,/wp-content/plugins/wp-muestrario/tarima-multicapa/8-merbau/MERBAU-MAGNA.jpg,Merbau Magna

  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE01.jpg
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE01.jpg,Jatoba Elegance 1
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE02.jpg,Jatoba Elegance 2
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-ELEGANCE03.jpg,Jatoba Elegance 3
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-EUROPA.jpg,Jatoba Europa
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA01.jpg,Jatoba Latina 1
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA02.jpg,Jatoba Latina 2
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-LATINA03.jpg,Jatoba Latina 3
  Jatoba,/wp-content/plugins/wp-muestrario/tarima-multicapa/9-jatoba/JATOBA-MAGNA.jpg,Jatoba Magna

  Ipe,/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE01.jpg
  Ipe,/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE01.jpg,Ipe Elegance 1
  Ipe,/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE02.jpg,Ipe Elegance 2
  Ipe,/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-ELEGANCE03.jpg,Ipe Elegance 3
  Ipe,/wp-content/plugins/wp-muestrario/tarima-multicapa/10-ipe/IPE-EUROPA.jpg,Ipe Europa

  Sucupira,/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-ELEGANCE.jpg
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-ELEGANCE.jpg,Sucupira Elegance
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA01.jpg,Sucupira Europa 1
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA02.jpg,Sucupira Europa 2
  Sucupira,/wp-content/plugins/wp-muestrario/tarima-multicapa/11-sucupira/SUCUPIRA-EUROPA03.jpg,Sucupira Europa 3

  Massaranduba,/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE01.jpg

  Massaranduba,/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE01.jpg,Massaranduba Elegance 1
  Massaranduba,/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE02.jpg,Massaranduba Elegance 2
  Massaranduba,/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-ELEGANCE03.jpg,Massaranduba Elegance 3
  Massaranduba,/wp-content/plugins/wp-muestrario/tarima-multicapa/12-massaranduba/MASSARANDURA-EUROPA.jpg,Massaranduba Europa

  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-GRIS.jpg
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE01.jpg,Tauari Elegance 1
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE02.jpg,Tauari Elegance 2
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE03.jpg,Tauari Elegance 3
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-GRIS.jpg,Tauari Elegance Gris
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-ELEGANCE-TOSTADO.jpg,Tauari Elegance Blanco
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA.jpg,Tauari Europa
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-GRIS.jpg,Tauari Europa Gris
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-BLANCO.jpg,Tauari Europa Blanco
  Tauari,/wp-content/plugins/wp-muestrario/tarima-multicapa/13-tauari/TAUARI-EUROPA-TOSTADO.jpg,Tauari Europa Tostado";


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
  } 
 
  ?>
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
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
                  if(count($subslide) > 8) $class = " third";
                  else if(count($subslide) > 4) $class = " half";
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
          if(count($slide) > 8) $class = " third";
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
add_shortcode('muestrarios-madera', 'wp_muestrarios_madera_shortcode');