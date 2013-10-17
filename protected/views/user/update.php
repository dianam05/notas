<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Editar Usuario  <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>