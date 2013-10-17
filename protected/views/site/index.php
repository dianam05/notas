<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1> Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Enhorabuena! Ha creado correctamente la aplicación Yii.</p>

<p> Usted puede cambiar el contenido de esta página mediante la modificación de los dos archivos siguientes: </p>
<ul>
	<li>Ver archivo: <code><?php echo __FILE__; ?></code></li>
	<li>Archivo de formato: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p> Para más detalles sobre cómo desarrollar aún más esta aplicación, por favor lea
los <a href="http://www.yiiframework.com/doc/"> documentación </a>.
No dude en preguntar en el foro <a href="http://www.yiiframework.com/forum/">foro </a>,
si tiene alguna pregunta. </p>




