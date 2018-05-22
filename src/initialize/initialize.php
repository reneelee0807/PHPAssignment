<?php
// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
//$_SERVER['REMOTE_ADDR']. find ara / home ip address than if / else to define


define('SITE_ROOT', 'H:'.DS.'webdev2016'.DS.'www'.DS.'www'.DS.'ass2');

defined('Database_PATH') ? null : define('Database_PATH', SITE_ROOT.DS.'src'.DS.'database');
defined('Interface_PATH') ? null : define('Interface_PATH', SITE_ROOT.DS.'src'.DS.'interface');
defined('Class_PATH') ? null : define('Class_PATH', SITE_ROOT.DS.'src'.DS.'class');
defined('Function_PATH') ? null : define('Function_PATH', SITE_ROOT.DS.'src'.DS.'function');
defined('Session_PATH') ? null : define('Session_PATH', SITE_ROOT.DS.'src'.DS.'session');
//defined('Model_PATH') ? null : define('Model_PATH', SITE_ROOT.DS.'src'.DS.'Models');
defined('Layout_PATH') ? null : define('Layout_PATH', SITE_ROOT.DS.'src'.DS.'layout');



/*load database*/
//require_once(Database_PATH . DS . 'MySQLDB.php');
require_once(Database_PATH . DS .'db.php');
require_once(Database_PATH . DS . 'IDatabase.php');
require_once(Database_PATH . DS . 'MySQLResult.php');
require_once(Database_PATH . DS . 'IQuery.php');
require_once(Database_PATH . DS . 'ICreateTable.php');
//require_once(Interface_PATH . DS .'interfaces.php');

require_once(Interface_PATH . DS .'IMyInterfaces.php');

//load basic function
require_once  (Function_PATH . DS . 'myFunctions.php');
require_once (Session_PATH . DS. 'session.php');



/*load database*/

//include_once(Model_PATH.DS.'logout.php');
//load interface
/* require_once  (Interface_PATH . DS . 'ISave.php');
require_once  (Interface_PATH . DS . 'IDelete.php');
require_once  (Interface_PATH . DS . 'IUpdate.php'); */
/* require_once  (Interface_PATH . DS . 'IPost.php');
require_once  (Interface_PATH . DS . 'ITag.php');*/
require_once  (Interface_PATH . DS . 'IFinalize.php');
require_once  (Interface_PATH . DS . 'IDisplay.php'); 
//load language parser
//require_once  (Function_PATH . DS . 'Language' .DS. 'LanguageParser.php');
// require_once  (Function_PATH . DS . 'Layout' .DS. 'LangSetting.php');

//load classes
//require_once(Class_PATH . DS . 'session.php');
//require_once(Class_PATH . DS . 'database_object.php');


