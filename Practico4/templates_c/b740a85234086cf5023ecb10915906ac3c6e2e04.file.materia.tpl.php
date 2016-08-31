<?php /* Smarty version Smarty-3.1.14, created on 2016-08-30 19:59:07
         compiled from ".\templates\materia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309657c60f8c30c415-98340705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b740a85234086cf5023ecb10915906ac3c6e2e04' => 
    array (
      0 => '.\\templates\\materia.tpl',
      1 => 1472597946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309657c60f8c30c415-98340705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57c60f8c368f23_40040846',
  'variables' => 
  array (
    'materia' => 0,
    'alumnos' => 0,
    'alumno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c60f8c368f23_40040846')) {function content_57c60f8c368f23_40040846($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('active'=>"materias"), 0);?>


	<div class="container">


	<h1><?php echo $_smarty_tpl->tpl_vars['materia']->value["nombre"];?>
 <small>Cuatrimestre <?php echo $_smarty_tpl->tpl_vars['materia']->value["cuatrimestre"];?>
</small><a href="index.php?action=asistencias&materia=<?php echo $_smarty_tpl->tpl_vars['materia']->value["id"];?>
" class='btn btn-primary pull-right'>Cargar Asistencias</a></h1>


	<?php if (isset($_smarty_tpl->tpl_vars['alumnos']->value)){?>
	<h2>Alumnos</h2>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['alumno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alumno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alumnos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->key => $_smarty_tpl->tpl_vars['alumno']->value){
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['alumno']->value["nombre"];?>
</li>
			<?php } ?>
		</ul>
	<?php }?>
	</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>