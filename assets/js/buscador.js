/**
 * Javascript del buscador
 */

function filtros(filtro, accion){
	var values = {};
	values['accion'] = accion;
	
	switch(filtro.attr('id'))
	{
	    // Para todos los textos o valores unicos
		case 'buscador_nombre_cientifico':
		case 'buscador_nombre_comun':
		case 'buscador_grupo':
		case 'buscador_estado_conservacion':
			values[filtro.attr('id')] = filtro.val();
			break;
			
		//Para todos los checkbox
		case 'buscador_selectiva':
		case 'buscador_no_selectiva':
		case 'buscador_pacifico':
		case 'buscador_golfo':
		case 'buscador_caribe':
		case 'buscador_importado':
		case 'buscador_objetiva':
		case 'buscador_incidental':
		case 'buscador_deportiva':
		case 'buscador_fomento':
		case 'buscador_cultivada':
			if (filtro.is(':checked'))
				values[filtro.attr('id')] = '1';
			else
				values[filtro.attr('id')] = '0';
			break;
	}
	
	//Manda a guardar los filtros
	jQuery.ajax({
        success: function(html){
        	if(html != "")
        	{
        		var html_json = JSON.parse(JSON.stringify(eval("(" + html + ")")));
        		$('#buscador_nombre_comun').val(html_json.buscador_nombre_comun);
        		$('#buscador_nombre_cientifico').val(html_json.buscador_nombre_cientifico);
        		$('#buscador_grupo').val(html_json.buscador_grupo);
        		$('#buscador_estado_conservacion').val(html_json.buscador_estado_conservacion);
        		if (html_json.buscador_selectiva == "1")
        			$('#buscador_selectiva').prop('checked', true);
        		if (html_json.buscador_no_selectiva == "1")
        			$('#buscador_no_selectiva').prop('checked', true);
        		if (html_json.buscador_pacifico == "1")
        			$('#buscador_pacifico').prop('checked', true);
        		if (html_json.buscador_golfo == "1")
        			$('#buscador_golfo').prop('checked', true);
        		if (html_json.buscador_caribe == "1")
        			$('#buscador_caribe').prop('checked', true);
        		if (html_json.buscador_importado == "1")
        			$('#buscador_importado').prop('checked', true);
        		if (html_json.buscador_objetiva == "1")
        			$('#buscador_objetiva').prop('checked', true);
        		if (html_json.buscador_incidental == "1")
        			$('#buscador_incidental').prop('checked', true);
        		if (html_json.buscador_deportiva == "1")
        			$('#buscador_deportiva').prop('checked', true);
        		if (html_json.buscador_fomento == "1")
        			$('#buscador_fomento').prop('checked', true);
        		if (html_json.buscador_cultivada == "1")
        			$('#buscador_cultivada').prop('checked', true);
        	}
        },
        fail: function(){
            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
        },
        type:'POST',
        url:YII_PATH + '/index.php/peces/filtros',
        data: values
    });
}


$(document).ready(function(){
	filtros($(this), 'leer');
	
	$("[id^='buscador_']").on('change', function(){
		filtros($(this), 'guarda');
		$('#buscador').submit();
	});
	
	$("#limpiar").on('click', function(){
		jQuery.ajax({
	        success: function(){
	        	window.location = YII_PATH + "/index.php/peces/inicio";
	        },
	        fail: function(){
	            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
	        },
	        type:'POST',
	        url:YII_PATH + '/index.php/peces/borrafiltros',
	        cache:true
	    });
	});
	
});
