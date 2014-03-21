<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>



<script>
		$('#clientForm').hide();
		$('#Usuario_tipousuario').change(function(){
			if($('#Usuario_tipousuario').val()==1)
				$('#clientForm').hide();
			if($('#Usuario_tipousuario').val()==2)
				$('#clientForm').show();
	});
</script>