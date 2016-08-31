<?php /* Smarty version Smarty-3.1.14, created on 2016-08-30 19:16:49
         compiled from ".\templates\materias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321657c5fdf7ed99b1-71266653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63feed606731012a939e4196df48cdf80ff9cb8e' => 
    array (
      0 => '.\\templates\\materias.tpl',
      1 => 1472595400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321657c5fdf7ed99b1-71266653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57c5fdf7f26294_98171732',
  'variables' => 
  array (
    'materias' => 0,
    'materia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5fdf7f26294_98171732')) {function content_57c5fdf7f26294_98171732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('active'=>"materias"), 0);?>


	<div class="container">


	<h1>Lista de Materias</h1>


	<?php if (isset($_smarty_tpl->tpl_vars['materias']->value)){?>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['materia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['materia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['materias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['materia']->key => $_smarty_tpl->tpl_vars['materia']->value){
$_smarty_tpl->tpl_vars['materia']->_loop = true;
?>
				<li><a href="index.php?action=materia&id=<?php echo $_smarty_tpl->tpl_vars['materia']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['materia']->value["nombre"];?>
</a></li>
			<?php } ?>
		</ul>
	<?php }?>
	</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>