<?php

/**
 * This is the model class for table "main".
 *
 * The followings are the available columns in table 'main':
 * @property integer $id
 * @property integer $id_salon
 * @property integer $id_fil
 * @property integer $id_master
 * @property integer $id_jobs
 * @property string $date_out
 * @property integer $commit
 * @property string $date_commit
 * @property string $description
 * @property string $date_in
 * @property string $account_doc
 */
class Main extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'main';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_salon, id_fil, id_master, id_jobs, commit', 'numerical', 'integerOnly'=>true),
			array('date_out, date_commit, description, date_in, account_doc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_salon, id_fil, id_master, id_jobs, date_out, commit, date_commit, description, date_in, account_doc', 'safe', 'on'=>'search'),
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
			'id_fil' => 'Id Fil',
			'id_master' => 'Id Master',
			'id_jobs' => 'Id Jobs',
			'date_out' => 'Date Out',
			'commit' => 'Commit',
			'date_commit' => 'Date Commit',
			'description' => 'Description',
			'date_in' => 'Date In',
			'account_doc' => 'Account Doc',
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
		$criteria->compare('id_fil',$this->id_fil);
		$criteria->compare('id_master',$this->id_master);
		$criteria->compare('id_jobs',$this->id_jobs);
		$criteria->compare('date_out',$this->date_out,true);
		$criteria->compare('commit',$this->commit);
		$criteria->compare('date_commit',$this->date_commit,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date_in',$this->date_in,true);
		$criteria->compare('account_doc',$this->account_doc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Main the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
