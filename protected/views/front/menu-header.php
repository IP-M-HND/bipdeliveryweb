
<div class="mobile-banner-wrap relative">
 <div class="layer"></div>
 <img class="mobile-banner" src="<?php echo empty($background)?assetsURL()."/images/b-2-mobile.jpg":uploadURL()."/$background"; ?>">
</div>

<div id="parallax-wrap" class="parallax-search parallax-menu"
data-parallax="scroll" data-position="top" data-bleed="10"
data-image-src="<?php echo empty($background)?assetsURL()."/images/b-2.jpg":uploadURL()."/$background"; ?>">

<div class="search-wraps center menu-header">

      <img class="logo-medium bottom15" src="<?php echo $merchant_logo;?>">

	  <div class="mytable">
	     <div class="mycol hidden">
	        <div class="rating-stars " data-score="<?php echo $ratings['ratings']?>"></div>
	     </div>
	     <div class="mycol hidden">
	        <p class="small">
	        <a href="javascript:;"class="goto-reviews-tab">
	        <?php echo $ratings['votes']." ".t("Reviews")?>
	        </a>
	        </p>
	     </div>
	     <div class="mycol">
	        <?php echo FunctionsV3::merchantOpenTag($merchant_id)?>
	     </div>
	     <div class="mycol hidden">
	        <p class="small"><?php echo t("Orden Minima").": ".FunctionsV3::prettyPrice($minimum_order)?></p>
	     </div>
	   </div> <!--mytable-->

	<h1><?php echo clearString($restaurant_name)?></h1>

	<?php if(!empty($social_facebook_page) || !empty($social_twitter_page) || !empty($social_google_page)):?>
	<ul class="merchant-social-list">
	 <?php if(!empty($social_google_page)):?>
	 <li>
	   <a href="<?php echo FunctionsV3::prettyUrl($social_google_page)?>" target="_blank">
	    <i class="ion-social-googleplus"></i>
	   </a>
	 </li>
	 <?php endif;?>

	 <?php if(!empty($social_twitter_page)):?>
	 <li>
	   <a href="<?php echo FunctionsV3::prettyUrl($social_twitter_page)?>" target="_blank">
	   <i class="ion-social-twitter"></i>
	   </a>
	 </li>
	 <?php endif;?>

	 <?php if(!empty($social_facebook_page)):?>
	 <li>
	   <a href="<?php echo FunctionsV3::prettyUrl($social_facebook_page)?>" target="_blank">
	   <i class="ion-social-facebook"></i>
	   </a>
	 </li>
	 <?php endif;?>

	</ul>
	<?php endif;?>

	<p><i class="fa fa-map-marker"></i> <?php echo $merchant_address?></p>
	<p class="small"><?php echo FunctionsV3::displayCuisine($cuisine);?></p>
	<p><?php echo FunctionsV3::getFreeDeliveryTag($merchant_id)?></p>

	<?php if ( getOption($merchant_id,'merchant_show_time')=="yes"):?>
	<p class="small">
	<?php echo t("Merchant Current Date/Time").": ".
	Yii::app()->functions->translateDate(date('F d l')." ".timeFormat(date('c'),true));?>
	</p>
	<?php endif;?>

	<?php if (!empty($merchant_website)):?>
	<p class="small">
	<?php echo t("Website").": "?>
	<a target="_blank" href="<?php echo FunctionsV3::fixedLink($merchant_website)?>">
	  <?php echo $merchant_website;?>
	</a>
	</p>
	<?php endif;?>

</div> <!--search-wraps-->

</div> <!--parallax-container-->
