-- Trigger DDL Statements
DELIMITER $$

CREATE TRIGGER completa_html
BEFORE INSERT ON `peces` FOR EACH ROW
BEGIN
    DECLARE imagenes LONGTEXT;
    DECLARE ruta VARCHAR(255);

    SET NEW.nombre_comun = TRIM(NEW.nombre_comun);
    SET NEW.nombre_cientifico = TRIM(NEW.nombre_cientifico);
    SET NEW.generalidades = TRIM(NEW.generalidades);
    SET NEW.distribucion = TRIM(NEW.distribucion);
    SET NEW.tipo_arte_pesca = TRIM(NEW.tipo_arte_pesca);
    SET NEW.aprovechamiento = TRIM(NEW.aprovechamiento);
    SET NEW.lista_roja_iucn = TRIM(NEW.lista_roja_iucn);
    SET NEW.arte_de_pesca = TRIM(NEW.arte_de_pesca);
    SET NEW.veda = TRIM(NEW.veda);
    
    SET ruta = '<img src="http://www.biodiversidad.gob.mx/usos/alimentacion/peces/imagenes/';
    SET imagenes = '';

    IF (NEW.arte_de_pesca != "") THEN
        SET imagenes = CONCAT(imagenes, ruta, 'Arte_pesca.png" alt="Arte de pesca" title="Arte de pesca">', ruta,
        TRIM(NEW.arte_de_pesca), '.png', '" alt="', NEW.arte_de_pesca, '" title="', NEW.arte_de_pesca, '">');
    END IF;

    IF (NEW.aprovechamiento != "") THEN
        SET imagenes = CONCAT(imagenes, '<br><br><br>', ruta, 'Sustentabilidad_pesquera.png" alt="Sustentabilidad pesquera" title="Sustentabilidad pesquera">', ruta,
        TRIM(NEW.aprovechamiento), '.png', '" alt="', NEW.aprovechamiento, '" title="', NEW.aprovechamiento, '">');
    END IF;

    IF (NEW.lista_roja_iucn != "") THEN
        SET imagenes = CONCAT(imagenes, '<br><br><br>', ruta, 'Lista_roja.png" alt="Lista roja" title="Lista roja">', ruta,
        TRIM(NEW.lista_roja_iucn), '.png', '" alt="', NEW.lista_roja_iucn, '" title="', NEW.lista_roja_iucn, '">');
    END IF;

    IF (NEW.veda != "") THEN
        SET imagenes = CONCAT(imagenes, '<br><br><br>', ruta, 'Veda.png" alt="Veda" title="Veda">');
    END IF;

    SET NEW.html = CONCAT(
        '<div id="taxon_description" class="clear taxon_description eol_description stacked">', 
        '<table width="870" border="0" align="center" cellpadding="8" cellspacing="0">',
        '<tr>',
        '<td width="592" valign="top">',
        '<p align="center" class="txt_peces">&nbsp;</p>',
        '<p class="txt_peces">',
        '<strong class="txt_cont_menusup">',
        ruta, 'peces/', NEW.foto, '" alt="', NEW.nombre_comun, '" title="', NEW.nombre_comun, '" width="592">',
        '</strong>',
        '<p class="txt_peces"><strong class="txt_cont_menusup">Generalidades</strong>. ', NEW.generalidades, '</p>',
        '<p class="txt_peces"><strong class="txt_cont_menusup">Distribuci&oacute;n</strong>. ', NEW.distribucion, '</p>',
        '<p class="txt_peces"><strong class="txt_cont_menusup">Tipo de arte de pesca</strong>. ', NEW.tipo_arte_pesca, '</p>',        
        '</td><td width="246" align="left" bgcolor="#D2CEB9" class="titblue">',
        imagenes,
        '</td></tr>',
        '</table>',
        '</div>'
    );
END;
$$
DELIMITER ;