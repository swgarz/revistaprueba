<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:42:20
         compiled from frontend/pages/submissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/pages/submissions.tpl', 20, false),array('function', 'translate', 'frontend/pages/submissions.tpl', 20, false),array('modifier', 'nl2br', 'frontend/pages/submissions.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "about.submissions")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_submissions">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "about.submissions")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<?php ob_start(); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submission','op' => 'wizard'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.newSubmission"), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newSubmission', ob_get_contents());ob_end_clean(); ?>
		<?php ob_start(); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.viewSubmissions"), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('viewSubmissions', ob_get_contents());ob_end_clean(); ?>
		<div class="cmp_notification">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.submissionActions",'newSubmission' => $this->_tpl_vars['newSubmission'],'viewSubmissions' => $this->_tpl_vars['viewSubmissions']), $this);?>

		</div>
	<?php else: ?>
		<?php ob_start(); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.login"), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('login', ob_get_contents());ob_end_clean(); ?>
		<?php ob_start(); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.register"), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('register', ob_get_contents());ob_end_clean(); ?>
		<div class="cmp_notification">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registrationRequired",'login' => $this->_tpl_vars['login'],'register' => $this->_tpl_vars['register']), $this);?>

		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['submissionChecklist']): ?>
		<div class="submission_checklist">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist"), $this);?>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/editLink.tpl", 'smarty_include_vars' => array('page' => 'management','op' => 'settings','path' => 'publication','anchor' => 'submissionStage','sectionTitleKey' => "about.submissionPreparationChecklist")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist.description"), $this);?>

			<ul>
				<?php $_from = $this->_tpl_vars['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checklistItem']):
?>
					<li>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['currentContext']->getLocalizedSetting('authorGuidelines')): ?>
	<div class="author_guidelines" id="authorGuidelines">
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/editLink.tpl", 'smarty_include_vars' => array('page' => 'management','op' => 'settings','path' => 'publication','anchor' => 'submissionStage','sectionTitleKey' => "about.authorGuidelines")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</h2>
		<?php echo $this->_tpl_vars['currentContext']->getLocalizedSetting('authorGuidelines'); ?>

	</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['currentContext']->getLocalizedSetting('copyrightNotice')): ?>
		<div class="copyright_notice">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/editLink.tpl", 'smarty_include_vars' => array('page' => 'management','op' => 'settings','path' => 'distribution','anchor' => 'permissions','sectionTitleKey' => "about.copyrightNotice")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</h2>
			<?php echo $this->_tpl_vars['currentContext']->getLocalizedSetting('copyrightNotice'); ?>

		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['currentContext']->getLocalizedSetting('privacyStatement')): ?>
	<div class="privacy_statement">
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/editLink.tpl", 'smarty_include_vars' => array('page' => 'management','op' => 'settings','path' => 'publication','anchor' => 'submissionStage','sectionTitleKey' => "about.privacyStatement")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</h2>
		<?php echo $this->_tpl_vars['currentContext']->getLocalizedSetting('privacyStatement'); ?>

	</div>
	<?php endif; ?>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>