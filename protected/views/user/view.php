<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista usuario', 'url'=>array('index')),
	array('label'=>'Crear usuario', 'url'=>array('create')),
	array('label'=>'Editar usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar usiario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar user', 'url'=>array('admin')),
);
?>

<h1>Ver usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
	),
)); ?>
