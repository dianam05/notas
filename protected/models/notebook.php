<?php

/**
 * This is the model class for table "notebook".
 *
 * The followings are the available columns in table 'notebook':
 * @property integer $id
 * @property integer $id_user
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_creacion
 */
class notebook extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notebook';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, nombre, descripcion, fecha_creacion', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion', 'length', 'max'=>180),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_user, nombre, descripcion, fecha_creacion', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'id_user' => 'Id User',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'fecha_creacion' => 'Fecha Creación',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('id_user',$this->id_user);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('descripcion',$this->descripcion,true);

		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider('notebook', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return notebook the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}