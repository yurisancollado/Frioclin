<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rif'); ?>
		<?php echo $form->textField($model,'rif',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'rif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante'); ?>
		<?php echo $form->textField($model,'representante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id'); ?>
		<?php echo $form->textField($model,'usuarios_id'); ?>
		<?php echo $form->error($model,'usuarios_id'); ?>
	</div>
<?php
/* Formulario de Usuario */
?>
	<div class="row">
		<?php echo $form->labelEx($usuario,'username'); ?>
		<?php echo $form->textField($usuario,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($usuario,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($usuario,'password'); ?>
		<?php echo $form->passwordField($usuario,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($usuario,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($usuario,'email'); ?>
		<?php echo $form->textField($usuario,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($usuario,'email'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($usuario,'cliente'); ?>
		<?php echo $form->textField($usuario,'cliente'); ?>
		<?php echo $form->error($usuario,'cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($usuario,'activo'); ?>
		<?php echo $form->dropDownList($usuario,'activo',array('1'=>'Activo','0'=>'Inactivo')); ?>
		<?php echo $form->error($usuario,'activo'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->