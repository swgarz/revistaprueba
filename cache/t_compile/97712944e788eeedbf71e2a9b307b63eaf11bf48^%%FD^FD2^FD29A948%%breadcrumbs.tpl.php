<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:42:20
         compiled from frontend/components/breadcrumbs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/breadcrumbs.tpl', 17, false),array('function', 'url', 'frontend/components/breadcrumbs.tpl', 20, false),array('modifier', 'escape', 'frontend/components/breadcrumbs.tpl', 30, false),)), $this); ?>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbLabel"), $this);?>
">
	<ol>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.homepageNavigationLabel"), $this);?>

			</a>
			<span class="separator"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbSeparator"), $this);?>
</span>
		</li>
		<li class="current">
			<h1>
				<?php if ($this->_tpl_vars['currentTitleKey']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['currentTitleKey']), $this);?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['currentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				<?php endif; ?>
			</h1>
		</li>
	</ol>
</nav>