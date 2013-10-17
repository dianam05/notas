<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textHidden($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_notebook'); ?>
		<?php echo $form->textField($model,'id_notebook'); ?>
		<?php echo $form->error($model,'id_notebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->