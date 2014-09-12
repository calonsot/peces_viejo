/**
 * Javascript del buscador
 */

function filtros(filtro, accion){
	var values = { };
	values['accion'] = accion;
	
	if (filtro.attr('name') == "buscador_pacifico" || filtro.attr('name') == "buscador_golfo") 
	{
		if (filtro.is(':checked')) 
		{
			values[filtro.attr('id')] = '1';
		} else {
			values[filtro.attr('id')] = '0';
		}
	} else if (filtro.attr('name') == "buscador_amigable" || filtro.attr('name') == "buscador_no_amigable") 
	{
		if (filtro.is(':checked')) 
		{
			values[filtro.attr('id')] = '1';
		} else {
			values[filtro.attr('id')] = '0';
		}
	} else {
		values[filtro.attr('id')] = filtro.val();
	}
	
	jQuery.ajax({
        success: function(html){
        	if(html != "")
        	{
        		var html_json = JSON.parse(JSON.stringify(eval("(" + html + ")")));
        		$('#buscador_nombre_comun').val(html_json.buscador_nombre_comun);
        		$('#buscador_nombre_cientifico').val(html_json.buscador_nombre_cientifico);
        		$('#buscador_sustentabilidad').val(html_json.buscador_sustentabilidad);
        		$('#buscador_grupo').val(html_json.buscador_grupo);
        		if (html_json.buscador_pacifico == "1")
        			$('#buscador_pacifico').prop('checked', true);
        		if (html_json.buscador_golfo == "1")
        			$('#buscador_golfo').prop('checked', true);
        		if (html_json.buscador_amigable == "1")
        			$('#buscador_amigable').prop('checked', true);
        		if (html_json.buscador_no_amigable == "1")
        			$('#buscador_no_amigable').prop('checked', true);
        	}
        },
        fail: function(){
            $('#notice').html('Hubo un error al cargar los filtros, por favor intentalo de nuevo.');
        },
        type:'POST',
        url:YII_PATH + '/index.php/peces/filtros',
        cache:true,
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
