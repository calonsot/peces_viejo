<?php

/**
 * This is the model class for table "estado_conservacion".
 *
 * The followings are the available columns in table 'estado_conservacion':
 * @property integer $id
 * @property string $nombre
 * @property integer $Nivel1
 * @property integer $Nivel2
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property Peces[] $peces
 */
class EstadoConservacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EstadoConservacion the static model class
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
		return 'estado_conservacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, Nivel1, Nivel2, fecha_creacion', 'required'),
			array('Nivel1, Nivel2', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, Nivel1, Nivel2, fecha_creacion', 'safe', 'on'=>'search'),
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
			'peces' => array(self::MANY_MANY, 'Peces', 'pez_estado_conservacion(estado_conservacion_id, peces_especie_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'Nivel1' => 'Nivel1',
			'Nivel2' => 'Nivel2',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('Nivel1',$this->Nivel1);
		$criteria->compare('Nivel2',$this->Nivel2);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	//Para poner subcategorias en el dropdownlist
	public function options()
	{
		$options = array();
		$n = $this->findAllByAttributes(array('Nivel1' => 3), "Nivel2 > 0");
		$i = $this->findAllByAttributes(array('Nivel1' => 1), "Nivel2 > 0");
		$c = $this->findAllByAttributes(array('Nivel1' => 2), "Nivel2 > 0");
		
		foreach ($n as $r)
		{
			$nom = array();
			$nom['id'] = $r['id'];
			$nom['nombre'] = $r['nombre'];
			$nom['grupo'] = 'NOM';
			array_push($options, $nom);
		}
		
		foreach ($i as $r)
		{
			$iucn = array();
			$iucn['id'] = $r['id'];
			$iucn['nombre'] = $r['nombre'];
			$iucn['grupo'] = 'IUCN';
			array_push($options, $iucn);
		}
		
		foreach ($c as $r)
		{
			$cites = array();
			$cites['id'] = $r['id'];
			$cites['nombre'] = $r['nombre'];
			$cites['grupo'] = 'CITES';
			array_push($options, $cites);
		}
		return $options;
	}
}