<?php
 /* @var $cont SayController*/
 /* @var $form Books*/
 /* @var $mode Form*/
?>
 <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/iti.css" .../>

 <div id="header">
 </div>

 <?php 
 $this->widget('zii.widgets.CDetailView',array(
	 'data'=>$model,
	 'attributes'=>array(
		'book_id',
		'book_title',
		'category',
		'author',
		'status',
	  ),
	));
 
 ?>
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
 <div id="container">
  <?php echo CHtml::link("ログアウト",array("logout")); ?>
 </div>
 
 <div id="footer">
  <?php 
  echo CHtml::submitButton('カートに入れる',array(
		'type'=>'post',
		'submit'=>Yii:app()->createUrl($this->id.'/add_to_cart'),
		'params'=>array(
			"id"=>$data->id,
		)
	       )
	      );
  ?>
 </div>
