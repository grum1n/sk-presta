<?php
/* Smarty version 3.1.43, created on 2022-06-08 18:31:26
  from '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a0c0ce7fd1f7_76307217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '115f89c47e835458bff78be6188aae8aca0130b5' => 
    array (
      0 => '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/index.tpl',
      1 => 1654582947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0c0ce7fd1f7_76307217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81079885762a0c0ce7fa913_82311359', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_103028703162a0c0ce7faf68_53684989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_63799321562a0c0ce7fbd26_86089021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_90087288162a0c0ce7fb7e9_05307743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63799321562a0c0ce7fbd26_86089021', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_81079885762a0c0ce7fa913_82311359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_81079885762a0c0ce7fa913_82311359',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_103028703162a0c0ce7faf68_53684989',
  ),
  'page_content' => 
  array (
    0 => 'Block_90087288162a0c0ce7fb7e9_05307743',
  ),
  'hook_home' => 
  array (
    0 => 'Block_63799321562a0c0ce7fbd26_86089021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103028703162a0c0ce7faf68_53684989', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90087288162a0c0ce7fb7e9_05307743', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
