<?php
/* Smarty version 3.1.30, created on 2016-08-11 00:19:48
  from "/Applications/XAMPP/xamppfiles/htdocs/tupar/templates/animales.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57aba8848cc3d8_61224234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eef605a9b77e5c7e0ac02239c3e5c8c8465afd71' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tupar/templates/animales.tpl',
      1 => 1470867256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57aba8848cc3d8_61224234 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/XAMPP/xamppfiles/htdocs/tupar/libs/plugins/modifier.truncate.php';
$_smarty_tpl->compiled->nocache_hash = '137917302857aba884869ed0_69680577';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="panel panel-default">
      <div class="panel-body">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animales']->value, 'animal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['animal']->value == $_smarty_tpl->tpl_vars['animalElegido']->value) {?>
                <li><strong><?php echo smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['animal']->value, 'UTF-8'),5);?>
</strong></li>
            <?php } else { ?>
                <li><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['animal']->value,5);?>
</li>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        El animal elegido es: <strong><?php echo smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['animalElegido']->value, 'UTF-8'),5);?>
</strong>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
