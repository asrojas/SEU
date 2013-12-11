<?php

/**
 * This is the model class for table "comunas".
 *
 * The followings are the available columns in table 'comunas':
 * @property string $id_comuna
 * @property string $provincias_id_provincia
 * @property string $nom_comuna
 */
class Comunas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comunas the static model class
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
		return 'comunas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provincias_id_provincia', 'required'),
			array('provincias_id_provincia', 'length', 'max'=>10),
			array('nom_comuna', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_comuna, provincias_id_provincia, nom_comuna', 'safe', 'on'=>'search'),
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
			'id_comuna' => 'Id Comuna',
			'provincias_id_provincia' => 'Provincias Id Provincia',
			'nom_comuna' => 'Nom Comuna',
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

		$criteria->compare('id_comuna',$this->id_comuna,true);
		$criteria->compare('provincias_id_provincia',$this->provincias_id_provincia,true);
		$criteria->compare('nom_comuna',$this->nom_comuna,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}