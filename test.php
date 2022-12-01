<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';

error_reporting(E_ALL);
error_reporting(E_ERROR | E_PARSE);
//ini_set('display_errors','On');
define('SMARTY_DIR', '/usr/local/lib/php/Smarty-v.e.r/libs/');
//$smarty->debugging_ctrl = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'URL' : 'NONE';
$smarty = new Smarty; // declare object in Smarty 
$smarty = new SmartyBC; // declare object in Smarty 
$smarty->allow_php_templates = true;
$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);

//$smarty->auto_literal = false;
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign('email','spsingh30042002@gmail.com');
$smarty->assign('cust_id' , array(1,2,3,4));
$smarty->assign('cust_name' , array('a','b','c','d'));
$smarty->assign('str1','ab');
$smarty->assign('str2','cd');


$smarty->assign('s1','uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.
');
$smarty->assign('s2','At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.
');

$smarty->assign('Contacts',
        array(
                array(
                        'fax' => '555-222-9876',
                        'email' => 'megha@ucertify.com',
                        'phone' => array('home' => '555-444-3333', 'cell' => '555-111-1234')
                ),
        array('fax' => '555-222-8876',
                'email' => 'pete.gupta@ucertify.com',
                'phone' => array( 'home' => '555-444-8888', 'cell' => '555-111-9999')
                )
        )
);



// Creating array with key value pair 

$smarty->display('template/testing.tpl');
