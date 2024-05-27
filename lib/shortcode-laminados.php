<?php

function wp_muestrarios_laminados_shortcode($params = array(), $content = null) {
  ob_start(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../general.css?hash=<?=date("YMDHis");?>" />
	<div class="swiper mySwiper swiper-h">
		<div class="swiper-wrapper">
			<div class="swiper-slide mosaic">
				<a href="#" class="circle" data-goto="1" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Color/dermacolor.jpg');">Color</a>
				<a href="#" class="circle" data-goto="2" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/BRUSHED.png');">Texturas</a>
				<a href="#" class="circle" data-goto="3" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/timber.jpg');">RealWood</a>
				<a href="#" class="circle" data-goto="4" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/TekStur/DYNAMIC.jpg');">TekStur</a>
				<a href="#" class="circle" data-goto="5" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2038-COPPER-BRUSHED.jpg');">Metálicos</a>
				<a></a>
			</div>
			<div class="swiper-slide">
				<div class="swiper mySwiper1 swiper-v">
					<div class="swiper-wrapper">
						<div class="swiper-slide menumosaic">
							<a href="#" class="circle" data-goto="1" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/221cerulean.jpg');">Básicos</a>
							<a href="#" class="circle" data-goto="2" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2295orangine.jpg');">Cálidos</a>
							<a href="#" class="circle" data-goto="3" style="background-image: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2176turquesa.jpg');">Fríos</a>
							<a class="circle"></a>
						</div>
						<div class="swiper-slide muestrario">
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2111blanco.jpg');">2111.blanco</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2152gold.jpg');">2152.gold</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2137red.jpg');">2137.red</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/221cerulean.jpg');">2221.cerulean</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2110ebano.jpg');">2110.ebano</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2256platinum.jpg');">2256.platinum</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2192carbon.jpg');">2192.carbon</div>
							<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/BasicosColor/2119silice.jpg');">2119.silice</div>
						</div>
						<div class="swiper-slide muestrario">
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2225terracota.jpg');">2225.terracota</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2295orangine.jpg');">2295.orangine</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2273pink.jpg');">2273.pink</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2158burgundi.jpg');">2158.burgundi</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2298mostaza.jpg');">2298.mostaza</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2100antiqueblanco.jpg');">2100.antique blanco</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2111taupe.jpg');">2111.taupe</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/CalidosColor/2158marron.jpg');">2158.marrón</div>
						</div>
						<div class="swiper-slide muestrario half">
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2180mediterranean.jpg');">2180.mediterranean</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2176turquesa.jpg');">2176.turquesa</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2221cerulean.jpg');">2221.cerulean</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/0888lapizlasul.jpg');">0888.lapizlasul</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2248oliva.jpg');">2248.oliva</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2186neon.jpg');">2186.neon</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2252forest.jpg');">2252.forest</div>
							<div class="muestra half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Color/FriosColor/2180mediterranean.jpg');">2205.citrus</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide muestrario">
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/BRUSHED.png');">BRUSHED</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/CAST.png');">CAST</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/GL.png');">GL</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/MT.png');">MT</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/PE.png');">PE</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/PW.png');">PW</div>
				<div class="muestra circle quarter" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Texturas/SM.png');">SM</div>
			</div>
			<div class="swiper-slide muestrario">
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1461-LARICE-RUSTICO.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1461-LARICE-RUSTICO.png">1461-LARICE-RUSTICO</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1467-ROBLE-LINEAL.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1467-ROBLE-LINEAL.png">1467-ROBLE-LINEAL</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1468-SEGATO-MIELE.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1468-SEGATO-MIELE.png">1468-SEGATO-MIELE</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1474-CLASSIC-CHERRY.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1474-CLASSIC-CHERRY.png">1474-CLASSIC-CHERRY</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1513-ITALIAN-WALNUT.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1513-ITALIAN-WALNUT.png">1513-ITALIAN-WALNUT</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1517-SPICED-CHESTNUT.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1517-SPICED-CHESTNUT.png">1517-SPICED-CHESTNUT</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1522-SAVANNAH-OAK-WHEAT.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1522-SAVANNAH-OAK-WHEAT.png">1522-SAVANNAH-OAK-WHEAT</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1523-SAVANNAH-HONEY-OAK.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1523-SAVANNAH-HONEY-OAK.png">1523-SAVANNAH-HONEY-OAK</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1524-SAVANNAH-OAK-GANACHE.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1524-SAVANNAH-OAK-GANACHE.png">1524-SAVANNAH-OAK-GANACHE</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1528-NATURAL-ELM-TABACCO.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1528-NATURAL-ELM-TABACCO.png">1528-NATURAL-ELM-TABACCO</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1529-NATURAL-ELM.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1529-NATURAL-ELM.png">1529-NATURAL-ELM</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1532-COTTAGE-OAK.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1532-COTTAGE-OAK.png">1532-COTTAGE-OAK</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1533-COUNTRY-SIDE-OAK.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1533-COUNTRY-SIDE-OAK.png">1533-COUNTRY-SIDE-OAK</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1538-SAVANNAH-OAK-EBONY.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1538-SAVANNAH-OAK-EBONY.png">1538-SAVANNAH-OAK-EBONY</div>
				<div class="muestra quarter haszoom" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/RealWood/zoom_1807-WENGUE.png');" data-full="/wp-content/plugins/wp-muestrario/laminados/RealWood/1807-WENGUE.png">1807-WENGUE</div>
			</div>
			<div class="swiper-slide muestrario">
				<div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/TekStur/DYNAMIC.jpg');">DYNAMIC</div>
				<div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/TekStur/ESPIRAL.jpg');">ESPIRAL</div>
				<div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/TekStur/HIGHLINE.jpg');">HIGHLINE</div>
				<div class="muestra circle half" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/TekStur/MATRIX.jpg');">MATRIX</div>
			</div>
			<div class="swiper-slide muestrario">
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2025-ALUMINIUM-MIRROR.jpg');">2025-ALUMINIUM-MIRROR</div>
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2026-BRASS-MIRROR.jpg');">2026-BRASS-MIRROR</div>       
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2027-STAINLESS-ST.jpg');">2027-STAINLESS-ST</div>     
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2030-ALUMINIUM-BRUSHED.jpg');">2030-ALUMINIUM-BRUSHED</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2036-COPPER-MIRROR.jpg');">2036-COPPER-MIRROR</div>       
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2038-COPPER-BRUSHED.jpg');">2038-COPPER-BRUSHED</div>      
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2039-BURNISHED-BRONZE.jpg');">2039-BURNISHED-BRONZE</div>    
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2047-GREY-METALIZED.jpg');">2047-GREY-METALIZED</div>     
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2110-GLITER-CINDER.jpg');">2110-GLITER-CINDER</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2500-BRONZE.jpg');">2500-BRONZE</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2501-MOONLIGHT.jpg');">2501-MOONLIGHT</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2502-DUNE.jpg');">2502-DUNE</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2503-SNOWFLAKE.jpg');">2503-SNOWFLAKE</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2506-BRUSHED-CHAMPAGNED.jpg');">2506-BRUSHED-CHAMPAGNED</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2507-OIL-BRONZE.jpg');">2507-OIL-BRONZE</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2508-BRUSED-ROSEGOLD.jpg');">2508-BRUSED-ROSEGOLD</div> 
				<div class="muestra minicircle fiveth" style="--bgimage: url('/wp-content/plugins/wp-muestrario/laminados/Metalicos/2509-METALIC-LINEN.jpg');">2509-METALIC-LINEN</div>
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
  <?php 
	return ob_get_clean();
}
add_shortcode('muestrarios-laminados', 'wp_muestrarios_laminados_shortcode');
