<?php

/**
 * This is the model class for table "crm_clients".
 *
 * The followings are the available columns in table 'crm_clients':
 * @property integer $id
 * @property string $type
 * @property integer $phone
 * @property integer $login
 * @property string $pass
 * @property string $street
 * @property string $name
 * @property string $house
 * @property integer $flat
 * @property string $birthday
 * @property string $addon
 * @property string $date_in
 * @property integer $postcount
 */
class CrmClients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'crm_clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, phone, login, name', 'required'),
			array('phone, login, flat, postcount', 'numerical', 'integerOnly'=>true),
			array('type, birthday, date_in', 'length', 'max'=>20),
			array('pass', 'length', 'max'=>40),
			array('street, name', 'length', 'max'=>200),
			array('house', 'length', 'max'=>6),
			array('addon', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, phone, login, pass, street, name, house, flat, birthday, addon, date_in, postcount', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'phone' => 'Phone',
			'login' => 'Login',
			'pass' => 'Pass',
			'street' => 'Street',
			'name' => 'Name',
			'house' => 'House',
			'flat' => 'Flat',
			'birthday' => 'Birthday',
			'addon' => 'Addon',
			'date_in' => 'Date In',
			'postcount' => 'Postcount',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('login',$this->login);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('house',$this->house,true);
		$criteria->compare('flat',$this->flat);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('addon',$this->addon,true);
		$criteria->compare('date_in',$this->date_in,true);
		$criteria->compare('postcount',$this->postcount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CrmClients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
