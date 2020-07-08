<?php /* Smarty version 2.6.25-dev, created on 2019-05-30 22:17:57
         compiled from core:submission/submissionMetadataFormTitleFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'core:submission/submissionMetadataFormTitleFields.tpl', 12, false),array('function', 'fbvElement', 'core:submission/submissionMetadataFormTitleFields.tpl', 13, false),array('function', 'translate', 'core:submission/submissionMetadataFormTitleFields.tpl', 24, false),)), $this); ?>
<div class="pkp_helpers_clear">
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title','title' => "common.prefix",'inline' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "common.prefixAndTitle.tip",'type' => 'text','multilingual' => true,'name' => 'prefix','id' => 'prefix','value' => $this->_tpl_vars['prefix'],'readonly' => $this->_tpl_vars['readOnly'],'maxlength' => '32'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title','title' => "common.title",'inline' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => true,'name' => 'title','id' => 'title','value' => $this->_tpl_vars['title'],'readonly' => $this->_tpl_vars['readOnly'],'maxlength' => '255','required' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.subtitle",'for' => 'subtitle')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "common.subtitle.tip",'type' => 'text','multilingual' => true,'name' => 'subtitle','id' => 'subtitle','value' => $this->_tpl_vars['subtitle'],'readonly' => $this->_tpl_vars['readOnly']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.abstract",'for' => 'abstract','required' => $this->_tpl_vars['abstractsRequired'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['wordCount']): ?>
		<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.abstract.wordCount.description",'wordCount' => $this->_tpl_vars['wordCount']), $this);?>

	<?php endif; ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'abstract','id' => 'abstract','value' => $this->_tpl_vars['abstract'],'rich' => 'extended','readonly' => $this->_tpl_vars['readOnly'],'wordCount' => $this->_tpl_vars['wordCount']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>