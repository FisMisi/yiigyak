<?php

/**
 * This is the model class for table "authors".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $name
 * @property string $bio
 * @property string $create_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 */
class Author extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'authors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'bio', 'required'),
			array('name', 'length', 'max'=>20),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name,create_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Author azon',
			'name' => 'Név',
                        'bio'=>'Leírás',
			'created_at' => 'Regisztráció ideje',
			'updated_at' => 'Adatok frissítve',
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

		$criteria->compare('ida',$this->id,true);
		$criteria->compare('namea',$this->name,true);
		$criteria->compare('createda_at',$this->created_at,true);
		$criteria->compare('updateda_at',$this->updated_at,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}


