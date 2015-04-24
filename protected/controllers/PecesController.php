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
						'actions'=>array('index','view', 'inicio', 'resultado', 'filtros', 'borrafiltros', 'migracion', 'grupos'),// 'completa_pesos'),
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
		
		$dataProvider=new CActiveDataProvider('Peces', array(
				'criteria' => array ('order'=>'nombre_comun ASC'),
		));
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));
		/*
		$dataProvider=new CActiveDataProvider('Peces');
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));*/
	}
	/**
	 * La Introduccion de peces
	 */
	public function actionInicio()
	{
		$this->render('inicio');
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
	public function actionMigracion(){
		Yii::import('ext.PDO.*');
		$this->layout=false;
		$db = new mysql();
		$this->render('migracion',array(
				'db'=>$db));
	}
	
	/**
	 * Resulatdo de las busquedas
	 */
	public function actionResultado()
	{
		$condiciones='';
		$union='';
		$joins='';
		$params = $_GET;
		$select = 'SELECT * FROM peces p ';
		$order = '';
		$flag_ficha = false;
		
		if(isset($params['especie_id']) && !empty($params['especie_id']))
		{
			$flag_ficha = true;
			$condiciones="especie_id = ".$params['especie_id']." AND ";
		} else {
			$flag_ficha = false;
			if (isset($params['nombre_comun']) && !empty($params['nombre_comun']))
				$condiciones.="nombre_comun LIKE '%".$params['nombre_comun']."%' AND ";
			
			if (isset($params['nombre_cientifico']) && !empty($params['nombre_cientifico']))
				$condiciones.="nombre_cientifico LIKE '%".$params['nombre_cientifico']."%' AND ";
			
			if (isset($params['grupo']) && !empty($params['grupo']))
				$condiciones.="grupo_id = ".$params['grupo']." AND ";
			
			//Varia de 0 a 3 el valor de los radios
			if (isset($params['recomendacion']) && ((Int)$params['recomendacion'] > -1 && (Int)$params['recomendacion'] < 3))
			{
				$condiciones.= "recomendacion=1 AND peso_promedio IS NOT NULL AND ";
				$order.= ' ORDER BY peso_promedio, tipo_imagen, nombre_comun ASC';
				
				if((Int)$params['recomendacion']==0)  //Recomendable
					$condiciones.= "peso REGEXP '^[01]|/[01]' AND peso != 0 AND ";	
				if((Int)$params['recomendacion']==1)  //Poco recomendable
					$condiciones.= "peso REGEXP '[23]' AND peso != 0 AND ";					
				if((Int)$params['recomendacion']==2)  //No recomendable
					$condiciones.= "peso REGEXP '[456789]' AND peso != 0 AND ";				
			} elseif (isset($params['recomendacion']) && (Int)$params['recomendacion'] == 3) {    //busqueda libre
				$order.= ' ORDER BY tipo_imagen, nombre_comun ASC';				
			} else {   //busqueda sin recomendacion ni libre, te saca por default todos con recomendacion
				$condiciones.= "peso REGEXP '^[0123456789]|/[0123456789]' AND peso != 0 AND ";
				$order.= ' ORDER BY peso_promedio, tipo_imagen, nombre_cientifico ASC';
			}

			//Las zonas varia de 1 a 6
			if (isset($params['zona']) && ((Int)$params['zona'] > 0 && (Int)$params['zona'] < 7))
			{
				$joins.= CartaNacional::join();							
				$condiciones.= "cn.Nivel1=".(Int)$params['zona']." AND cn.Nombre != 'Sin datos.' AND ";
			} elseif (isset($params['zona']) && ((Int)$params['zona'] == 7))  //Caso del importado
				$condiciones.= "(nacional_Importado='Importado' OR nacional_Importado='Nacional e Importado') AND ";
		}
		
		//decide cual tipo de busqueda es
		if (!empty($joins))
		{
			$resultados=Yii::app()->db->createCommand($select.$joins." WHERE ".substr($condiciones, 0, -5).$order)->queryAll();
			$count=Yii::app()->db->createCommand("SELECT COUNT(*) as count FROM peces p ".$joins." WHERE ".substr($condiciones, 0, -5))->queryAll();
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);
		}
		elseif (!empty($condiciones))
		{
			$resultados=Yii::app()->db->createCommand($select." WHERE ".substr($condiciones, 0, -5).$order)->queryAll();
			$count=Yii::app()->db->createCommand("SELECT COUNT(*) as count FROM peces p WHERE ".substr($condiciones, 0, -5))->queryAll();
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);
		} else { //para ver todos los peces			
			$resultados=Yii::app()->db->createCommand($select.$order)->queryAll();
			$count=Yii::app()->db->createCommand("SELECT COUNT(*) as count FROM peces p")->queryAll();
			$pages = new CPagination($count[0]["count"]);
			$pages->setPageSize(50);			
		}

		if (count($resultados) > 0)  //Si hubo resultados en la busqueda
		{
			if(isset($params['json']) && !empty($params['json']) && (Int)$params['json']==1)
			{
				header('Content-type: application/json; charset=UTF-8');
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
					
					//Para la imgen del semaforo
					if ($pez->recomendacion == 1)
						$json["peces"]["imagen_semaforo"] = str_replace('index.php/', '', Yii::app()->createAbsoluteUrl('imagenes/semaforo/'.Peces::peso_a_nombre_imagen($pez->peso)));
					else
						$json["peces"]["imagen_semaforo"] = "";
					
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
			} else
				$this->render('resultado',array(
					'resultados'=>$resultados,
					'count'=>$count[0]["count"],
					'page_size'=>50,
					'pages'=>$pages,
				));
		} else
			$this->render('resultado',array('vacio' => '<b>Tu b&uacute;squeda no di&oacute; ning&uacute;n resultado</b>'));
	}
	/**
	 * Guarda o lee los filtros
	 */
	public function actionFiltros()
	{		
		$params = $_POST;
		$sesion = Yii::app()->getSession()->getSessionId();
		$filtro=Filtros::model()->findByAttributes(array('sesion'=>$sesion));
		if (isset($params['accion']) && $params['accion'] == "guarda")
		{
			if (count($filtro) == 1)
				$filtro_asigno = $this->asignaCampos($params, $filtro);
			else {
				$f=new Filtros();
				$filtro_asigno = $this->asignaCampos($params, $f);
				$filtro_asigno->sesion = $sesion;
			}
			$filtro_asigno->save();
		} elseif (isset($params['accion']) && $params['accion'] == "leer" && isset($filtro->id)) {
			echo $filtro->aJSON();
		} else
			return NULL;
	}
	/**
	 * Asigna los campos a los filtros indicados
	 */
	public function asignaCampos($params, $filtro)
	{
		unset($params['accion']);
		$llaves = array_keys($params);
		foreach ($llaves as $k => $llave)
			$filtro->$llave = $params[$llave];
		return $filtro;
	}
	/**
	 * Borra el registro de los filtros
	 */
	public function actionBorrafiltros()
	{
		$filtro=Filtros::model()->findByAttributes(array('sesion'=>Yii::app()->getSession()->getSessionId()));
		if (count($filtro) == 1)
			$filtro->delete();
	}
	
	public function actionCompleta_pesos()
	{
		Peces::model()->completa_pesos();
		Peces::model()->ordena();
	}
	
	/**
	 * Para ver el catalogo de grupos
	 */
	public function actionGrupos()
	{
		header('Content-type: application/json; charset=UTF-8');
		$resultados = Grupo::model()->findAll();
		$data = array();
		$json = array();
		
		foreach($resultados as $k)
		{
			$grupo = Grupo::model()->findByPk($k["id"]);
			$json["grupos"] = $grupo->attributes;
			array_push($data, $json);
		}
		
		//echo json_encode($data, JSON_UNESCAPED_UNICODE);
		echo preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($data));
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
