<?php /* Smarty version 2.6.18, created on 2008-11-16 23:41:57
         compiled from manage.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
Manage VMs <span id="adminall" style="display: none">(<a href="#" onclick="load_vm_list({all:1});">all</a>)</span>
<style>
  .vmbox {
    float: left;
    width: 100;
    height: 150;
    border: 2px solid blue;
  }
  .vmon {
    border-color: green;
  }
  .vmoff {
    border-color: red;
  }
</style>
<div id="vmcontainer">

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>