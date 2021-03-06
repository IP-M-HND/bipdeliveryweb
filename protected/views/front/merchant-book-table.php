
<div class="box-grey rounded" style="margin-top:0;">

<form class="forms" id="frm-book" onsubmit="return false;">
<?php echo CHtml::hiddenField('action','bookATable')?>
<?php echo CHtml::hiddenField('currentController','store')?>
<?php echo CHtml::hiddenField('merchant-id',$merchant_id)?>

<div class="section-label">
    <a class="section-label-a">
      <span class="bold" style="background:#fff;">
      <?php echo t("Informacion")?></span>
      <b></b>
    </a>
</div>

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Numero de invitados")?>
   </div>
   <div class="col-md-3 ">
	 <?php echo CHtml::textField('number_guest',''
	  ,array(
	  'class'=>'numeric_only grey-inputs',
	  'required'=>true
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Fecha")?>
   </div>
   <div class="col-md-3 ">
	 <?php echo CHtml::hiddenField('date_booking')?>
	  <?php echo CHtml::textField('date_booking1',''
	  ,array(
	  'class'=>'date_booking grey-inputs',
	  'required'=>true,
	  'data-id'=>'date_booking'
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Time")?>
   </div>
   <div class="col-md-3 ">
	 <?php echo CHtml::textField('booking_time',''
	  ,array(
	  'class'=>'grey-inputs',
	  'required'=>true,
	  ))?>
   </div>
</div> <!--row-->

<div class="section-label">
    <a class="section-label-a">
      <span class="bold" style="background:#fff;">
      <?php echo t("Su Informacion")?></span>
      <b></b>
    </a>
</div>

<?php
$booking_name=''; $email=''; $mobile='';
if ( Yii::app()->functions->isClientLogin()){
	$booking_name=Yii::app()->functions->getClientName() ." ".$_SESSION['kr_client']['last_name'];
	$email=$_SESSION['kr_client']['email_address'];
	$mobile=$_SESSION['kr_client']['contact_phone'];
}
?>

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Name")?>
   </div>
   <div class="col-md-6 ">
	  <?php echo CHtml::textField('booking_name',$booking_name
	  ,array(
	  'class'=>'grey-inputs',
	  'required'=>true,
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Email")?>
   </div>
   <div class="col-md-6 ">
	  <?php echo CHtml::textField('email',$email
	  ,array(
	  'class'=>'grey-inputs',
	  'required'=>true,
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Mobile")?>
   </div>
   <div class="col-md-6 ">
	  <?php echo CHtml::textField('mobile',$mobile
	  ,array(
	  'class'=>'grey-inputs',
	  'required'=>true,
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
   <div class="col-md-3 ">
     <?php echo t("Instrucciones Adicionales")?>
   </div>
   <div class="col-md-6 ">
	  <?php echo CHtml::textArea('booking_notes',''
	  ,array(
	  'class'=>'grey-inputs'
	  ))?>
   </div>
</div> <!--row-->

<div class="row top10">
  <div class="col-md-3 "></div>
  <div class="col-md-6 text-left ">
  <input type="submit" value="<?php echo t("Reservaciones")?>" class="rounded book-table-button green-button inline">
  </div>
</div><!-- row-->

</form>

</div> <!--end box-->
