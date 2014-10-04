<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle=;
$this->;

?>

<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/iti.css" .../>
<div>用こそ</div>

 <p>ログイン専用ページです</p>

 <div id="forrrm">
 <?php
 $form=$this->beginWidget(,array(
	'id',
	,
	,
	));
 ?>

 <p>データを入力してください。</p>
 <p>ＩＤ</p>
  <?php  echo $form->labelEx($model,'id'); ?>
  <?php  echo $form->textField($model,'id'); ?>
  <?php  echo $form->error($model,'id'); ?>
 <p>パスワード</p>
  <?php  echo $form->labelEx($model,'pass'); ?>
  <?php  echo $form->passwordField($model,'pass'); ?>
  <?php  echo $form->error($model,'pass'); ?>
 <p>認証</p>
  <?php echo CHtml::submitButton('Login'); ?> 
 <?php $this->endWidget(); ?> 
