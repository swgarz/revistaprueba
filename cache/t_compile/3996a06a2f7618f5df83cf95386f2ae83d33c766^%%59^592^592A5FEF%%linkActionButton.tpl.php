<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:54:36
         compiled from linkAction/linkActionButton.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linkAction/linkActionButton.tpl', 16, false),array('modifier', 'strip_unsafe_html', 'linkAction/linkActionButton.tpl', 16, false),)), $this); ?>
<a href="#" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']->getHoverTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="pkp_controllers_linkAction pkp_linkaction_<?php echo $this->_tpl_vars['action']->getId(); ?>
 pkp_linkaction_icon_<?php echo $this->_tpl_vars['action']->getImage(); ?>
"><?php if ($this->_tpl_vars['anyhtml']): ?><?php echo $this->_tpl_vars['action']->getTitle(); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['action']->getTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
<?php endif; ?></a>