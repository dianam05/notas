<?php
$this->breadcrumbs=array(
	'Cuadernos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista cuaderno', 'url'=>array('index')),
	array('label'=>'Crear cuaderno', 'url'=>array('create')),
	array('label'=>'Ver cuaderno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar cuaderno', 'url'=>array('admin')),
);
?>

<h1>Update notebook <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>