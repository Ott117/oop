<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 28/01/2018
 * Time: 16:00
 */
require_once 'conf.php';
// loome peamalli objekti template klassist
$mainTmpl = new template('main');
// lubame kontrollerite haldust
require_once 'control.php';
// määrame reaalväärtused malli elementidele
$mainTmpl->set('lang', 'et');
$mainTmpl->set('page_title', 'Lehe pealkiri');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
// katsetame menüü loomist
require_once 'menu.php';
echo $mainTmpl->parse();
// kontrollime control sisu
echo $http->get('control');