<?php
$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista notas', 'url'=>array('index')),
	array('label'=>'Crear notas', 'url'=>array('create')),
	array('label'=>'Ver notas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar notas', 'url'=>array('admin')),
);
?>

<h1>Editar notas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>