<?php
try {
define("APPLICATION_PATH",  dirname(__FILE__));
$app  = new Yaf\Application(APPLICATION_PATH . "/../conf/application.ini");
//$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
$app->run();
} catch (Exception $exception) {
    var_dump($exception);
    exit();
}
?>