<?php

class ItiranController extends Controller
{
	public $layout='/layouts/book',$items;

	public function actionIndex()
	{
	 $model=new Books;
	 $form=new CForm('application.views.itiran.form',$model);
	
	 if(isset($_POST['Books']) && $form->validate()){
	  $this->redirect(array('itiran/jiji'));
	 }  else{
		$this->render('index',array('form'=>$form));
	 }
	}

	public function actionLogout()
	{
	$this->render('logout');
	}
	
	public function __construct()
	{
	 $this->items=array();
	}

	public function add_books($books)
	{
	 array_push($this->items,$books);
	}

	public function actionAdd_to_cart()
	{
	 $books=Books::model()->findByPk($_POST['book_id']);
	 $books=$this->find_cart();
	 $books->add_books($books);

	 $this->render('add_to_cart',array(
		'cart'=>$books,
		));
	}

	public function attributeLabels()
	{
	 return array(
	 	'book_id'=>'id',
	 	'book_title'=>'title',
	 	'category'=>'category',
	 	'author'=>'author',
	 	'status'=>'status',
	 ) 
	}

	public function search()
	{
	 $yuza=new CDbCriteria;
	
 	 $yuza->compare();	
 	 $yuza->compare();	
 	 $yuza->compare();	
 	 $yuza->compare();	
 	 $yuza->compare();	
	 return new CActiveDataProvider();
	}
	
	public function find_cart()
	{
	 if(Yii::app()->session['cart']==NULL){
		Yii:app()->session['cart']=new Books();
	 }
	 return Yii:app()->session['cart'];
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
