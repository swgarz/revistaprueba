<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:59:04
         compiled from controllers/notification/inPlaceNotification.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/notification/inPlaceNotification.tpl', 14, false),)), $this); ?>

<script>
	$(function() {
		// Attach the form handler.
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
').pkpHandler('$.pkp.controllers.NotificationHandler',
		{
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/notification/notificationOptions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		});
	});
</script>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="pkp_notification <?php echo $this->_tpl_vars['notificationStyleClass']; ?>
"></div>