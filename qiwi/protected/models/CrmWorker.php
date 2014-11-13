<?php

/**
 * This is the model class for table "crm_worker".
 *
 * The followings are the available columns in table 'crm_worker':
 * @property integer $id
 * @property integer $id_salon
 * @property integer $id_branch
 * @property integer $phone
 * @property string $password
 * @property string $name
 * @property string $service
 * @property integer $post_count
 * @property integer $count
 * @property integer $schedule
 * @property string $addon
 * @property string $passport
 */
class CrmWorker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'crm_worker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_salon, id_branch, phone, name', 'required'),
			array('id_salon, id_branch, phone, post_count, count, schedule', 'numerical', 'integerOnly'=>true),
			array('password, name', 'length', 'max'=>200),
			array('service, addon', 'length', 'max'=>1000),
			array('passport', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_salon, id_branch, phone, password, name, service, post_count, count, schedule, addon, passport', 'safe', 'on'=>'search'),
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
			'id_salon' => 'Id Salon',
			'id_branch' => 'Id Branch',
			'phone' => 'Phone',
			'password' => 'Password',
			'name' => 'Name',
			'service' => 'Service',
			'post_count' => 'Post Count',
			'count' => 'Count',
			'schedule' => 'Schedule',
			'addon' => 'Addon',
			'passport' => 'Passport',
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
		$criteria->compare('id_salon',$this->id_salon);
		$criteria->compare('id_branch',$this->id_branch);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('service',$this->service,true);
		$criteria->compare('post_count',$this->post_count);
		$criteria->compare('count',$this->count);
		$criteria->compare('schedule',$this->schedule);
		$criteria->compare('addon',$this->addon,true);
		$criteria->compare('passport',$this->passport,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CrmWorker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
