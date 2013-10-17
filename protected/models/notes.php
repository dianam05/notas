<?php

/**
 * This is the model class for table "notes".
 *
 * The followings are the available columns in table 'notes':
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_notebook
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_creacion
 */
class notes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_notebook, nombre, descripcion, fecha_creacion', 'required'),
			array('id_user, id_notebook', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>180),
			array('descripcion', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_user, id_notebook, nombre, descripcion, fecha_creacion', 'safe', 'on'=>'search'),
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
			'id_notebook' => 'Id Notebook',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'fecha_creacion' => 'Fecha Creacion',
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

		$criteria->compare('id_notebook',$this->id_notebook);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('descripcion',$this->descripcion,true);

		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider('notes', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return notes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}