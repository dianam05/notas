<?php
$this->breadcrumbs=array(
	'Notas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista notas', 'url'=>array('index')),
	array('label'=>'Adminsitrar notas', 'url'=>array('admin')),
);
?>

<h1>Crear notas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>