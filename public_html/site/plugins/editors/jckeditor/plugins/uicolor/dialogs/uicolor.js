﻿/*------------------------------------------------------------------------
# Copyright (C) 2005-2012 WebxSolution Ltd. All Rights Reserved.
# @license - GPLv2.0
# Author: WebxSolution Ltd
# Websites:  http://www.webxsolution.com
# Terms of Use: An extension that is derived from the JoomlaCK editor will only be allowed under the following conditions: http://joomlackeditor.com/terms-of-use
# ------------------------------------------------------------------------*/ 
CKEDITOR.dialog.add("uicolor",function(a){function i(c,d){if(d||b._.contents.tab1.livePeview.getValue())a.setUiColor(c);myuicolor=c;}
function h(a){if(/^#/.test(a))a=window.YAHOO.util.Color.hex2rgb(a.substr(1));c.setValue(a,true);c.refresh(f)}
var b,c,d,e=a.getUiColor(),f="cke_uicolor_picker"+CKEDITOR.tools.getNextNumber(),g=a.plugins.uicolor.path,myuicolor;d={id:"yuiColorPicker",type:"html",html:"<div id='"+f+"' class='cke_uicolor_picker' style='width: 360px; height: 200px; position: relative;'></div>",onLoad:function(a){var d=CKEDITOR.getUrl("plugins/uicolor/yui/");c=new window.YAHOO.widget.ColorPicker(f,{showhsvcontrols:true,showhexcontrols:true,images:{PICKER_THUMB:d+"assets/picker_thumb.png",HUE_THUMB:d+"assets/hue_thumb.png"}});if(e)h(e);c.on("rgbChange",function(){b._.contents.tab1.predefined.setValue("");i("#"+c.get("hex"))});var g=new CKEDITOR.dom.nodeList(c.getElementsByTagName("input"));for(var j=0;j<g.count();j++)g.getItem(j).addClass("cke_dialog_ui_input_text")}};var j=true;return{title:a.lang.uicolor.title,minWidth:360,minHeight:320,onLoad:function(){b=this;this.setupContent();if(CKEDITOR.env.ie7Compat)b.parts.contents.setStyle("overflow","hidden")},onOk:function(){e=myuicolor;CKEDITOR.ajax.load(g+"dialogs/uicolor.php?color="+myuicolor.replace("#",""));},contents:[{id:"tab1",label:"",title:"",expand:true,padding:0,elements:[d,{id:"tab1",type:"vbox",children:[{id:"livePeview",type:"checkbox",label:a.lang.uicolor.preview,"default":1,onLoad:function(){j=true},onChange:function(){if(j)return;var a=this.getValue(),b=a?"#"+c.get("hex"):e;i(b,true)}},{type:"hbox",children:[{id:"predefined",type:"select","default":"",label:a.lang.uicolor.predefined,items:[[""],["Default Blue","#D6E6F4"],["Blue Sky","#7BCBED"],["Aquamarine","#79E3FD"],["Lavender","#E7C6FF"],["Spring Green","#ADE784"],["Natural Green","#87CE57"],["Metallic Gray","#CECECF"],["Silver","#E2E2DE"],["Cloud White","#F6F6F6"],["Feminine","#FFABF1"]],onChange:function(){var a=this.getValue();if(a){h(a);i(a);CKEDITOR.document.getById("predefinedPreview").setStyle("background",a)}else CKEDITOR.document.getById("predefinedPreview").setStyle("background","")},onShow:function(){var b=a.getUiColor();if(b)this.setValue(b)},onHide:function(){var b=e;if(b)a.setUiColor(b);}},{id:"predefinedPreview",type:"html",html:'<div id="cke_uicolor_preview" style="border: 1px solid black; padding: 3px; width: 30px;">'+'<div id="predefinedPreview" style="width: 30px; height: 30px;"> </div>'+"</div>"}]},{id:"configBox",type:"text",label:a.lang.uicolor.config,"default":"D6E6F4"}]}]}],buttons:[CKEDITOR.dialog.okButton]}});var is={ie:navigator.appName=="Microsoft Internet Explorer",java:navigator.javaEnabled(),ns:navigator.appName=="Netscape",ua:navigator.userAgent.toLowerCase(),version:parseFloat(navigator.appVersion.substr(21))||parseFloat(navigator.appVersion),win:navigator.platform=="Win32"};is.mac=is.ua.indexOf("mac")>=0;if(is.ua.indexOf("opera")>=0){is.ie=is.ns=false;is.opera=true}
if(is.ua.indexOf("gecko")>=0){is.ie=is.ns=false;is.gecko=true}