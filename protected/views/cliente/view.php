<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'CrearCliente', 'url'=>array('create')),
	array('label'=>'Modificar Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Cliente: <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rif',
		'razonSocial',
		'nit',
		'representante',
		'numeroContacto',
		'id',
		'codigo',
		'usuarios_id',
	),
)); ?>
