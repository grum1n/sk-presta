<?php
/* Smarty version 3.1.43, created on 2022-06-08 18:31:26
  from '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a0c0ce808cc9_47539006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a0173ff0eae2f805725bfe5d739ff2911464f1' => 
    array (
      0 => '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/page.tpl',
      1 => 1654582947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0c0ce808cc9_47539006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15534171562a0c0ce801094_46576678', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4982363862a0c0ce802573_58528739 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_113694843162a0c0ce801939_38469466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4982363862a0c0ce802573_58528739', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_125087460362a0c0ce805377_99041856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_198538128962a0c0ce8061d6_03008284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_82936062762a0c0ce804aa5_89223784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125087460362a0c0ce805377_99041856', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198538128962a0c0ce8061d6_03008284', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_107589799562a0c0ce807a63_37378295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_44790659062a0c0ce8073a6_37247995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107589799562a0c0ce807a63_37378295', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15534171562a0c0ce801094_46576678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15534171562a0c0ce801094_46576678',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_113694843162a0c0ce801939_38469466',
  ),
  'page_title' => 
  array (
    0 => 'Block_4982363862a0c0ce802573_58528739',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_82936062762a0c0ce804aa5_89223784',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_125087460362a0c0ce805377_99041856',
  ),
  'page_content' => 
  array (
    0 => 'Block_198538128962a0c0ce8061d6_03008284',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_44790659062a0c0ce8073a6_37247995',
  ),
  'page_footer' => 
  array (
    0 => 'Block_107589799562a0c0ce807a63_37378295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113694843162a0c0ce801939_38469466', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82936062762a0c0ce804aa5_89223784', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44790659062a0c0ce8073a6_37247995', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
