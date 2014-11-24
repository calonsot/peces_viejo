<?php

/**
 * This is the model class for table "filtros".
 *
 * The followings are the available columns in table 'filtros':
 * @property integer $id
 * @property string $sesion
 * @property string $buscador_nombre_comun
 * @property string $buscador_nombre_cientifico
 * @property string $buscador_grupo
 * @property string $buscador_golfo
 * @property string $buscador_pacifico
 * @property string $fecha_uso
 */
class Filtros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Filtros the static model class
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
		return 'filtros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sesion', 'required'),
			array('sesion, buscador_nombre_comun, buscador_nombre_cientifico, buscador_grupo, buscador_estado_conservacion, 
					buscador_selectiva, buscador_no_selectiva, buscador_pacifico, buscador_golfo, buscador_caribe, 
					buscador_importado, buscador_objetiva, buscador_incidental, buscador_deportiva, buscador_fomento, 
					buscador_cultivada', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sesion, buscador_nombre_comun, buscador_nombre_cientifico, buscador_grupo, buscador_estado_conservacion, 
					buscador_selectiva, buscador_no_selectiva, buscador_pacifico, buscador_golfo, buscador_caribe, 
					buscador_importado, buscador_objetiva, buscador_incidental, buscador_deportiva, buscador_fomento, 
					buscador_cultivada, fecha_uso', 'safe', 'on'=>'search'),
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
	
	public function getJsonData(){
		$var = get_object_vars($this);
		foreach($var as &$value){
			if(is_object($value) && method_exists($value,'getJsonData')){
				$value = $value->getJsonData();
			}
		}
		return $var;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sesion' => 'Sesion',
			'buscador_nombre_comun' => 'Buscador Nombre Comun',
			'buscador_nombre_cientifico' => 'Buscador Nombre Cientifico',
			'buscador_grupo' => 'Buscador Grupo',
			'buscador_golfo' => 'Buscador Golfo',
			'buscador_pacifico' => 'Buscador Pacifico',
			'fecha_uso' => 'Fecha Uso',
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
		$criteria->compare('sesion',$this->sesion,true);
		$criteria->compare('buscador_nombre_comun',$this->buscador_nombre_comun,true);
		$criteria->compare('buscador_nombre_cientifico',$this->buscador_nombre_cientifico,true);
		$criteria->compare('buscador_grupo',$this->buscador_grupo,true);
		$criteria->compare('buscador_golfo',$this->buscador_golfo,true);
		$criteria->compare('buscador_pacifico',$this->buscador_pacifico,true);
		$criteria->compare('fecha_uso',$this->fecha_uso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * @return CMapIterator the iterator for the foreach statement
	 */
	public function aJSON()
	{
		$attributes=$this->getAttributes();	
		return CJSON::encode($attributes);
	}
}