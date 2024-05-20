jQuery( function( $ ){
	$( '#filter' ).submit(function(){
		var filter = $(this);
		$.ajax({
			url : true_obj.ajaxurl, // обработчик
			data : filter.serialize(), // данные
			type : 'POST', // тип запроса
			beforeSend : function( xhr ){
				filter.find( 'button' ).text( 'Загружаю...' ); // изменяем текст кнопки
			},
			success : function( data ){
				filter.find( 'button' ).text( 'Применить фильтр' ); // возвращаеи текст кнопки
				$( '#response' ).html(data);
			}
		});
		return false;
	});
});
