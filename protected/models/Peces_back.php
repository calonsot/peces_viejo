<?php

/**
 * This is the model class for table "peces".
 *
 * The followings are the available columns in table 'peces':
 * @property integer $id
 * @property string $nombre_comun
 * @property string $nombre_cientifico
 * @property string $nombre_ingles
 * @property string $grupo
 * @property string $familia
 * @property string $lugar
 * @property string $talla_captura
 * @property string $aprovechamiento
 * @property string $lista_roja_iucn
 * @property string $veda
 * @property string $arte_de_pesca
 * @property string $tipo_arte_pesca
 * @property string $generalidades
 * @property string $distribucion
 * @property string $foto
 * @property string $html
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
			array('nombre_comun, nombre_cientifico, nombre_ingles, grupo, familia, lugar, talla_captura, aprovechamiento, arte_de_pesca, tipo_arte_pesca, generalidades, distribucion, foto', 'required'),
			array('nombre_comun, nombre_cientifico, nombre_ingles, grupo, familia, lugar, talla_captura, aprovechamiento, lista_roja_iucn, veda, arte_de_pesca, foto', 'length', 'max'=>255),
			array('html', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre_comun, nombre_cientifico, nombre_ingles, grupo, familia, lugar, talla_captura, aprovechamiento, lista_roja_iucn, veda, arte_de_pesca, tipo_arte_pesca, generalidades, distribucion, foto, html', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre_comun' => 'Nombre común',
			'nombre_cientifico' => 'Nombre Cientifico',
			'nombre_ingles' => 'Nombre Ingles',
			'grupo' => 'Grupo',
			'familia' => 'Familia',
			'lugar' => 'Lugar',
			'talla_captura' => 'Talla Captura',
			'aprovechamiento' => 'Aprovechamiento',
			'lista_roja_iucn' => 'Lista Roja Iucn',
			'veda' => 'Veda',
			'arte_de_pesca' => 'Arte De Pesca',
			'tipo_arte_pesca' => 'Tipo Arte Pesca',
			'generalidades' => 'Generalidades',
			'distribucion' => 'Distribucion',
			'foto' => 'Foto',
			'html' => 'Html',
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
		$criteria->compare('nombre_comun',$this->nombre_comun,true);
		$criteria->compare('nombre_cientifico',$this->nombre_cientifico,true);
		$criteria->compare('nombre_ingles',$this->nombre_ingles,true);
		$criteria->compare('grupo',$this->grupo,true);
		$criteria->compare('familia',$this->familia,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('talla_captura',$this->talla_captura,true);
		$criteria->compare('aprovechamiento',$this->aprovechamiento,true);
		$criteria->compare('lista_roja_iucn',$this->lista_roja_iucn,true);
		$criteria->compare('veda',$this->veda,true);
		$criteria->compare('arte_de_pesca',$this->arte_de_pesca,true);
		$criteria->compare('tipo_arte_pesca',$this->tipo_arte_pesca,true);
		$criteria->compare('generalidades',$this->generalidades,true);
		$criteria->compare('distribucion',$this->distribucion,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('html',$this->html,true);

		$criteria->order('nombre_comun ASC');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}