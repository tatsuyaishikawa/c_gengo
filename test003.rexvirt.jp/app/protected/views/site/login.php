<?php
 /*@var $this SiteController*/
 /*@var $model User*/
 /*@var $form CActiveForm*/

 $this->pageTitle=Yii:app()->name .;
 $this->;
?>

<div id=""> ユーザログイン画面</div>
<?php
	$form=$this->beginWidget('CActiveForm',array(
	  'id'=>'',
	  ''=>,
	  ''=>array(
	   ''=>,
	 ),
	));
?>

 <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css"  /> 

<div id="back">
  <div id="iti">
   <div id="yon">
  図書管理システム
   </div>
  <div id="kensaku">
   <img id="gazou" src="" >
   <div id="san">
   ログイン
   </div>
    <div id="container">
	<?php  echo $form->labelEx($model,'id'); ?>
	<?php  echo $form->textField($model,'id'); ?>
	<?php  echo $form->error($model,'id'); ?>
	<?php  echo $form->labelEx($model,'pass'); ?>
	<?php  echo $form->passwordField($model,'pass'); ?>
	<?php  echo $form->error($model,'pass'); ?>
    </div>

    <div id="footer">
	<?php echo CHtml::submitButton('認証'); ?>
	<?php echo CHtml::resetButton('消去'); ?>
    </div>

     <a href="shinki.php">新規ユーザ登録</a>
     <a href="login_admin.php">管理者としてログイン</a>

<?php $this->endWidget(); ?>
</div>
