<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 28/01/2018
 * Time: 16:04
 */
//kaustade ja failide konstantsed nimetused
define('MODEL_DIR', 'model/');
define('VIEW_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', 'lib/');
define('DEFAULT_CONTROL', 'default'); // vaikimis kasutatav kontroller
// nõuame abifunktisoonide faili kasutamist
require_once LIB_DIR.'utils.php';
// nõuame vajalike failide kasutamist
require_once MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
require_once MODEL_DIR.'linkobject.php';
// loome objektid, mis oleks vaja pidevalt kasutada
$http = new linkobject();
