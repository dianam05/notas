<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notebook-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'id_user',array('value'=>1)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->hiddenField($model,'fecha_creacion',array('value'=>date('Y-m-d H:i:s'))); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->