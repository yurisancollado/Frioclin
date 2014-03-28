<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
		
	)
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model,$cliente)); ?>

	<div class="row">
		<?php echo $form->labelEx($cliente,'rif'); ?>
		<?php echo $form->textField($cliente,'rif',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($cliente,'rif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($cliente,'razonSocial'); ?>
		<?php echo $form->textField($cliente,'razonSocial',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($cliente,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($cliente,'nit'); ?>
		<?php echo $form->textField($cliente,'nit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($cliente,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($cliente,'representante'); ?>
		<?php echo $form->textField($cliente,'representante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($cliente,'representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($cliente,'numeroContacto'); ?>
		<?php echo $form->textField($cliente,'numeroContacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($cliente,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($cliente,'codigo'); ?>
		<?php echo $form->textField($cliente,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($cliente,'codigo'); ?>
	</div>
	<br/>
	<h3>Datos del Sistema</h3>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	

<!--<div class="row">
		<?php echo $form->labelEx($model,'cliente'); ?>
		<?php echo $form->textField($model,'cliente'); ?>
		<?php echo $form->error($model,'cliente'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->dropDownList($model,'activo',array('1'=>'Activo','0'=>'Inactivo')); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>
	 
	<?php echo $form->hiddenField($model, 'tipousuario',array('value'=>'2')); ?>

	




	


	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->