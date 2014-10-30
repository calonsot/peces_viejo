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
						'actions'=>array('index','view', 'inicio', 'resultado', 'filtros', 'borrafiltros', 'migracion'),
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
		$params = $_GET;
		$es_intermedio = false;

		if (isset($params['buscador_nombre_comun']) && !empty($params['buscador_nombre_comun']))
		{
			$condiciones.="nombre_comun LIKE '%".$params['buscador_nombre_comun']."%'";
			$es_intermedio = true;
		}
		if (isset($params['buscador_nombre_cientifico']) && !empty($params['buscador_nombre_cientifico']))
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="nombre_cientifico LIKE '%".$params['buscador_nombre_cientifico']."%'";
		}
		if (isset($params['buscador_grupo']) && !empty($params['buscador_grupo']))
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="grupo LIKE '".$params['buscador_grupo']."%'";
		}
		if (isset($params['buscador_sustentabilidad']) && !empty($params['buscador_sustentabilidad']))
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="aprovechamiento='".$params['buscador_sustentabilidad']."'";
		}
		if (isset($params['buscador_golfo']) && $params['buscador_golfo'] == "on")
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="lugar LIKE 'Golfo de México y Mar Caribe%'";
		}
		if (isset($params['buscador_pacifico']) && $params['buscador_pacifico'] == "on")
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="lugar LIKE 'Pacífico%'";
		}
		if (isset($params['buscador_amigable']) && $params['buscador_amigable'] == "on")
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="arte_de_pesca='Amigable'";
		}
		if (isset($params['buscador_no_amigable']) && $params['buscador_no_amigable'] == "on")
		{
			$es_intermedio ? $condiciones.=" AND " : $es_intermedio=true;
			$condiciones.="arte_de_pesca='No amigable'";
		}

		if (empty($condiciones)) 
		{
			$this->redirect(Yii::app()->request->baseUrl.'/index.php/peces/inicio');
		} else {
			$peces=Peces::model()->findAll(array('condition' => $condiciones, 'order' => 'nombre_comun ASC'));
			$cuantos = count($peces);
			
			if ($cuantos == 1)
				$this->redirect(Yii::app()->request->baseUrl.'/index.php/peces/'.$peces[0]->id);
			elseif ($cuantos > 1)
			$this->render('resultado',array('params'=>$condiciones, 'peces' => $peces, 'cuantos' => $cuantos));
			else
				$this->render('resultado',array('params'=>$condiciones, 'vacio' => '<b>Tu búsqueda no dió ningún resultado</b>'));
		}
	}

	/**
	 * Guarda o lee los filtros
	 */
	public function actionFiltros()
	{
		$params = $_POST;
		$filtro=Filtros::model()->findByAttributes(array('sesion'=>Yii::app()->getSession()->getSessionId()));

		if (isset($params['accion']) && $params['accion'] == "guarda")
		{
			if (count($filtro) == 1)
			{
				$filtro_asigno = $this->asignaCampos($params, $filtro);
				$filtro_asigno->save();
				return print_r($filtro_asigno->buscador_pacifico);
			} else {
				$f=new Filtros();
				$filtro_asigno = $this->asignaCampos($params, $f);
				$filtro_asigno->ip = $_SERVER['REMOTE_ADDR'];
				$filtro_asigno->sesion = Yii::app()->getSession()->getSessionId();
				$filtro_asigno->save();
			}
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
		{
			$filtro->$llave = $params[$llave];
		}

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
