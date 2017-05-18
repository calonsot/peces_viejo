<?php

/**
 * This is the model class for table "peces".
 *
 * The followings are the available columns in table 'peces':
 * @property integer $id
 * @property string $nombre_comun
 * @property string $nombre_ingles
 * @property string $otros_nombres_comunes
 * @property string $nombre_cientifico
 * @property integer $presente_golfo
 * @property integer $presente_caribe
 * @property string $presente_pacifico
 * @property string $grupo_cnp
 * @property string $grupo_conabio
 * @property string $nacional_importado
 * @property integer $nacional_importado_valor
 * @property integer $nacional_importado_peso
 * @property integer $objetivo
 * @property integer $incidental
 * @property integer $deportiva
 * @property integer $fomento
 * @property integer $cultivada
 * @property string $talla_captura
 * @property string $tipo_captura
 * @property integer $tipo_captura_valor
 * @property integer $tipo_captura_peso
 * @property string $arte_pesca
 * @property string $nom
 * @property integer $nom_valor
 * @property integer $nom_peso
 * @property string $iucn
 * @property integer $iucn_valor
 * @property integer $iucn_peso
 * @property string $cites
 * @property integer $cites_valor
 * @property integer $cites_peso
 * @property string $tipo_veda
 * @property integer $tipo_veda_valor
 * @property integer $tipo_veda_peso
 * @property string $tipo_veda_fecha
 * @property string $generalidades
 * @property string $distribucion
 * @property string $cultivada_capturada
 * @property string $comercio
 * @property string $pais_importacion
 * @property string $zona1
 * @property integer $zona1_valor
 * @property integer $zona1_peso
 * @property string $zona2
 * @property integer $zona2_valor
 * @property integer $zona2_peso
 * @property string $zona3
 * @property integer $zona3_valor
 * @property integer $zona3_peso
 * @property string $zona4
 * @property integer $zona4_valor
 * @property integer $zona4_peso
 * @property string $zona5
 * @property integer $zona5_valor
 * @property integer $zona5_peso
 * @property string $zona6
 * @property integer $zona6_valor
 * @property integer $zona6_peso
 * @property string $seafoodwatch
 * @property string $imagen
 * @property integer $tipo_imagen
 * @property integer $cnp
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
			array('presente_golfo, presente_caribe, nacional_importado_valor, nacional_importado_peso, objetivo, incidental, deportiva, fomento, cultivada, tipo_captura_valor, tipo_captura_peso, nom_valor, nom_peso, iucn_valor, iucn_peso, cites_valor, cites_peso, tipo_veda_valor, tipo_veda_peso, zona1_valor, zona1_peso, zona2_valor, zona2_peso, zona3_valor, zona3_peso, zona4_valor, zona4_peso, zona5_valor, zona5_peso, zona6_valor, zona6_peso, tipo_imagen, cnp', 'numerical', 'integerOnly'=>true),
			array('nombre_comun, nombre_ingles, nombre_cientifico, grupo_cnp, grupo_conabio, nacional_importado, talla_captura, tipo_captura, arte_pesca, nom, iucn, cites, tipo_veda, tipo_veda_fecha, cultivada_capturada, comercio, pais_importacion, zona1, zona2, zona3, zona4, zona5, zona6, imagen', 'length', 'max'=>255),
			array('otros_nombres_comunes, generalidades, distribucion', 'length', 'max'=>512),
			array('presente_pacifico, seafoodwatch', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre_comun, nombre_ingles, otros_nombres_comunes, nombre_cientifico, presente_golfo, presente_caribe, presente_pacifico, grupo_cnp, grupo_conabio, nacional_importado, nacional_importado_valor, nacional_importado_peso, objetivo, incidental, deportiva, fomento, cultivada, talla_captura, tipo_captura, tipo_captura_valor, tipo_captura_peso, arte_pesca, nom, nom_valor, nom_peso, iucn, iucn_valor, iucn_peso, cites, cites_valor, cites_peso, tipo_veda, tipo_veda_valor, tipo_veda_peso, tipo_veda_fecha, generalidades, distribucion, cultivada_capturada, comercio, pais_importacion, zona1, zona1_valor, zona1_peso, zona2, zona2_valor, zona2_peso, zona3, zona3_valor, zona3_peso, zona4, zona4_valor, zona4_peso, zona5, zona5_valor, zona5_peso, zona6, zona6_valor, zona6_peso, seafoodwatch, imagen, tipo_imagen, cnp', 'safe', 'on'=>'search'),
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
			'nombre_comun' => 'Nombre Comun',
			'nombre_ingles' => 'Nombre Ingles',
			'otros_nombres_comunes' => 'Otros Nombres Comunes',
			'nombre_cientifico' => 'Nombre Cientifico',
			'presente_golfo' => 'Presente Golfo',
			'presente_caribe' => 'Presente Caribe',
			'presente_pacifico' => 'Presente Pacifico',
			'grupo_cnp' => 'Grupo Cnp',
			'grupo_conabio' => 'Grupo Conabio',
			'nacional_importado' => 'Nacional Importado',
			'nacional_importado_valor' => 'Nacional Importado Valor',
			'nacional_importado_peso' => 'Nacional Importado Peso',
			'objetivo' => 'Objetivo',
			'incidental' => 'Incidental',
			'deportiva' => 'Deportiva',
			'fomento' => 'Fomento',
			'cultivada' => 'Cultivada',
			'talla_captura' => 'Talla Captura',
			'tipo_captura' => 'Tipo Captura',
			'tipo_captura_valor' => 'Tipo Captura Valor',
			'tipo_captura_peso' => 'Tipo Captura Peso',
			'arte_pesca' => 'Arte Pesca',
			'nom' => 'Nom',
			'nom_valor' => 'Nom Valor',
			'nom_peso' => 'Nom Peso',
			'iucn' => 'Iucn',
			'iucn_valor' => 'Iucn Valor',
			'iucn_peso' => 'Iucn Peso',
			'cites' => 'Cites',
			'cites_valor' => 'Cites Valor',
			'cites_peso' => 'Cites Peso',
			'tipo_veda' => 'Tipo Veda',
			'tipo_veda_valor' => 'Tipo Veda Valor',
			'tipo_veda_peso' => 'Tipo Veda Peso',
			'tipo_veda_fecha' => 'Tipo Veda Fecha',
			'generalidades' => 'Generalidades',
			'distribucion' => 'Distribucion',
			'cultivada_capturada' => 'Cultivada Capturada',
			'comercio' => 'Comercio',
			'pais_importacion' => 'Pais Importacion',
			'zona1' => 'Zona1',
			'zona1_valor' => 'Zona1 Valor',
			'zona1_peso' => 'Zona1 Peso',
			'zona2' => 'Zona2',
			'zona2_valor' => 'Zona2 Valor',
			'zona2_peso' => 'Zona2 Peso',
			'zona3' => 'Zona3',
			'zona3_valor' => 'Zona3 Valor',
			'zona3_peso' => 'Zona3 Peso',
			'zona4' => 'Zona4',
			'zona4_valor' => 'Zona4 Valor',
			'zona4_peso' => 'Zona4 Peso',
			'zona5' => 'Zona5',
			'zona5_valor' => 'Zona5 Valor',
			'zona5_peso' => 'Zona5 Peso',
			'zona6' => 'Zona6',
			'zona6_valor' => 'Zona6 Valor',
			'zona6_peso' => 'Zona6 Peso',
			'seafoodwatch' => 'Seafoodwatch',
			'imagen' => 'Imagen',
			'tipo_imagen' => 'Tipo Imagen',
			'cnp' => 'Cnp',
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
		$criteria->compare('nombre_ingles',$this->nombre_ingles,true);
		$criteria->compare('otros_nombres_comunes',$this->otros_nombres_comunes,true);
		$criteria->compare('nombre_cientifico',$this->nombre_cientifico,true);
		$criteria->compare('presente_golfo',$this->presente_golfo);
		$criteria->compare('presente_caribe',$this->presente_caribe);
		$criteria->compare('presente_pacifico',$this->presente_pacifico,true);
		$criteria->compare('grupo_cnp',$this->grupo_cnp,true);
		$criteria->compare('grupo_conabio',$this->grupo_conabio,true);
		$criteria->compare('nacional_importado',$this->nacional_importado,true);
		$criteria->compare('nacional_importado_valor',$this->nacional_importado_valor);
		$criteria->compare('nacional_importado_peso',$this->nacional_importado_peso);
		$criteria->compare('objetivo',$this->objetivo);
		$criteria->compare('incidental',$this->incidental);
		$criteria->compare('deportiva',$this->deportiva);
		$criteria->compare('fomento',$this->fomento);
		$criteria->compare('cultivada',$this->cultivada);
		$criteria->compare('talla_captura',$this->talla_captura,true);
		$criteria->compare('tipo_captura',$this->tipo_captura,true);
		$criteria->compare('tipo_captura_valor',$this->tipo_captura_valor);
		$criteria->compare('tipo_captura_peso',$this->tipo_captura_peso);
		$criteria->compare('arte_pesca',$this->arte_pesca,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('nom_valor',$this->nom_valor);
		$criteria->compare('nom_peso',$this->nom_peso);
		$criteria->compare('iucn',$this->iucn,true);
		$criteria->compare('iucn_valor',$this->iucn_valor);
		$criteria->compare('iucn_peso',$this->iucn_peso);
		$criteria->compare('cites',$this->cites,true);
		$criteria->compare('cites_valor',$this->cites_valor);
		$criteria->compare('cites_peso',$this->cites_peso);
		$criteria->compare('tipo_veda',$this->tipo_veda,true);
		$criteria->compare('tipo_veda_valor',$this->tipo_veda_valor);
		$criteria->compare('tipo_veda_peso',$this->tipo_veda_peso);
		$criteria->compare('tipo_veda_fecha',$this->tipo_veda_fecha,true);
		$criteria->compare('generalidades',$this->generalidades,true);
		$criteria->compare('distribucion',$this->distribucion,true);
		$criteria->compare('cultivada_capturada',$this->cultivada_capturada,true);
		$criteria->compare('comercio',$this->comercio,true);
		$criteria->compare('pais_importacion',$this->pais_importacion,true);
		$criteria->compare('zona1',$this->zona1,true);
		$criteria->compare('zona1_valor',$this->zona1_valor);
		$criteria->compare('zona1_peso',$this->zona1_peso);
		$criteria->compare('zona2',$this->zona2,true);
		$criteria->compare('zona2_valor',$this->zona2_valor);
		$criteria->compare('zona2_peso',$this->zona2_peso);
		$criteria->compare('zona3',$this->zona3,true);
		$criteria->compare('zona3_valor',$this->zona3_valor);
		$criteria->compare('zona3_peso',$this->zona3_peso);
		$criteria->compare('zona4',$this->zona4,true);
		$criteria->compare('zona4_valor',$this->zona4_valor);
		$criteria->compare('zona4_peso',$this->zona4_peso);
		$criteria->compare('zona5',$this->zona5,true);
		$criteria->compare('zona5_valor',$this->zona5_valor);
		$criteria->compare('zona5_peso',$this->zona5_peso);
		$criteria->compare('zona6',$this->zona6,true);
		$criteria->compare('zona6_valor',$this->zona6_valor);
		$criteria->compare('zona6_peso',$this->zona6_peso);
		$criteria->compare('seafoodwatch',$this->seafoodwatch,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('tipo_imagen',$this->tipo_imagen);
		$criteria->compare('cnp',$this->cnp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function nom_cites_iucn()
	{
		return Yii::app()->db->createCommand()
				->select('nombre_comun, nombre_cientifico, nom, iucn, cites')
				->from('peces')
				->where('nom_valor=1 OR iucn_valor=1 OR cites_valor=1')
				->queryAll();		
	}
	
	public static function grupos_conabio()
	{
		return Yii::app()->db->createCommand()
				->select('grupo_conabio')
				->from('peces')
				->group('grupo_conabio')
				->order('grupo_conabio')
				->queryAll();
	}
}