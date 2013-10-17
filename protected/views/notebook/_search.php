<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php //echo $form->textField($model,'fecha_creacion'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
      'model'=>$model,
      'attribute'=>'fecha_creacion',
      'options'=>array(
              'showAnim'=>'fold',
              'dateFormat'=>'yy-mm-dd',
              'gotoCurrent' => true,
              'minDate' => '0',
              'language'=> Yii::app()->getLanguage(),
              'onSelect' => 'js:function(selectedDate) {
                       var option = "minDate";
                       var instance = $(this).data("datepicker");
                       var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                       $("#Event_FechaFin").datepicker("option", option, date);
               }',
     ),
));
                ?>
            
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->