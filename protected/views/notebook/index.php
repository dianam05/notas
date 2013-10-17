<?php
$this->breadcrumbs=array(
	'Cuadernos',
);

$this->menu=array(
	array('label'=>'Crear cuaderno', 'url'=>array('create')),
	array('label'=>'Administrar cuaderno', 'url'=>array('admin')),
);
?>

<h1>Cuadernos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
