<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'Login';
//
$route['pessoa'] = 'Pessoa';
$route['recebe_dados'] = 'Pessoa/recebe_dados';
$route['get_pessoa'] = 'Pessoa/get_pessoa';
$route['listar'] = 'Listar';
$route['login'] = 'Login';
$route['home'] = 'Home';

