<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:36:18
         compiled from common/urlInEl.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/urlInEl.tpl', 15, false),array('modifier', 'json_encode', 'common/urlInEl.tpl', 18, false),)), $this); ?>

<script>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['inElElId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')); ?>
').pkpHandler(
			'$.pkp.controllers.UrlInDivHandler',
			{
				sourceUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['inElUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				refreshOn: <?php echo ((is_array($_tmp=$this->_tpl_vars['refreshOn'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<<?php echo $this->_tpl_vars['inEl']; ?>
 id="<?php echo ((is_array($_tmp=$this->_tpl_vars['inElElId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['inElClass']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['inElClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['inElPlaceholder']; ?>
</<?php echo $this->_tpl_vars['inEl']; ?>
>