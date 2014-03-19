<?php

/**
 * This is the model class for table "frio_cliente".
 *
 * The followings are the available columns in table 'frio_cliente':
 * @property string $rif
 * @property string $razonSocial
 * @property string $nit
 * @property string $representante
 * @property string $numeroContacto
 * @property integer $id
 * @property string $codigo
 * @property integer $usuarios_id
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'frio_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rif, razonSocial, representante, usuarios_id', 'required'),
			array('usuarios_id', 'numerical', 'integerOnly'=>true),
			array('rif', 'length', 'max'=>15),
			array('razonSocial', 'length', 'max'=>150),
			array('nit, numeroContacto, codigo', 'length', 'max'=>45),
			array('representante', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rif, razonSocial, nit, representante, numeroContacto, id, codigo, usuarios_id', 'safe', 'on'=>'search'),
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
			'myusuario'=>array(self::BELONGS_TO, 'Usuario', 'usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rif' => 'Rif',
			'razonSocial' => 'Razon Social',
			'nit' => 'Nit',
			'representante' => 'Representante',
			'numeroContacto' => 'Numero Contacto',
			'id' => 'ID',
			'codigo' => 'Codigo',
			'usuarios_id' => 'Usuarios',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rif',$this->rif,true);
		$criteria->compare('razonSocial',$this->razonSocial,true);
		$criteria->compare('nit',$this->nit,true);
		$criteria->compare('representante',$this->representante,true);
		$criteria->compare('numeroContacto',$this->numeroContacto,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('usuarios_id',$this->usuarios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
