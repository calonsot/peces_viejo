<?php

/**
 * This is the model class for table "peces".
 *
 * The followings are the available columns in table 'peces':
 * @property integer $especie_id
 * @property string $nombre_comun
 * @property string $nombre_ingles
 * @property string $nombre_cientifico
 * @property string $clase
 * @property string $orden
 * @property string $familia
 * @property integer $grupo_id
 * @property string $nacional_Importado
 * @property string $tipo_imagen
 * @property string $imagen
 * @property string $talla_captura
 * @property string $arte_pesca
 * @property integer $tipo_veda_id
 * @property string $veda
 * @property string $generalidades
 * @property string $descripcion_distribucion
 * @property string $cultivado_capturado
 * @property string $comercio
 * @property string $pais_importacion
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property TipoVeda $tipoVeda
 * @property Grupo $grupo
 * @property CartaNacional[] $cartaNacionals
 * @property Distribucion[] $distribucions
 * @property EstadoConservacion[] $estadoConservacions
 * @property TipoCapturas[] $tipoCapturases
 */
class Peces extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Peces the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peces';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_comun, nombre_cientifico, grupo_id, fecha_creacion', 'required'),
			array('grupo_id, tipo_veda_id, peso_promedio', 'numerical', 'integerOnly'=>true),
			array('nombre_comun, nombre_ingles, nombre_cientifico, clase, orden, familia, nacional_Importado, tipo_imagen, imagen, talla_captura, selectiva_noselectiva, veda, descripcion_distribucion, cultivado_capturado, comercio, pais_importacion', 'length', 'max'=>255),
			array('arte_pesca, generalidades', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('especie_id, nombre_comun, nombre_ingles, nombre_cientifico, clase, orden, familia, grupo_id, nacional_Importado, tipo_imagen, imagen, talla_captura, selectiva_noselectiva, arte_pesca, tipo_veda_id, veda, generalidades, descripcion_distribucion, cultivado_capturado, comercio, pais_importacion, fecha_creacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipoVeda' => array(self::BELONGS_TO, 'TipoVeda', 'tipo_veda_id'),
			'grupo' => array(self::BELONGS_TO, 'Grupo', 'grupo_id'),
			'cartaNacionals' => array(self::MANY_MANY, 'CartaNacional', 'pez_carta_nacional(peces_especie_id, carta_nacional_id)'),
			'distribucions' => array(self::MANY_MANY, 'Distribucion', 'pez_distribucion(peces_especie_id, distribucion_id)'),
			'estadoConservacions' => array(self::MANY_MANY, 'EstadoConservacion', 'pez_estado_conservacion(peces_especie_id, estado_conservacion_id)'),
			'tipoCapturases' => array(self::MANY_MANY, 'TipoCapturas', 'pez_tipo_capturas(peces_especie_id, tipo_capturas_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'especie_id' => 'Especie',
			'nombre_comun' => 'Nombre Comun',
			'nombre_ingles' => 'Nombre Ingles',
			'nombre_cientifico' => 'Nombre Cientifico',
			'clase' => 'Clase',
			'orden' => 'Orden',
			'familia' => 'Familia',
			'grupo_id' => 'Grupo',
			'nacional_Importado' => 'Nacional Importado',
			'tipo_imagen' => 'Tipo Imagen',
			'imagen' => 'Imagen',
			'talla_captura' => 'Talla Captura',
			'selectiva_noselectiva' => 'Tipo Captura',
			'arte_pesca' => 'Arte Pesca',
			'tipo_veda_id' => 'Tipo Veda',
			'veda' => 'Veda',
			'generalidades' => 'Generalidades',
			'descripcion_distribucion' => 'Descripcion Distribucion',
			'cultivado_capturado' => 'Cultivado Capturado',
			'comercio' => 'Comercio',
			'pais_importacion' => 'Pais Importacion',
			'fecha_creacion' => 'Fecha Creacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('especie_id',$this->especie_id);
		$criteria->compare('nombre_comun',$this->nombre_comun,true);
		$criteria->compare('nombre_ingles',$this->nombre_ingles,true);
		$criteria->compare('nombre_cientifico',$this->nombre_cientifico,true);
		$criteria->compare('clase',$this->clase,true);
		$criteria->compare('orden',$this->orden,true);
		$criteria->compare('familia',$this->familia,true);
		$criteria->compare('grupo_id',$this->grupo_id);
		$criteria->compare('nacional_Importado',$this->nacional_Importado,true);
		$criteria->compare('tipo_imagen',$this->tipo_imagen,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('talla_captura',$this->talla_captura,true);
		$criteria->compare('selectiva_noselectiva',$this->selectiva_noselectiva,true);
		$criteria->compare('arte_pesca',$this->arte_pesca,true);
		$criteria->compare('tipo_veda_id',$this->tipo_veda_id);
		$criteria->compare('veda',$this->veda,true);
		$criteria->compare('generalidades',$this->generalidades,true);
		$criteria->compare('descripcion_distribucion',$this->descripcion_distribucion,true);
		$criteria->compare('cultivado_capturado',$this->cultivado_capturado,true);
		$criteria->compare('comercio',$this->comercio,true);
		$criteria->compare('pais_importacion',$this->pais_importacion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Para poder hacer la clausula IN con strings
	 */
	public static function junta_attributos_escapados ($atributos)
	{
		$sql = '';
		foreach ($atributos as $att)
			$sql.= "'".$att."',";
		return substr($sql, 0, -1);
			
	}
	
	public function ordena()
	{
		foreach (Peces::model()->findAllByAttributes(array('recomendacion'=>1)) as $k => $pez)
		{
			echo "$pez->especie_id - $pez->nombre_cientifico<br>";
			$peso = $pez->peso;
			$zonas = explode("/", $peso);
			$peso_promedio = 0;

			foreach ($zonas as $zona)
			{
				if ((Int)$zona >= 0 && (Int)$zona <= 1)   //Recomendable
					$peso_promedio-= 200;
				if ((Int)$zona >= 2 && (Int)$zona <= 3)   //Poco Recomendable
					$peso_promedio+= 100;
				if ((Int)$zona >= 4 && (Int)$zona <= 19)  //No recomendable
					$peso_promedio+= 1000;
				if ((Int)$zona >= 20)                     //Importado (peor caso)
					$peso_promedio+= 10000;
			}
			$pez->peso_promedio = $peso_promedio;

			if ($pez->save())
				echo "---> Guardo<br>";
			else {
				echo "---> No guardo<br>";
				print_r($pez->getErrors());
			}
		}
	}
	
	public function completa_pesos()
	{	
		foreach (Peces::model()->findAllByAttributes(array('recomendacion'=>1)) as $k => $pez)
		{
			$peso1 = $peso2 = $peso3 = $peso4 = $peso5 =$peso6 = -1;
			$peso7 = -1;
			$peso_comun = 0;
			echo "<br><br>".$pez->nombre_cientifico."<br>";
			
			echo "nacional_Importado: ".$pez->nacional_Importado."<br>";
			if ($pez->nacional_Importado == "Nacional e importado" || $pez->nacional_Importado == "Importado")
				$peso7+=21;
			
			echo "selectiva_noselectiva: ".$pez->selectiva_noselectiva."<br>";
			if ($pez->selectiva_noselectiva == "No selectiva")
				$peso_comun+=1;
			
			if (!empty($pez->tipoVeda))
			{
				echo "Tipo de veda: ".$pez->tipoVeda->Nombre."<br>";
				
				switch ($pez->tipoVeda->Nombre)
				{
					case 'Permanente  (solo pesca deportiva)':
						$peso_comun+=2;
						break;
					case 'Permanente':
						$peso_comun+=3;
						break;
					case 'Temporal fija':
						$peso_comun+=1;
						break;
				}
			}
			
			foreach ($pez->estadoConservacions as $edo_cons)
			{
				if ($edo_cons->Nivel1 == 3)
				{
					echo "Estado de conservacion: ".$edo_cons->nombre."<br>";
					
					switch ($edo_cons->nombre)
					{
						case 'Amenazada':
							$peso_comun+=4;
							break;
						case 'En peligro crítico':
							$peso_comun+=4;
							break;
						case 'Extinto en vida silvestre':
							$peso_comun+=4;
							break;
					}
				}
			}
			
			foreach ($pez->cartaNacionals as $carta)
			{
				switch ($carta->Nivel1)
				{
					case 1:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso1=0;
								break;
							case 'En deterioro.':
								$peso1=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso1=2;
								break;
						}
						break;
					case 2:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso2=0;
								break;
							case 'En deterioro.':
								$peso2=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso2=2;
								break;
						}
						break;
					case 3:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso3=0;
								break;
							case 'En deterioro.':
								$peso3=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso3=2;
								break;
						}
						break;
					case 4:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso4=0;
								break;
							case 'En deterioro.':
								$peso4=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso4=2;
								break;
						}
						break;
					case 5:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso5=0;
								break;
							case 'En deterioro.':
								$peso5=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso5=2;
								break;
						}
						break;
					case 6:
						switch ($carta->Nombre)
						{
							case 'Con potencial de desarrollo.':
								$peso6=0;
								break;
							case 'En deterioro.':
								$peso6=4;
								break;
							case 'Máximo aprovechamiento permisible.':
								$peso6=2;
								break;
						}
						break;
				} //iterador de niveles de la carta							
			} //iterador de carta nacional
			
			if ($peso1 > -1)
				$peso1+=$peso_comun;
			if ($peso2 > -1)
				$peso2+=$peso_comun;
			if ($peso3 > -1)
				$peso3+=$peso_comun;
			if ($peso4 > -1)
				$peso4+=$peso_comun;
			if ($peso5 > -1)
				$peso5+=$peso_comun;
			if ($peso6 > -1)
				$peso6+=$peso_comun;
			
			$peso = "$peso1/$peso2/$peso3/$peso4/$peso5/$peso6/$peso7";
			echo "peso: $peso<br>";
			
			$pez->peso = $peso;
			if ($pez->save())
				echo "---> Guardo<br>";
			else {
				echo "---> No guardo<br>";
				print_r($pez->getErrors());
			}
		} //iterador de los peces	
	}
	
	public static function peso_a_nombre_imagen($peso)
	{
		$imagen = '';
		$zonas = explode("/", $peso);

		foreach ($zonas as $zona)
		{
			if ((Int)$zona >= 0 && (Int)$zona <= 1)   //Recomendable
				$imagen.= 'v';
			if ((Int)$zona >= 2 && (Int)$zona <= 3)   //Poco Recomendable
				$imagen.= 'a';
			if ((Int)$zona >= 4)                      //No recomendable
				$imagen.= 'r';
			if ((Int)$zona == -1)                     //Vacio o sin Datos
				$imagen.= 'b';
		}
		
		return $imagen.".jpg";
	}
}