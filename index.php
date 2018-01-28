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
// määrame reaalväärtused malli elementidele
$mainTmpl->set('lang', 'et');
$mainTmpl->set('page_title', 'Lehe pealkiri');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
// katsetame menüü loomist
require_once 'menu.php';
$mainTmpl->set('content', 'Lehe sisu');
echo $mainTmpl->parse();
// kontrollime kontandite olemasolu
$link =  '';
$http->addToLink($link, 'control', 'login');
$http->addToLink($link, 'username', 'test')