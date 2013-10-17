<?php
$this->breadcrumbs=array(
	'Notas',
);

$this->menu=array(
	array('label'=>'Crear notas', 'url'=>array('create')),
	array('label'=>'Administrar notas', 'url'=>array('admin')),
);
?>

<h1>Notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
