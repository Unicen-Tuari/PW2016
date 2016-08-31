<?php /* Smarty version Smarty-3.1.14, created on 2016-08-30 18:43:19
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2701757c5fdf7f3a4f0-41488610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1472592673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2701757c5fdf7f3a4f0-41488610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57c5fdf8004251_92903070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5fdf8004251_92903070')) {function content_57c5fdf8004251_92903070($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web 2</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/site.css" rel="stylesheet">
    <style>
    body {
      padding-top: 50px;
    }
    .starter-template {
      padding: 40px 15px;
      text-align: center;
    }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Practico 4</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['active']->value=='materias'){?>class="active"<?php }?>><a href="index.php?action=materias">Materias</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['active']->value=='alumnos'){?>class="active"<?php }?>><a href="index.php?action=alumnos">Alumnos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php }} ?>