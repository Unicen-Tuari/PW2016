<?php /* Smarty version Smarty-3.1.14, created on 2016-08-30 20:36:57
         compiled from ".\templates\form_asistencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3183057c6113d6f56c0-36873422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a5686ddaff3fcf183697f7e828d55734e012a5' => 
    array (
      0 => '.\\templates\\form_asistencia.tpl',
      1 => 1472600211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3183057c6113d6f56c0-36873422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57c6113d76ded8_78016719',
  'variables' => 
  array (
    'materia' => 0,
    'alumnos' => 0,
    'alumno' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6113d76ded8_78016719')) {function content_57c6113d76ded8_78016719($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('active'=>"materias"), 0);?>


	<div class="container">


	<h1>Asistencias <small><?php echo $_smarty_tpl->tpl_vars['materia']->value["nombre"];?>
</small></h1>
	<hr>
	<form class="form-horizontal" method="post" action="index.php?action=carga_asistencias">
		<input value="<?php echo $_smarty_tpl->tpl_vars['materia']->value["id"];?>
" name="materia" style="display:none" />
		<div class="form-group">
	    <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputDate" name="inputDate" placeholder="dd/mm/aaaa">
	    </div>
	  </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Asistencias</label>
			<?php  $_smarty_tpl->tpl_vars['alumno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alumno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alumnos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->key => $_smarty_tpl->tpl_vars['alumno']->value){
$_smarty_tpl->tpl_vars['alumno']->_loop = true;
?>
				<div class="col-sm-offset-2 col-sm-12 checkbox">
				  <label>
				    <input name="alumno-<?php echo $_smarty_tpl->tpl_vars['alumno']->value["id"];?>
" type="checkbox" value="">
				    <?php echo $_smarty_tpl->tpl_vars['alumno']->value["nombre"];?>

				  </label>
				</div>
			<?php } ?>
		</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </div>
	  </div>
	</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>