jQuery.fn.skill = function(){

	var mSkill = this;
  jQuery(window).on('scroll', function() { // las animaciones se dispararan cuando el recuadro este visible en el viewport
	
	mSkill.find('.skillBar').each(function() {

		if( jQuery(this).offset().top <= jQuery(window).scrollTop()+jQuery(window).height()*0.90 &&!jQuery(this).hasClass("sk-fired")) {
			//una vez que cada skill bar esta en el viewport
			
			jQuery(this).addClass('sk-fired'); //agregamos una clase como bandera para evitar que se vuelva a reproducir la animacion
			var defaultPercentage = "50%";
			//animamos el ancho de cada barra
			if(jQuery(this).attr('data-percent')) {
				jQuery(this).width(jQuery(this).attr('data-percent'));
			} else {
				jQuery(this).width(defaultPercentage);
			}

			//seteamos el color
			var color = "";
			var defaultColor = "";
			
			if(color) {
				jQuery(this).css('background-color', color);
			} else {
				jQuery(this).css('background-color',defaultColor);
			}

			//buscamos las imagenes para animarlas
			jQuery(this).parent().find(".skill-image").each(function() {
				var imagen = jQuery(this);
				setInterval(function() {

					imagen.show().addClass("animated").addClass("bounceIn");
				}, 2000);
				
			});
			}
		});

}	);

     return mSkill;
}