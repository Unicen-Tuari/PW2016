<?php /* Smarty version Smarty-3.1.14, created on 2016-08-30 19:27:49
         compiled from ".\templates\alumnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2087457c60865cddc47-96085902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daf4f73a4bdac5bca2b511b9955cb27e89d7878c' => 
    array (
      0 => '.\\templates\\alumnos.tpl',
      1 => 1472595459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2087457c60865cddc47-96085902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alumnos' => 0,
    'alumno' => 0,
    'materia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57c60865d21645_40011022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c60865d21645_40011022')) {function content_57c60865d21645_40011022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('active'=>"alumnos"), 0);?>


	<div class="container">


	<h1>Lista de Alumnos</h1>


	<?php if (isset($_smarty_tpl->tpl_vars['alumnos']->value)){?>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['alumno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alumno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alumnos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->key => $_smarty_tpl->tpl_vars['alumno']->value){
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['alumno']->value["nombre"];?>

					<ul>
					<?php  $_smarty_tpl->tpl_vars['materia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['materia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alumno']->value["Materias"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['materia']->key => $_smarty_tpl->tpl_vars['materia']->value){
$_smarty_tpl->tpl_vars['materia']->_loop = true;
?>
					  <li><?php echo $_smarty_tpl->tpl_vars['materia']->value["nombre"];?>
</li>
					<?php } ?>
				</ul></li>
			<?php } ?>
		</ul>
	<?php }?>
	</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>