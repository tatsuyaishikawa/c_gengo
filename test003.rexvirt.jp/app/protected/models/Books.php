<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property integer $book_id
 * @property string $book_title
 * @property string $caterogy
 * @property string $author
 * @property integer $status
 */
class Books extends CActiveRecord
{

	public $hoge_type;public function getHogeListOptions()
	{
	 return array(
	 0=>'ji',
	 1=>'iji',
	 2=>'fsd',
	 );
	}
 
	public function attributeLabels()
	{
		return array(
			'book_id'=>'書籍ＩＤ',
			'book_title'=>'題名',
			'category'=>'分類',
			'author'=>'著者',
			'status'=>'貸し出し状況',
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Books the static model class
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
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('book_title','required'),
			array('book_title','length','max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('book_id, book_title, caterogy, author, status','safe','on'=>'search'),
			array('hoge_type','required'),
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
			'book_id' => 'Book',
			'book_title' => 'Book Title',
			'caterogy' => 'Caterogy',
			'author' => 'Author',
			'status' => 'Status',
			'hoge_type'=>'hogetype',
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

		$criteria->compare('book_id',$this->book_id);
		$criteria->compare('book_title',$this->book_title,true);
		$criteria->compare('caterogy',$this->caterogy,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
