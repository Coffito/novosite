/*------------------------------------------------------------------------
# Copyright (C) 2005-2012 WebxSolution Ltd. All Rights Reserved.
# @license - GPLv2.0
# Author: WebxSolution Ltd
# Websites:  http://www.webxsolution.com
# Terms of Use: An extension that is derived from the JoomlaCK editor will only be allowed under the following conditions: http://joomlackeditor.com/terms-of-use
# ------------------------------------------------------------------------*/ 
CKEDITOR.plugins.add("ietoolbarcollasperfix",{init:function(a){},afterInit:function(a){a.on("themeSpace",function(b){if(b.data.space==a.config.toolbarLocation){var c="cke_"+(CKEDITOR.tools.getNextNumber()-1);a.addCommand("toolbarCollapse",{exec:function(a){var b=CKEDITOR.document.getById(c),d=b.getPrevious(),e=a.getThemeSpace("contents"),f=d.getParent(),g=parseInt(e.$.style.height,10),h=f.$.offsetHeight,i=!d.isVisible();if(!i){d.hide();b.addClass("cke_toolbox_collapser_min");b.setAttribute("title",a.lang.toolbarExpand)}else{d.show();b.removeClass("cke_toolbox_collapser_min");b.setAttribute("title",a.lang.toolbarCollapse)}b.getFirst().setText(i?"?":"?");var j=f.$.offsetHeight-h;e.setStyle("height",g-j+"px");a.fire("resize");if(a.plugins.codemirror&&CKEDITOR.env.ie){a.textarea.hide();var k=a.textarea.getParent();var l=e.getStyle("height");var m=a.textarea.getNext();m.setStyle("height",l)}},modes:{wysiwyg:1,source:1}})}})}})