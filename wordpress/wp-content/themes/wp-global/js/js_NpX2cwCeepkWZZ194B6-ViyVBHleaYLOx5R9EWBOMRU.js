!function(t){Drupal.extlink=Drupal.extlink||{},Drupal.extlink.attach=function(e,l){if(l.hasOwnProperty("extlink")){var a,n=/^(([^\/:]+?\.)*)([^\.:]{4,})((\.[a-z]{1,4})*)(:[0-9]{1,5})?$/,i=window.location.host.replace(n,"$3$4"),s=window.location.host.replace(n,"$1");a=l.extlink.extSubdomains?"([^/]*\\.)?":"www."==s||""==s?"(www\\.)?":s.replace(".","\\.");var x=new RegExp("^https?://"+a+i,"i"),p=!1;l.extlink.extInclude&&(p=new RegExp(l.extlink.extInclude.replace(/\\/,"\\"),"i"));var r=!1;l.extlink.extExclude&&(r=new RegExp(l.extlink.extExclude.replace(/\\/,"\\"),"i"));var k=!1;l.extlink.extCssExclude&&(k=l.extlink.extCssExclude);var c=!1;l.extlink.extCssExplicit&&(c=l.extlink.extCssExplicit);var u=new Array,o=new Array;t("a:not(."+l.extlink.extClass+", ."+l.extlink.mailtoClass+"), area:not(."+l.extlink.extClass+", ."+l.extlink.mailtoClass+")",e).each(function(e){try{var l=this.href.toLowerCase();0!=l.indexOf("http")||(l.match(x)||r&&l.match(r))&&(!p||!l.match(p))||k&&t(this).parents(k).length>0||c&&t(this).parents(c).length<1?"AREA"==this.tagName||0!=l.indexOf("mailto:")||k&&t(this).parents(k).length>0||c&&t(this).parents(c).length<1||o.push(this):u.push(this)}catch(a){return!1}}),l.extlink.extClass&&Drupal.extlink.applyClassAndSpan(u,l.extlink.extClass),l.extlink.mailtoClass&&Drupal.extlink.applyClassAndSpan(o,l.extlink.mailtoClass),l.extlink.extTarget&&t(u).attr("target",l.extlink.extTarget),Drupal.extlink=Drupal.extlink||{},Drupal.extlink.popupClickHandler=Drupal.extlink.popupClickHandler||function(){if(l.extlink.extAlert)return confirm(l.extlink.extAlertText)},t(u).click(function(t){return Drupal.extlink.popupClickHandler(t)})}},Drupal.extlink.applyClassAndSpan=function(e,l){var a;if(Drupal.settings.extlink.extImgClass)a=t(e);else{var n=t(e).find("img").parents("a");a=t(e).not(n)}a.addClass(l);var i,s=a.length;for(i=0;i<s;i++){var x=t(a[i]);"inline"!=x.css("display")&&"inline-block"!=x.css("display")||(l==Drupal.settings.extlink.mailtoClass?x.append('<span class="'+l+'"><span class="element-invisible"> '+Drupal.settings.extlink.mailtoLabel+"</span></span>"):x.append('<span class="'+l+'"><span class="element-invisible"> '+Drupal.settings.extlink.extLabel+"</span></span>"))}},Drupal.behaviors.extlink=Drupal.behaviors.extlink||{},Drupal.behaviors.extlink.attach=function(t,e){"function"==typeof extlinkAttach?extlinkAttach(t):Drupal.extlink.attach(t,e)}}(jQuery);
//# sourceMappingURL=maps/js_NpX2cwCeepkWZZ194B6-ViyVBHleaYLOx5R9EWBOMRU.js.map
