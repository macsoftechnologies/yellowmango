<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


$template['active_template']='login';



//template 1

$template['login']['template']='login';

$template['login']['regions']=array('title');

$template['login']['parser']='parser';

$template['login']['parser_method']='parse';

$template['login']['parse_template']=FALSE;


$template['userlogin']['template']='login';

$template['userlogin']['regions']=array('title');

$template['userlogin']['parser']='parser';

$template['userlogin']['parser_method']='parse';

$template['userlogin']['parse_template']=FALSE;



$template['register']['template']='register';

$template['register']['regions']=array('title');

$template['register']['parser']='parser';

$template['register']['parser_method']='parse';

$template['register']['parse_template']=FALSE;



$template['userlogin']['template']='userlogin';

$template['userlogin']['regions']=array('title');

$template['userlogin']['parser']='parser';

$template['userlogin']['parser_method']='parse';

$template['userlogin']['parse_template']=FALSE;



$template['cart']['template']='cart';

$template['cart']['regions']=array('title');

$template['cart']['parser']='parser';

$template['cart']['parser_method']='parse';

$template['cart']['parse_template']=FALSE;



//template 3 Static

$template['stat']['template']='stat';

$template['stat']['regions']=array(

 'header',

 'title',

 'menu',

 'content',

 'footer',

);

$template['stat']['parser']='parser';

$template['stat']['parser_method']='parse';

$template['stat']['parse_template']=FALSE;



//template 4 Dashboard

$template['dashboard']['template']='dashboard';

$template['dashboard']['regions']=array(

 'header',

 'title',

 'menu',
 
 'leftmenu',

 'latest',

 'dash_menu',

 'content',

 'footer',

);

$template['dashboard']['parser']='parser';

$template['dashboard']['parser_method']='parse';

$template['dashboard']['parse_template']=FALSE;

// userdashboard

$template['userdashboard']['template']='userdashboard';

$template['userdashboard']['regions']=array(

 'header',

 'title',

 'menu',
 
 'leftmenu',

 'latest',

 'dash_menu',

 'content',

 'footer',

);

$template['userdashboard']['parser']='parser';

$template['userdashboard']['parser_method']='parse';

$template['userdashboard']['parse_template']=FALSE;


//Front end
$template['front']['template']='front';

$template['front']['regions']=array(

 'header',

 'title',

 'menu',

 'latest',

 'content',

 'footer',

);

$template['front']['parser']='parser';

$template['front']['parser_method']='parse';

$template['front']['parse_template']=FALSE;


$template['invoice']['template']='invoice';

$template['invoice']['regions']=array(

 'header',

 'title',

 'menu',

 'latest',

 'content',

 'footer',

);

$template['invoice']['parser']='parser';

$template['invoice']['parser_method']='parse';

$template['invoice']['parse_template']=FALSE;

?>