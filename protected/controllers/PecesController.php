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
		if (isset($_GET['json']) && $_GET['json'] == '1')
		{
			header('Content-type: application/json; charset=UTF-8');
			$this->layout=false;
			
			$pez = Yii::app()->db->createCommand()->select("*")->from('peces')->where("id=". (Int) $id)->queryAll();
			echo json_encode($pez[0], JSON_UNESCAPED_UNICODE);
			Yii::app()->end();
		} else {
			$pez=$this->loadModel($id);
			$this->render('view',array('model'=>$pez));
		}
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
		$params = $_GET;
		$select = 'id,nombre_comun,nombre_ingles,nombre_cientifico,presente_pacifico,presente_golfo,presente_caribe,nacional_importado_valor,
arte_pesca,objetivo,incidental,deportiva,fomento,cultivada,talla_captura,grupo_conabio,generalidades,distribucion,
zona1_valor,zona2_valor,zona3_valor,zona4_valor,zona5_valor,zona6_valor,CONCAT(zona1_valor,zona2_valor,zona3_valor,zona4_valor,zona5_valor,zona6_valor) AS zonas,imagen,tipo_imagen,
zona1_peso+zona2_peso+zona3_peso+zona4_peso+zona5_peso+zona6_peso AS zonas_peso,peso,
nom,iucn,cites,nom_valor,iucn_valor,cites_valor,tipo_veda,tipo_veda_fecha,cnp,tipo_captura,tipo_captura_valor';
		$order = 'peso ASC, cnp DESC, zonas_peso ASC, tipo_imagen ASC';
		
		if (isset($params['especie_id']) && !empty($params['especie_id']))
		{
			array_push($condiciones, "id = ".$params['especie_id']);
			$select = '*, CONCAT(zona1_valor,zona2_valor,zona3_valor,zona4_valor,zona5_valor,zona6_valor) AS zonas_valores,
zona1_peso+zona2_peso+zona3_peso+zona4_peso+zona5_peso+zona6_peso AS zonas_peso';
			$order = 'nombre_cientifico ASC';
		
		} else {
				
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
			
			if (isset($params['recomendacion']) && is_array($params['recomendacion']) && count($params['recomendacion']) > 0)
			{
				$condiciones_rec = array();
				foreach ($params['recomendacion'] as $rec)
				{
					$rangos = explode("-", $rec);
					if (count($rangos) == 1)
						array_push($condiciones_rec, "peso=".$rangos[0]);
					else if(count($rangos) == 2)
						array_push($condiciones_rec, "peso BETWEEN ".$rangos[0]." AND ".$rangos[1]);
				}
				
				array_push($condiciones, "(".implode(" OR ", $condiciones_rec).")");
			}
					
			if (isset($params['zonas']) && is_array($params['zonas']) && count($params['zonas']) > 0)
			{
				$condiciones_zonas = array();
				foreach ($params['zonas'] as $num)
					array_push($condiciones_zonas, "zona".$num."_valor > 0");
				
				array_push($condiciones, "(".implode(" OR ", $condiciones_zonas).")");
			}
		}  // fin de consulta ficha
		
		$resultados = Yii::app()->db->createCommand()
								->select($select)
								->from('peces');
		
		if (count($condiciones) > 0)  // Pega condiciones
			$resultados = $resultados->where(implode(" AND ", $condiciones));
		
		$resultados = $resultados->order($order)->queryAll();  // Contiene los resultados
		
		
		if(isset($params['json']) && !empty($params['json']) && (Int)$params['json']==1)  // Para consultar en json
		{
			header('Content-type: application/json; charset=UTF-8');
			
			if (isset($params['allow_o']) && $params['allow_o'] == '1')
			{
				// Para poder consumir la respuesta del lado del cliente en cualquier servidor, ojo cambiar cuando se tenga el dominio correcto
				header("Access-Control-Allow-Origin: *");
				header("Access-Control-Allow-Methods: GET");	
			}
			
			echo json_encode($resultados, JSON_UNESCAPED_UNICODE);
		
		} else {  // Para consultar en html
			$count = count($resultados);
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);
			
			if (isset($params['ajax']) && $params['ajax'] == '1')  // Si es un request con ajax
			{
				$this->renderPartial('_resultado',array(
						'resultados'=>$resultados,
						'count'=>$count[0]["count"],
						'page_size'=>50,
						'pages'=>$pages
				));
			} else {  // Si es la primera vez que carga resultados
				$this->render('resultado',array(
						'resultados'=>$resultados,
						'count'=>$count[0]["count"],
						'page_size'=>50,
						'pages'=>$pages
				));
			}
		
		}  // else, consultar HTML
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
