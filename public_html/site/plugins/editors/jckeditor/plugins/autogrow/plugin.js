﻿/*------------------------------------------------------------------------
# Copyright (C) 2005-2012 WebxSolution Ltd. All Rights Reserved.
# @license - GPLv2.0
# Author: WebxSolution Ltd
# Websites:  http://www.webxsolution.com
# Terms of Use: An extension that is derived from the JoomlaCK editor will only be allowed under the following conditions: http://joomlackeditor.com/terms-of-use
# ------------------------------------------------------------------------*/ 
(function(){var a=function(a){var b=a.getStyle("overflow-y");var c=a.getDocument();var d=CKEDITOR.dom.element.createFromHtml('<span style="margin:0;padding:0;border:0;clear:both;width:1px;height:1px;display:block;">'+(CKEDITOR.env.webkit?" ":"")+"</span>",c);c[CKEDITOR.env.ie?"getBody":"getDocumentElement"]().append(d);var e=d.getDocumentPosition(c).y+d.$.offsetHeight;d.remove();a.setStyle("overflow-y",b);return e};var b=function(b){if(!b.window)return;var c=b.document,d=new CKEDITOR.dom.element(c.getWindow().$.frameElement),e=c.getBody(),f=c.getDocumentElement(),g=b.window.getViewPaneSize().height,h=c.$.compatMode=="BackCompat"?e:f,i=a(h);i+=b.config.autoGrow_bottomSpace||0;var j=b.config.autoGrow_minHeight!=undefined?b.config.autoGrow_minHeight:200,k=b.config.autoGrow_maxHeight||Infinity;i=Math.max(i,j);i=Math.min(i,k);if(i!=g){i=b.fire("autoGrow",{currentHeight:g,newHeight:i}).newHeight;b.resize(b.container.getStyle("width"),i,true)}if(h.$.scrollHeight>h.$.clientHeight&&i<k)h.setStyle("overflow-y","hidden");else h.removeStyle("overflow-y")};CKEDITOR.plugins.add("autogrow",{init:function(a){a.addCommand("autogrow",{exec:b,modes:{wysiwyg:1},readOnly:1,canUndo:false,editorFocus:false});var c={contentDom:1,key:1,selectionChange:1,insertElement:1};a.config.autoGrow_onStartup&&(c["instanceReady"]=1);for(var d in c){a.on(d,function(c){var d=a.getCommand("maximize");if(c.editor.mode=="wysiwyg"&&(!d||d.state!=CKEDITOR.TRISTATE_ON)){setTimeout(function(){b(c.editor);b(c.editor)},100)}})}}})})()