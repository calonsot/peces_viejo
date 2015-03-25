<?php

/**
 * This is the model class for table "carta_nacional".
 *
 * The followings are the available columns in table 'carta_nacional':
 * @property integer $id
 * @property string $Nombre
 * @property integer $Nivel1
 * @property integer $Nivel2
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property Peces[] $peces
 */
class CartaNacional extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CartaNacional the static model class
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
		return 'carta_nacional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Nivel1, Nivel2, fecha_creacion', 'required'),
			array('Nivel1, Nivel2', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Nombre, Nivel1, Nivel2, fecha_creacion', 'safe', 'on'=>'search'),
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
			'peces' => array(self::MANY_MANY, 'Peces', 'pez_carta_nacional(carta_nacional_id, peces_especie_id)'),
			'carta' => array(self::MANY_MANY, 'PezCartaNacional', 'pez_carta_nacional(carta_nacional_id, peces_especie_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre' => 'Nombre',
			'Nivel1' => 'Nivel1',
			'Nivel2' => 'Nivel2',
			'fecha_creacion' => 'Fecha Creacion',
		);
	}
	
	public static function join()
	{
		return ' LEFT JOIN pez_carta_nacional pcn ON pcn.peces_especie_id=p.especie_id LEFT JOIN carta_nacional cn ON cn.id=pcn.carta_nacional_id ';
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Nivel1',$this->Nivel1);
		$criteria->compare('Nivel2',$this->Nivel2);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}