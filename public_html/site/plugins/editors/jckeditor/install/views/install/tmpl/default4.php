<?php 
/*------------------------------------------------------------------------
# Copyright (C) 2005-2012 WebxSolution Ltd. All Rights Reserved.
# @license - GPLv2.0
# Author: WebxSolution Ltd
# Websites:  http://www.webxsolution.com
# Terms of Use: An extension that is derived from the JoomlaCK editor will only be allowed under the following conditions: http://joomlackeditor.com/terms-of-use
# ------------------------------------------------------------------------*/ 
defined('JPATH_BASE') or die;


?>
<style>

.optgrp
{
  font-style:italic;
  color:  #000;
  background-color:#CCC;
}
</style>

<script type="text/javascript">
function submitform(pressbutton){
	if (pressbutton) {
		document.adminForm.task.value=pressbutton;
	}
	if (typeof document.adminForm.onsubmit == "function") {
		document.adminForm.onsubmit();
	}
	document.adminForm.submit();
}

var Joomla = {};

Joomla.submitbutton = function(pressbutton) {
	submitform(pressbutton);
}

Joomla.changeDynaList = function( listname, source, key, orig_key, orig_val ) {
	var list = eval( 'document.adminForm.' + listname );

	// empty the list
	for (i in list.options.length) {
		list.options[i] = null;
	}
	i = 0;
	for (x in source) {
		if (source[x][0] == key) {
			opt = new Option();
			opt.value = source[x][1];
			opt.text = source[x][2];
            if(opt.innerHTML)
                opt.innerHTML = opt.text.replace(/--/g,'&nbsp;&nbsp;');
             
            if(source[x][3])
            {
                opt.disabled = true
                opt.className = 'optgrp';
            }

			if ((orig_key == key && orig_val == opt.value) || i == 0) {
				opt.selected = true;
			}
   		    list.options[i++] = opt;
		}
	}
	list.length = i;
}

var templateStylesheets = [];
var richcomboStylesheets = [];
<?php
$i = 0;
foreach ($this->templateStylesheets as $k=>$items) {
	foreach ($items as $v) {
		echo "templateStylesheets[".$i++."] = [ '$k','".addslashes( $v->value )."','". addslashes( $v->text ) ."',". (int) $v->disable ."];\n\t\t";
	}
}

$i = 0;
foreach ($this->richcomboStylesheets as $k=>$items) {
	foreach ($items as $v) {
		echo "richcomboStylesheets[".$i++."] = [ '$k','".addslashes( $v->value )."','".addslashes( $v->text )."',". (int) $v->disable ." ];\n\t\t";
	}
}

?>



</script>

<div class="header">
	<div class="innerHeader">
	<img src="images/headerTitle.png" height="48" width="155" />
	</div>
</div>
<form name="adminForm" id="adminForm" action="index.php" method="post">
<div class="container">	
	<div class="mainBody">
		<h3 style="margin-bottom: 3px"><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_SETUP');?></h3>
		<fieldset class="adminform" >
		<legend><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_EDITING_STYLES');?></legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td><img align="middle" src="images/template.png"/></td>
			<td colspan="2"><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_SELECT_DEFAULT_TEMPLATE');?></td>			
			<td width="20%" align="right"><?php echo $this->templateList;?></td>
		</tr>
		<tr>
			<td><img align="middle" src="images/css.png"/></td>
			<td colspan="2"><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_SELECT_TEMPLATE_STYLE_SHEET');?></td>			
			<td width="20%" align="right"><?php echo $this->stylesheetList;?></td>
		</tr>
		<tr>
			<td><img align="middle" src="images/css.png"/></td>
			<td colspan="2"><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_USE_JCK_STYLE_SHEET');?></td>			
			<td width="20%"align="right"><?php echo $this->JCKTypographyBooleanList;?></td>
		</tr>
		</table>
		</fieldset>
		<fieldset class="adminform" style="margin-top:4px;">
		<legend><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_STYLES_DROPDOWN');?></legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td><img align="middle" src="images/css.png"/></td>
			<td colspan="2"><?php echo JText::_('PLG_JCK_INSTALL_WIZARD_SELECT_STYLES_DROPDOWN_STYLE_SHEET');?></td>			
			<td width="20%" align="right"><?php echo $this->richcomboStylesheetList;?></td>
		</tr>
		</table>
		</fieldset>
	</div>
</div>
<div class="buttons left">
<button onclick="document.adminForm.task.value='folders';document.adminForm.submit();"><<< <?php echo JText::_('PLG_JCK_INSTALL_WIZARD_PREV');?></button>
</div>
<div class="buttons">
<input type="submit" value="<?php echo JText::_('PLG_JCK_INSTALL_WIZARD_FINISH');?>" />
</div>
<input type="hidden" name="task" value="finish" />
 </form>
<script type="text/javascript">
    var form = document.adminForm.content_css_custom;
    var options = form.options;
     for (var i = 0; i < options.length;i++) {
        var opt = options[i];
         opt.innerHTML = opt.text.replace(/--/g, '&nbsp;&nbsp;');
    }

    var form = document.adminForm.styles_css_custom;
    var options = form.options;
     for (var i = 0; i < options.length;i++) {
        var opt = options[i];
         opt.innerHTML = opt.text.replace(/--/g, '&nbsp;&nbsp;');
    }
</script>	