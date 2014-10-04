<?php
/* @var $this BooksController */
/* @var $model Books */
/* @var $form CActiveForm */
?>
<?php
 return array('title'=>'input',
	'elements'=>array(
	 'book_title'=>array(
	 'type'=>'text',
	 ),

	 'category'=>array(
	 'type'='text',
	 ),

	 'author'=>array(
	 'type'='text',
	 'maxlength'=>20,
	 ),

	 'status'=>array(
	 'type'='integer',
	 ),

	 'hoge_type'=>array(
	 'type'=>'dropdownlist',
	 'items'=>Books::model()->getHogeListOptions(),
	 ),
	),

 'buttons'=>array(
  'login'=>array(
  'type'=>'submit',
  'label'=>'jiji',
  ),
 ),
 );
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'books-form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'book_id'); ?>
		<?php echo $form->textField($model,'book_id'); ?>
		<?php echo $form->error($model,'book_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_title'); ?>
		<?php echo $form->textField($model,'book_title'); ?>
		<?php echo $form->error($model,'book_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caterogy'); ?>
		<?php echo $form->textField($model,'caterogy'); ?>
		<?php echo $form->error($model,'caterogy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author'); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hoge_type'); ?>
		<?php echo $form->textField($model,'hoge_type'); ?>
		<?php echo $form->error($model,'hoge_type'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
