<?php

/**
 * This is the model class for table "universidades".
 *
 * The followings are the available columns in table 'universidades':
 * @property string $id_univ
 * @property string $nom_univ
 * @property string $univ_web
 */
class Universidades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Universidades the static model class
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
		return 'universidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('univ_web', 'required'),
			array('nom_univ, univ_web', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_univ, nom_univ, univ_web', 'safe', 'on'=>'search'),
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
                    'carreras'=>array(self::HAS_MANY,'Carreras','id_carrera')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_univ' => 'ID Universidad',
			'nom_univ' => 'Nombre',
			'univ_web' => 'URL',
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

		$criteria->compare('id_univ',$this->id_univ,true);
		$criteria->compare('nom_univ',$this->nom_univ,true);
		$criteria->compare('univ_web',$this->univ_web,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}