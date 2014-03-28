<?php
/* @var $this ClienteController */
/* @var $cliente Cliente */
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
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true, )

)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($cliente); ?>

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

	<div class="row">
		<?php echo $form->labelEx($cliente,'usuarios_id'); ?>
		<?php echo $form->textField($cliente,'usuarios_id'); ?>
		<?php echo $form->error($cliente,'usuarios_id'); ?>
	</div>
<?php
/* Formulario de Usuario */
?>
	


<?php $this->endWidget(); ?>

</div><!-- form -->