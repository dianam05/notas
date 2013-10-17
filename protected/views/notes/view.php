<?php
$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista notas', 'url'=>array('index')),
	array('label'=>'Crear notas', 'url'=>array('create')),
	array('label'=>'Editar notas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminat notas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar notas', 'url'=>array('admin')),
);
?>

<h1>Ver notas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_notebook',
		'nombre',
		'descripcion',
		'fecha_creacion',
	),
)); ?>
