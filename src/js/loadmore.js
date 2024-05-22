jQuery(document).ready(function($) {
 
	var button = $( '#loadmore' ),
	    paged = button.data( 'paged' ),
	    maxPages = button.data( 'max_pages' );
 
	button.click( function( event ) {
 
		event.preventDefault(); // предотвращаем переход по ссылке
 
		$.ajax({
			type : 'POST',
			url : loadmore_obj.ajaxurl, // получаем из wp_localize_script()
			data : {
				paged : paged, // номер текущей страниц
				action : 'loadmore' // экшен для wp_ajax_ и wp_ajax_nopriv_
			},
			beforeSend : function( xhr ) {
				button.text( 'Загружаем...' );
			},
			success : function( data ) {
 
				paged++; // инкремент номера страницы
				button.parent().before( data );
				button.text( 'Загрузить ещё' );
 
				 // если последняя страница, то удаляем кнопку
				if( paged == maxPages ) {
					button.remove();
				}
 
			}
 
		});
 
	} );
});