/*------------------------------------------------------------------------
# Copyright (C) 2005-2012 WebxSolution Ltd. All Rights Reserved.
# @license - GPLv2.0
# Author: WebxSolution Ltd
# Websites:  http://www.webxsolution.com
# Terms of Use: An extension that is derived from the JoomlaCK editor will only be allowed under the following conditions: http://joomlackeditor.com/terms-of-use
# ------------------------------------------------------------------------*/ 
CKEDITOR.plugins.add("adddialogfieldexample",{init:function(a){},afterInit:function(a){CKEDITOR.on("dialogDefinition",function(b){function e(a){return a.replace(/\\'/g,"'")}function f(a){return a.replace(/'/g,"\\$&")}function i(a){var b,c=h.name,d=h.params,e,g;b=[c,"("];for(var i=0;i<d.length;i++){e=d[i].toLowerCase();g=a[e];i>0&&b.push(",");b.push("'",g?f(encodeURIComponent(a[e])):"","'")}b.push(")");return b.join("")}function j(a){var b,c=a.length,d=[];for(var e=0;e<c;e++){b=a.charCodeAt(e);d.push(b)}return"String.fromCharCode("+d.join(",")+")"}var c=b.data.name;var d=b.data.definition;var g=a.config.emailProtection||"";if(g&&g!="encode"){var h={};g.replace(/^([^(]+)\(([^)]+)\)$/,function(a,b,c){h.name=b;h.params=[];c.replace(/[^,\s]+/g,function(a){h.params.push(a)})})}if(c=="link"){var k=d.getContents("advanced");k.add({type:"text",label:"Relationship",id:"advRel","default":"",setup:function(){var b=CKEDITOR.plugins.link;var c=b.getSelectedLink(a);if(c)this.setValue(c.$.rel)},commit:function(a){if(!a.adv)a.adv={};a.adv.advRel=this.getValue()}});d.onOk=function(){var a={href:"javascript:void(0)/*"+CKEDITOR.tools.getNextNumber()+"*/"},b=[],c={href:a.href},d=this,e=this.getParentEditor();this.commitContent(c);switch(c.type||"url"){case"url":var h=c.url&&c.url.protocol!=undefined?c.url.protocol:"http://",k=c.url&&c.url.url||"";a._cke_saved_href=k.indexOf("/")===0?k:h+k;break;case"anchor":var l=c.anchor&&c.anchor.name,m=c.anchor&&c.anchor.id;a._cke_saved_href="#"+(l||m||"");break;case"email":var n,o=c.email,p=o.address;switch(g){case"":case"encode":{var q=encodeURIComponent(o.subject||""),r=encodeURIComponent(o.body||"");var s=[];q&&s.push("subject="+q);r&&s.push("body="+r);s=s.length?"?"+s.join("&"):"";if(g=="encode"){n=["javascript:void(location.href='mailto:'+",j(p)];s&&n.push("+'",f(s),"'");n.push(")")}else n=["mailto:",p,s];break};default:{var t=p.split("@",2);o.name=t[0];o.domain=t[1];n=["javascript:",i(o)]}}a._cke_saved_href=n.join("");break}if(c.target){if(c.target.type=="popup"){var u=["window.open(this.href, '",c.target.name||"","', '"];var v=["resizable","status","location","toolbar","menubar","fullscreen","scrollbars","dependent"];var w=v.length;var x=function(a){if(c.target[a])v.push(a+"="+c.target[a])};for(var y=0;y<w;y++)v[y]=v[y]+(c.target[v[y]]?"=yes":"=no");x("width");x("left");x("height");x("top");u.push(v.join(","),"'); return false;");a["_cke_pa_onclick"]=u.join("");b.push("target")}else{if(c.target.type!="notSet"&&c.target.name)a.target=c.target.name;else b.push("target");b.push("_cke_pa_onclick","onclick")}}if(c.adv){var z=function(d,e){var f=c.adv[d];if(f)a[e]=f;else b.push(e)};if(this._.selectedElement)z("advId","id");z("advLangDir","dir");z("advAccessKey","accessKey");z("advName","name");z("advLangCode","lang");z("advTabIndex","tabindex");z("advTitle","title");z("advContentType","type");z("advCSSClasses","class");z("advCharset","charset");z("advStyles","style");z("advRel","rel")}if(!this._.selectedElement){var A=e.getSelection(),B=A.getRanges(true);if(B.length==1&&B[0].collapsed){var C=new CKEDITOR.dom.text(c.type=="email"?c.email.address:a._cke_saved_href,e.document);B[0].insertNode(C);B[0].selectNodeContents(C);A.selectRanges(B)}var D=new CKEDITOR.style({element:"a",attributes:a});D.type=CKEDITOR.STYLE_INLINE;D.apply(e.document);if(c.adv&&c.adv.advId){var E=this.getParentEditor().document.$.getElementsByTagName("a");for(y=0;y<E.length;y++){if(E[y].href==a.href){E[y].id=c.adv.advId;break}}}}else{var F=this._.selectedElement,G=F.getAttribute("_cke_saved_href"),H=F.getHtml();if(CKEDITOR.env.ie&&a.name!=F.getAttribute("name")){var I=new CKEDITOR.dom.element('<a name="'+CKEDITOR.tools.htmlEncode(a.name)+'">',e.document);A=e.getSelection();F.moveChildren(I);F.copyAttributes(I,{name:1});I.replace(F);F=I;A.selectElement(F)}F.setAttributes(a);F.removeAttributes(b);if(G==H||c.type=="email"&&H.indexOf("@")!=-1){F.setHtml(c.type=="email"?c.email.address:a._cke_saved_href)}if(F.getAttribute("name"))F.addClass("cke_anchor");else F.removeClass("cke_anchor");if(this.fakeObj)e.createFakeElement(F,"cke_anchor","anchor").replace(this.fakeObj);delete this._.selectedElement}}}})}})