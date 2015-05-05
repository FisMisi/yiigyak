<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Register2 form test',
);
?>

<h1>Form test</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register2-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Mezők <span class="required">*</span> jelölve kötelező.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'eletkor'); ?>
		<?php echo $form->textField($model,'eletkor'); ?>
		<?php echo $form->error($model,'eletkor'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'nemzet'); ?>
		<?php echo $form->textField($model,'nemzet'); ?>
		<?php echo $form->error($model,'nemzet'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Elküld'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



