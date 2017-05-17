<?php

class PecesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('index','view', 'inicio', 'resultado', 'filtros', 'borrafiltros', 'grupos'),//, 'completa_pesos'),
						'users'=>array('*'),
				),
				/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
				 'actions'=>array('create','update'),
				 'users'=>array('@'),
				 ),*/
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('admin','delete','create','update'),
						'users'=>array('admin'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Peces;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Peces']))
		{
			$model->attributes=$_POST['Peces'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Peces']))
		{
			$model->attributes=$_POST['Peces'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Peces');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Peces('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Peces']))
			$model->attributes=$_GET['Peces'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * La Introduccion de peces
	 */
	public function actionInicio()
	{
		$this->render('inicio');
	}

	/**
	 * Resulatdo de las busquedas
	 */
	public function actionResultado()
	{
		$condiciones=array();
		//$union='';
		//$joins='';
		$params = $_GET;
		$select = 'id,nombre_comun,nombre_ingles,nombre_cientifico,presente_pacifico,presente_golfo,presente_caribe,nacional_importado_valor,
arte_pesca,objetivo,incidental,deportiva,fomento,cultivada,talla_captura,grupo_conabio,generalidades,distribucion,
zona1_valor,zona2_valor,zona3_valor,zona4_valor,zona5_valor,zona6_valor,CONCAT(zona1_valor,zona2_valor,zona3_valor,zona4_valor,zona5_valor,zona6_valor) AS zonas,imagen,tipo_imagen,
zona1_peso+zona2_peso+zona3_peso+zona4_peso+zona5_peso+zona6_peso AS zonas_peso,
nom,iucn,cites,nom_valor,iucn_valor,cites_valor,tipo_veda,tipo_veda_fecha,cnp,tipo_captura,tipo_captura_valor,
nacional_importado_peso+tipo_captura_peso+nom_peso+iucn_peso+cites_peso+tipo_veda_peso+zona1_peso+zona2_peso+zona3_peso+zona4_peso+zona5_peso+zona6_peso AS peso';
		$order = 'peso ASC, cnp DESC, zonas_peso ASC, tipo_imagen ASC';
		//$flag_ficha = false;
		
		/*if(isset($params['especie_id']) && !empty($params['especie_id']))
		{
			$flag_ficha = true;
			array_push($condiciones, "especie_id = ".$params['especie_id']);
			
		} else {*/
			//$flag_ficha = false;
			
		if (isset($params['nombre_comun']) && !empty($params['nombre_comun']))
			array_push($condiciones, "nombre_comun LIKE '%".$params['nombre_comun']."%'");
				
		if (isset($params['nombre_cientifico']) && !empty($params['nombre_cientifico']))
			array_push($condiciones, "nombre_cientifico LIKE '%".$params['nombre_cientifico']."%'");
					
		if (isset($params['grupo']) && !empty($params['grupo']))
			array_push($condiciones, "grupo_conabio = '".$params['grupo']."'");
		
		if (isset($params['nacional_importado']) && is_array($params['nacional_importado']) && count($params['nacional_importado']) > 0)
			array_push($condiciones, "nacional_importado_valor IN (".implode(",", $params['nacional_importado']).")");
		
		if (isset($params['cat_riesgo']) && is_array($params['cat_riesgo']) && count($params['cat_riesgo']) > 0)
		{
			$condiciones_cat = array();
			foreach ($params['cat_riesgo'] as $cat)
				array_push($condiciones_cat, $cat."_valor=1");
			
			array_push($condiciones, "(".implode(" OR ", $condiciones_cat).")");
		}	
		
		if (isset($params['veda']) && is_array($params['veda']) && count($params['veda']) > 0)
			array_push($condiciones, "tipo_veda_valor IN (".implode(",", $params['veda']).")");
		
		if (isset($params['selectiva']) && is_array($params['selectiva']) && count($params['selectiva']) > 0)
			array_push($condiciones, "tipo_captura_valor IN (".implode(",", $params['selectiva']).")");
						/*
						//Las zonas varia de 1 a 6
						if (isset($params['zona']) && ((Int)$params['zona'] > 0 && (Int)$params['zona'] < 7))
						{
							$joins.= CartaNacional::join();
							array_push($condiciones, "cn.Nivel1=".(Int)$params['zona']." AND cn.Nombre != 'Sin datos.'");
							
						} elseif (isset($params['zona']) && ((Int)$params['zona'] == 7))
						*/
						
						
						/*
						//Caso de una o mas recomendaciones
						if (isset($params['recomendacion']) && is_array($params['recomendacion']))
						{
							$colores = array('V+', 'V-', 'A-', 'A+', 'R');
							$interseccion = array_intersect($colores, $params['recomendacion']);
						}
						
						if (isset($interseccion) && count($interseccion) > 0)
						{
							array_push($condiciones, "recomendacion=1 AND peso_promedio IS NOT NULL AND peso IS NOT NULL");
							$order.= ' ORDER BY peso_promedio, tipo_imagen, nombre_comun ASC';
							$recomendaciones = array();
							
							foreach ($interseccion as $index => $recomendacion)
								array_push($recomendaciones, "peso LIKE '%$recomendacion%'");
								
								array_push($condiciones, "(".implode(" OR ", $recomendaciones).")");
								
						} else   //busqueda sin recomendacion ni libre, te saca por default todos con recomendacion
							$order.= ' ORDER BY ISNULL(peso_promedio), peso_promedio, tipo_imagen, nombre_cientifico ASC';*/
		//}
	
		//Para ponerlas como sql
		//if (count($condiciones) > 0)
			
			//decide cual tipo de busqueda es
			/*if (!empty($joins))
			{
				$resultados=Yii::app()->db->createCommand($select.$joins." WHERE ".$condiciones.$order)->queryAll();
				$count=Yii::app()->db->createCommand("SELECT COUNT(*) as count FROM peces p ".$joins." WHERE ".$condiciones)->queryAll();
				$pages = new CPagination($count[0]["count"]);
				$pages->setPageSize(50);
			}*/
		if (count($condiciones) > 0)
		{
			$resultados = Yii::app()->db->createCommand()
							->select($select)
							->from('peces')
							->where(implode(" AND ", $condiciones))
							->order($order)
							->queryAll();
			$count = count($resultados);
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);
		
		} else { //para ver todos los peces
			$resultados = Yii::app()->db->createCommand()
							->select($select)
							->from('peces')
							->order($order)
							->queryAll();
			$count = count($resultados);
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);
		}
		
		if (count($resultados) > 0)  //Si hubo resultados en la busqueda
		{
				/*if(isset($params['json']) && !empty($params['json']) && (Int)$params['json']==1)
				 {
				 header('Content-type: application/json; charset=UTF-8');
				 
				 if (isset($params['allow_o']) && $params['allow_o'] == '1')
				 {
				 // Para poder consumir la respuesta del lado del cliente en cualquier servidor, ojo cambiar cuando se tenga el dominio correcto
				 header("Access-Control-Allow-Origin: *");
				 header("Access-Control-Allow-Methods: GET");
				 }
				 
				 $data = array();
				 $arr_obj = array();
				 
				 foreach($resultados as $k)
				 {
				 $json = array();
				 $pez = Peces::model()->findByPk($k["especie_id"]);
				 
				 if ($pez->tipo_imagen == 1)
				 $pez->imagen = str_replace('index.php/', '', Yii::app()->createAbsoluteUrl('imagenes/peces/'.$pez->imagen));
				 elseif ($pez->tipo_imagen == 2)
				 $pez->imagen = str_replace('index.php/', '', Yii::app()->createAbsoluteUrl('imagenes/siluetas/'.$pez->imagen));
				 $json["peces"] = $pez->attributes;
				 
				 \/*
				 //Para la imgen del semaforo
				 if ($pez->recomendacion == 1)
				 $json["peces"]["imagen_semaforo"] = str_replace('index.php/', '', Yii::app()->createAbsoluteUrl('imagenes/semaforo/'.Peces::peso_a_nombre_imagen($pez->peso)));
				 else
				 $json["peces"]["imagen_semaforo"] = "";
				 *\/
				 
				 $json["grupo"] = !empty($pez->grupo)?$pez->grupo->attributes:array();
				 $json["tipo_veda"] = !empty($pez->tipoVeda)?$pez->tipoVeda->attributes:array();
				 
				 if($pez->cartaNacionals)
				 {
				 $aux = array();
				 foreach ($pez->cartaNacionals as $k){
				 array_push($aux, $k->attributes);
				 }
				 $json["carta_nacional"] = $aux;
				 }
				 if($pez->distribucions)
				 {
				 $aux = array();
				 foreach ($pez->distribucions as $k){
				 array_push($aux, $k->attributes);
				 }
				 $json["distribucion"] = $aux;
				 }
				 if($pez->estadoConservacions)
				 {
				 $aux = array();
				 foreach ($pez->estadoConservacions as $k){
				 array_push($aux, $k->attributes);
				 }
				 $json["estado_conservacion"] = $aux;
				 }
				 if($pez->tipoCapturases)
				 {
				 $aux = array();
				 foreach ($pez->tipoCapturases as $k){
				 array_push($aux, $k->attributes);
				 }
				 $json["tipo_captura"] = $aux;
				 }
				 
				 if(!$flag_ficha)
				 array_push($data, $json);
				 else {
				 echo preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($json));
				 //echo json_encode($json, JSON_UNESCAPED_UNICODE);
				 }
				 }
				 if(!$flag_ficha){
				 echo preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($data));
				 //echo json_encode($data, JSON_UNESCAPED_UNICODE);
				 }
				 } else */
				 
				 if (isset($params['ajax']) && $params['ajax'] == '1')
				 {
				 	$this->renderPartial('_resultado',array(
				 			'resultados'=>$resultados,
				 			'count'=>$count[0]["count"],
				 			'page_size'=>50,
				 			'pages'=>$pages
				 	));
				 } else {
				 	$this->render('resultado',array(
				 			'resultados'=>$resultados,
				 			'count'=>$count[0]["count"],
				 			'page_size'=>50,
				 			'pages'=>$pages
				 	));
				 }
			} else
				$this->renderPartial('_resultado',array('vacio' => '<b>Tu b&uacute;squeda no di&oacute; ning&uacute;n resultado</b>'));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Peces the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Peces::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Peces $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='peces-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
