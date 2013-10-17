<?php
$this->breadcrumbs=array(
	'Cuadernos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista cuadernos', 'url'=>array('index')),
	array('label'=>'Administrar cuadernos', 'url'=>array('admin')),
);
?>

<h1>Crear cuaderno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>