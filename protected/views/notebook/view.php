<?php
$this->breadcrumbs=array(
	'Notebooks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista notebook', 'url'=>array('index')),
	array('label'=>'Create notebook', 'url'=>array('create')),
	array('label'=>'Update notebook', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete notebook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage notebook', 'url'=>array('admin')),
);
?>

<h1>View notebook #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'nombre',
		'descripcion',
		'fecha_creacion',
	),
)); ?>
