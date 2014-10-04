<?php
/* @var $this SayController */
/* @var $model Books */
/* @var $form  Form*/

/* this->pageTitle=Yii::app()->name . ' - ?';*/
$this->breadcrumbs=array(
	'Say',
);
?>

<?php 
 $form=$this->beginWidget('CActiveForm',array(
	'id'=>'login-form',
	,
	,
	));
?>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/iti.css" .../>
<div id="back">
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<p>ユーザを追加する</p>
<p>ユーザを削除する</p>
<p><?php echo $today; ?></p>
<p><?php echo $iti; ?></p>
</div>

<?php  
 /*データベースとの接続を開始*/
 /*booksテーブルに接続*/

?>
 <!-- 戻る　ボタンとログアウト -->
 <?php echo $form->labelEx($model,'book_id'); ?>
 <?php echo $form->textField($model,'book_id'); ?>
 <?php echo $form->error($model,'book_id'); ?>
 <?php echo $form->labelEx($model,'book_title'); ?>
 <?php echo $form->textField($model,'book_title'); ?>
 <?php echo $form->error($model,'book_title'); ?>
 <?php echo $form->labelEx($model,'category'); ?>
 <?php echo $form->textField($model,'category'); ?>
 <?php echo $form->error($model,'category'); ?>
 <?php echo $form->labelEx($model,'author'); ?>
 <?php echo $form->textField($model,'author'); ?>
 <?php echo $form->error($model,'author'); ?>
 
 <?php echo CHtml::submitButton('検索'); ?>
 <?php echo CHtml::resetButton('消去'); ?>
 <?php echo CHtml::Button('戻る'); ?>
 <?php echo CHtml::Button('ログアウト'); ?>
<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
<?php $this->endWidget(); ?>
