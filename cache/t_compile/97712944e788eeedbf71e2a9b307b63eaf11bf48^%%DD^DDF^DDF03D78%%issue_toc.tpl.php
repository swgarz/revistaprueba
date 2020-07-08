<?php /* Smarty version 2.6.25-dev, created on 2019-05-28 18:36:22
         compiled from frontend/objects/issue_toc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/issue_toc.tpl', 32, false),array('function', 'translate', 'frontend/objects/issue_toc.tpl', 69, false),array('modifier', 'escape', 'frontend/objects/issue_toc.tpl', 33, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/issue_toc.tpl', 40, false),array('modifier', 'date_format', 'frontend/objects/issue_toc.tpl', 79, false),)), $this); ?>
<div class="obj_issue_toc">

		<?php if (! $this->_tpl_vars['issue']->getPublished()): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'warning','messageKey' => "editor.issues.preview")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

		<div class="heading texture">

				<?php $this->assign('issueCover', $this->_tpl_vars['issue']->getLocalizedCoverImageUrl()); ?>
		<?php if ($this->_tpl_vars['issueCover']): ?>
			<a class="cover" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','page' => 'issue','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
				<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['issueCover'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImageAltText() != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
			</a>
		<?php endif; ?>

				<?php if ($this->_tpl_vars['issue']->hasDescription()): ?>
			<div class="description">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			</div>
		<?php endif; ?>

				<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
			<?php $this->assign('pubId', $this->_tpl_vars['issue']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
			<?php if ($this->_tpl_vars['pubId']): ?>
				<?php $this->assign('doiUrl', ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
				<div class="pub_id <?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
					<span class="type">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
:
					</span>
					<span class="id">
						<?php if ($this->_tpl_vars['doiUrl']): ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
								<?php echo $this->_tpl_vars['doiUrl']; ?>

							</a>
						<?php else: ?>
							<?php echo $this->_tpl_vars['pubId']; ?>

						<?php endif; ?>
					</span>
				</div>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

				<?php if ($this->_tpl_vars['issue']->getDatePublished()): ?>
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>

			</h2>
			<div class="current_issue_title">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			</div>
			<div class="published">
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>
:
				</span>
				<span class="value">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				</span>
			</div>
		<?php endif; ?>
	</div>

		<?php if ($this->_tpl_vars['issueGalleys']): ?>
		<div class="galleys">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.fullIssue"), $this);?>

			</h2>
			<ul class="galleys_links">
				<?php $_from = $this->_tpl_vars['issueGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
					<li>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['issue'],'purchaseFee' => $this->_tpl_vars['currentJournal']->getSetting('purchaseIssueFee'),'purchaseCurrency' => $this->_tpl_vars['currentJournal']->getSetting('currency'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	<?php endif; ?>

		<div class="sections">
	<p class="contenido">Contenido</p>
	<a href="#">Editorial</a>
	<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
		<div class="section">
		<?php if ($this->_tpl_vars['section']['articles']): ?>
			<?php if ($this->_tpl_vars['section']['title']): ?>
				<h2>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				</h2>
			<?php endif; ?>
			<ul class="cmp_article_list articles">
				<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
					<li>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/article_summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php endif; ?>
		</div>
	<?php endforeach; endif; unset($_from); ?>
	</div><!-- .sections -->
</div>