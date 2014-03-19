<?php

/**
 * This is the model class for table "frio_usuario".
 *
 * The followings are the available columns in table 'frio_usuario':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nombre
 * @property string $email
 * @property string $created_at
 * @property string $last_visit
 * @property integer $tipousuario
 * @property integer $cliente
 * @property integer $activo
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public static $tipoUsuario=array(''=>'','1'=>'Administrador','2'=>'Cliente');
	public static $activo=array(''=>'','1'=>'Activo','0'=>'Inactivo');
	public function tableName()
	{
		return 'frio_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nombre, email,tipousuario', 'required'),
			array('tipousuario, cliente, activo', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>45),
			array('nombre', 'length', 'max'=>255),
			array('email', 'length', 'max'=>100),
			array('email', 'email'),
			array('username','unique','attributeName'=>'username','className'=>'Usuario','allowEmpty'=>false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, nombre, email, created_at, last_visit, tipousuario, cliente, activo', 'safe', 'on'=>'search'),
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
		'mycliente' => array(self::BELONGS_TO, 'Cliente', 'cliente'),
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Contraseña',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'created_at' => 'Creado',
			'last_visit' => 'Ultima Visita',
			'tipousuario' => 'Tipo de Usuario',
			'cliente' => 'Cliente',
			'activo' => 'Estado',
		);
	}
	/**
	 * @return un boolean si es el password son iguales o no.
	 */
	public function validatePassword($password){
		return $this->hashPassword($password)===$this->password;		
	}
	/**
	 * @return un string con el password con md5.
	 */
	public function hashPassword($password){
		return md5($password);
	}
	/**
	 * @return la descripcion del tipo de usuario.
	 */
	public function getTipoUsuario($key=null) {
		if($key!==null)
			return self::$tipoUsuario[$key];
		 return self::$tipoUsuario[$this->tipousuario];	
	}
	/**
	 * @return un array con los tipos de usuarios.
	 */
	public function getListaTipoUsuario(){
		return self::$tipoUsuario;
	}
	/**
	 * @return la descripcion del estado .
	 */
	public function getActivo($key=null) {
		if($key!==null)
			return self::$activo[$key];
		return self::$activo[$this->activo];
			
	}
	/**
	 * @return un array con los tipos de estado.
	 */
	public function getListaActivo(){
		return self::$activo;
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('last_visit',$this->last_visit,true);
		$criteria->compare('tipousuario',$this->tipousuario);
		$criteria->compare('cliente',$this->cliente);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
