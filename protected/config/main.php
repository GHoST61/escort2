<?phpreturn array(	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',	'name'=>'ESC2',	'preload'=>array('log'),	'import'=>array(		'application.models.*',		'application.components.*',	),	'modules'=>array(	),	'components'=>array(		'user'=>array(			'allowAutoLogin'=>true,		),		'db'=>array(			'connectionString' => 'mysql:host=localhost;dbname=testdrive',			'emulatePrepare' => true,			'username' => 'root',			'password' => '',			'charset' => 'utf8',		),		'errorHandler'=>array(			'errorAction'=>'site/error',		),		'log'=>array(			'class'=>'CLogRouter',			'routes'=>array(				array(					'class'=>'CFileLogRoute',					'levels'=>'error, warning',				),			),		),	),	'params'=>array(		'adminEmail'=>'webmaster@example.com',	),);