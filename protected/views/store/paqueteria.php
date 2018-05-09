<?php
$this->renderPartial('/front/banner-paqueteria',array(
   'h1'=>t("Servicio de Paqueteria"),
   'sub_text'=>'19 Avenida SO, 1 y 2 Calle, San Pedro Sula 21104, Honduras'." ".$country,
   'contact_phone'=>'+504 2504-9112',
   'contact_email'=>'info@syscallsystems.com'
));

$fields=yii::app()->functions->getOptionAdmin('contact_field');
if (!empty($fields)){
	$fields=json_decode($fields);
}
?>

<div class="sections section-grey2 section-contact relative">
  <div id="contact-map"></div>

  <div class="container-map">
     <div class="inner">
        <div class="row">
          <img src="/KarenderiaMultipleRestaurant/restomulti/assets/images/maxresdefault.jpg" style="height: 410px;width: 900px;">
        </div> <!--row-->
     </div> <!--inner-->
  </div> <!--container-->

</div> <!--sections-->
