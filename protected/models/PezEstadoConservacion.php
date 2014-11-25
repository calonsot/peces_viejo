<?php

/**
 * This is the model class for table "pez_estado_conservacion".
 *
 * The followings are the available columns in table 'pez_estado_conservacion':
 * @property string $fecha_creacion
 * @property integer $peces_especie_id
 * @property integer $estado_conservacion_id
 */
class PezEstadoConservacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PezEstadoConservacion the static model class
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
		return 'pez_estado_conservacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_creacion, peces_especie_id, estado_conservacion_id', 'required'),
			array('peces_especie_id, estado_conservacion_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fecha_creacion, peces_especie_id, estado_conservacion_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha_creacion' => 'Fecha Creacion',
			'peces_especie_id' => 'Peces Especie',
			'estado_conservacion_id' => 'Estado Conservacion',
		);
	}

	public static function join()
	{
		return ' LEFT JOIN pez_estado_conservacion pec ON pec.peces_especie_id=p.especie_id ';
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

		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('peces_especie_id',$this->peces_especie_id);
		$criteria->compare('estado_conservacion_id',$this->estado_conservacion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Regresa todos los peces que tengan NOM, IUCN o CITES
	 */
	public static function nom_cites_iucn()
	{
		$peces = array();
		$resultados=Yii::app()->db->createCommand("SELECT peces_especie_id FROM pez_estado_conservacion GROUP BY peces_especie_id ORDER BY peces_especie_id ASC")->queryAll();
		foreach ($resultados as $res)
		{
			$pez_array = array();
			$pez = Peces::model()->findByPk($res["peces_especie_id"]);
			if (!empty($pez->nombre_comun))
				$pez_array["nombre"] = $pez->nombre_comun." <i>(".$pez->nombre_cientifico.")</i>";
			else
				$pez_array["nombre"] = "<i>".$pez->nombre_cientifico."</i>";
			
			foreach ($pez->estadoConservacions as $rel)
			{
				$rel->Nivel1 == 3 ? $pez_array["NOM"] = $rel->nombre : $pez_array["NOM"] = "";
				$rel->Nivel1 == 2 ? $pez_array["CITES"] = $rel->nombre : $pez_array["CITES"] = "";
				$rel->Nivel1 == 1 ? $pez_array["IUCN"] = $rel->nombre : $pez_array["IUCN"] = "";
			}
			array_push($peces, $pez_array);
		}
		return $peces;
	}
}