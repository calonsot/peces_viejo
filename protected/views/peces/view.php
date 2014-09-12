<?php
/* @var $this PecesController */
/* @var $model Peces */

echo "<h3 align=\"left\" style=\"font-family:verdana;color:#033B42;\">".$model->nombre_comun."</h3>";
if (empty($model->foto))
{
	echo "<table width=\"870\" border=\"0\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\"><tr><td valign=\"top\">";
	echo "<p class=\"txt_reforesta\"><strong class=\"txt_cont_menusup\">Generalidades.</strong> ".$model->generalidades."</p>";
	echo "<p class=\"txt_reforesta\"><strong class=\"txt_cont_menusup\">Distribuci&oacute;n.</strong> ".$model->distribucion."</p>";
	echo "<p class=\"txt_reforesta\"><strong class=\"txt_cont_menusup\">Tipo de arte de pesca.</strong> ".$model->tipo_arte_pesca."</p>";
	echo "</td></tr></table>";
} else
	echo $model->html;
