<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Usuario', 'url'=>array('index')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>