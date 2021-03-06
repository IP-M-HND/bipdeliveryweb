<?php
$patern="cuisine|signup|signin|merchantsignup|contact|searcharea|paqueteria";
$patern.="|menu|checkout|paymentoption|receipt|logout|paypalinit|paypalverify";
$patern.="|OrderHistory|Profile|howItWork|forgotPassword|PageSetlanguage|stripeInit";
$patern.="|MercadoInit|RenewSuccesful|Browse|PaylineInit|Paylineverify|sisowinit";
$patern.="|PayuInit|BankDepositverify|AutoResto|AutoStreetName|AutoCategory|PayseraInit";
$patern.="|AutoFoodName|Confirmorder|Paymentbcy|Bcyinit|EpayBg|EpyInit";
$patern.="|GuestCheckout|MerchantSignupSelection|MerchantSignupinfo|CancelWithdrawal";
$patern.="|ATZinit|DepositVerify|Verification|Map|GoogleLogin|AddressBook";
$patern.="|AutoZipcode|AutoPostAddress|Item|Ty|EmailVerification|MyPoints|BtrInit|setlanguage";
$patern.="|mollieinit|mollieprocess|home|molliewebhook";
$patern.="|ip8init|ipay88verify|ipay88receiver";
$patern.="|monerisinit|confirmorder|rzrinit|rzrverify|acceptorder|declineorder|cart|restaurant";
$patern.="|voguepaynotify|voguepaysuccess|voguepayfailed|voginit|vognotify|voginit|vogsuccess";
$patern=strtolower($patern);

return array(
	'name'=>'Bip Delivery',

	'defaultController'=>'store',

	'import'=>array(
		'application.models.*',
		'application.models.admin.*',
		'application.components.*',
		'application.vendor.*',
		'application.modules.pointsprogram.components.*',
		'application.modules.mobileapp.components.*',
		'application.modules.merchantapp.components.*',
		'application.modules.driver.components.*',
	),

	'language'=>'en',

	'modules'=>array(
		'exportmanager'=>array(
		  'require_login'=>true
		),
		'mobileapp'=>array(
		  'require_login'=>true
		),
		'pointsprogram'=>array(
		  'require_login'=>true
		),
		'merchantapp'=>array(
		  'require_login'=>true
		),
		'driver'=>array(
		  'require_login'=>true
		),
		'singlerestaurant'=>array()
	),

	'components'=>array(
	    'request'=>array(
	        //'class' => 'application.components.HttpRequest',
            'enableCsrfValidation'=>false,
        ),
        'session' => array(
	        'timeout' => 86400,
	    ),
	    'urlManager'=>array(
	        'class' => 'UrlManager',
		    'urlFormat'=>'path',
		    'showScriptName'=>false,
		    'rules'=>array(
		        '' => 'store/index',
		        '<action:('.$patern.')>' => 'store/<action>',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
		        '<controller:\w+>'=>'<controller>/index',
		        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		        //'<lang:\w+>/<module:\w+>/<controller:\w+>/<action:\w+>/'=>'<module>/<controller>/<action>',
		    )
		),

		// if ($_ENV["MYSQL_HOST"] =! is_null) {
    //
		// 	# code...
		// 	'db'=>array(
		// 	    'class'            => 'CDbConnection' ,
		// 		'connectionString' => 'mysql:host='.$_ENV["MYSQL_HOST"].';dbname='.$_ENV["MYSQL_DB"],
		// 		'emulatePrepare'   => true,
		// 		'username'         => $_ENV["MYSQL_USER"],
		// 		'password'         => $_ENV["MYSQL_PASS"],
		// 		'charset'          => 'utf8',
		// 		'tablePrefix'      => 'mt_',
		//     ),
    //
		// }else {
    //
		// 	'db'=>array(
		// 	    'class'            => 'CDbConnection' ,
		// 		'connectionString' => 'mysql:host=localhost;dbname=karenderia',
		// 		'emulatePrepare'   => true,
		// 		'username'         => 'root',
		// 		'password'         => '',
		// 		'charset'          => 'utf8',
		// 		'tablePrefix'      => 'mt_',
		//     ),
    //
		// }
		//test xampp

		// base de datos externa: host=mysql.hostinger.es,
		// nombre base de datos u169589070_krdia,
		// usuario u169589070_root,
		// password delivery18
		'db'=>array(
			'class'            => 'CDbConnection' ,
		'connectionString' => 'mysql:host=mysql.hostinger.es;dbname=u169589070_krdia',
		'emulatePrepare'   => true,
		'username'         => 'u169589070_root',
		'password'         => 'Delivery18#',
		'charset'          => 'utf8',
		'tablePrefix'      => 'mt_',
		),

	    'functions'=> array(
	       'class'=>'Functions'
	    ),
	    'validator'=>array(
	       'class'=>'Validator'
	    ),
	    'widgets'=> array(
	       'class'=>'Widgets'
	    ),

	    'Smtpmail'=>array(
	        'class'=>'application.extension.smtpmail.PHPMailer',
	        'Host'=>"YOUR HOST",
            'Username'=>'YOUR USERNAME',
            'Password'=>'YOUR PASSWORD',
            'Mailer'=>'smtp',
            'Port'=>587, // change this port according to your mail server
            'SMTPAuth'=>true,
            'ContentType'=>'UTF-8',
            //'SMTPSecure'=>'ssl'// tls
	    ),

	    'GoogleApis' => array(
	         'class' => 'application.extension.GoogleApis.GoogleApis',
	         'clientId' => '',
	         'clientSecret' => '',
	         'redirectUri' => '',
	         'developerKey' => '',
	    ),
	),
);

function statusList()
{
	return array(
	 'publish'=>Yii::t("default",'Publish'),
	 'pending'=>Yii::t("default",'Pending for review'),
	 'draft'=>Yii::t("default",'Draft')
	);
}

function clientStatus()
{
	return array(
	  'pending'=>Yii::t("default",'pending for approval'),
	 'active'=>Yii::t("default",'active'),
	 'suspended'=>Yii::t("default",'suspended'),
	 'blocked'=>Yii::t("default",'blocked'),
	 'expired'=>Yii::t("default",'expired')
	);
}

function paymentStatus()
{
	return array(
	 'pending'=>Yii::t("default",'pending'),
	 'paid'=>Yii::t("default",'paid'),
	 'draft'=>Yii::t("default",'Draft')
	);
}

function dump($data=''){
    echo '<pre>';print_r($data);echo '</pre>';
}
