define("ace/ext/static_highlight",["require","exports","module","ace/edit_session","ace/layer/text","ace/config","ace/lib/dom","ace/lib/lang"],function(e,t,n){"use strict";function i(e){this.type=e,this.style={},this.textContent=""}var p=e("../edit_session").EditSession,o=e("../layer/text").Text,g=e("../config"),u=e("../lib/dom"),r=e("../lib/lang").escapeHTML;i.prototype.cloneNode=function(){return this},i.prototype.appendChild=function(e){this.textContent+=e.toString()},i.prototype.toString=function(){var e=[];if("fragment"!=this.type){e.push("<",this.type),this.className&&e.push(" class='",this.className,"'");var t=[];for(var n in this.style)t.push(n,":",this.style[n]);t.length&&e.push(" style='",t.join(""),"'"),e.push(">")}return this.textContent&&e.push(this.textContent),"fragment"!=this.type&&e.push("</",this.type,">"),e.join("")};var d={createTextNode:function(e,t){return r(e)},createElement:function(e){return new i(e)},createFragment:function(){return new i("fragment")}},f=function(){this.config={},this.dom=d};f.prototype=o.prototype;var m=function(s,e,a){var t=s.className.match(/lang-(\w+)/),n=e.mode||t&&"ace/mode/"+t[1];if(!n)return!1;var i=e.theme||"ace/theme/textmate",o="",c=[];if(s.firstElementChild)for(var r=0,l=0;l<s.childNodes.length;l++){var h=s.childNodes[l];3==h.nodeType?(r+=h.data.length,o+=h.data):c.push(r,h)}else o=s.textContent,e.trim&&(o=o.trim());m.render(o,n,i,e.firstLineNumber,!e.showGutter,function(e){u.importCssString(e.css,"ace_highlight"),s.innerHTML=e.html;for(var t=s.firstChild.firstChild,n=0;n<c.length;n+=2){var i=e.session.doc.indexToPosition(c[n]),o=c[n+1],r=t.children[i.row];r&&r.appendChild(o)}a&&a()})};m.render=function(t,n,i,o,r,s){function a(){var e=m.renderSync(t,n,i,o,r);return s?s(e):e}var c,l=1,h=p.prototype.$modes;return"string"==typeof i&&(l++,g.loadModule(["theme",i],function(e){i=e,--l||a()})),n&&"object"==typeof n&&!n.getTokenizer&&(n=(c=n).path),"string"==typeof n&&(l++,g.loadModule(["mode",n],function(e){h[n]&&!c||(h[n]=new e.Mode(c)),n=h[n],--l||a()})),--l||a()},m.renderSync=function(e,t,n,i,o){i=parseInt(i||1,10);var r=new p("");r.setUseWorker(!1),r.setMode(t);var s=new f;s.setSession(r),Object.keys(s.$tabStrings).forEach(function(e){if("string"==typeof s.$tabStrings[e]){var t=d.createFragment();t.textContent=s.$tabStrings[e],s.$tabStrings[e]=t}}),r.setValue(e);var a=r.getLength(),c=d.createElement("div");c.className=n.cssClass;var l=d.createElement("div");l.className="ace_static_highlight"+(o?"":" ace_show_gutter"),l.style["counter-reset"]="ace_line "+(i-1);for(var h=0;h<a;h++){var g=d.createElement("div");if(g.className="ace_line",!o){var u=d.createElement("span");u.className="ace_gutter ace_gutter-cell",u.textContent="",g.appendChild(u)}s.$renderLine(g,h,!1),g.textContent+="\n",l.appendChild(g)}return c.appendChild(l),{css:".ace_static_highlight {font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', 'Droid Sans Mono', monospace;font-size: 12px;white-space: pre-wrap}.ace_static_highlight .ace_gutter {width: 2em;text-align: right;padding: 0 3px 0 0;margin-right: 3px;contain: none;}.ace_static_highlight.ace_show_gutter .ace_line {padding-left: 2.6em;}.ace_static_highlight .ace_line { position: relative; }.ace_static_highlight .ace_gutter-cell {-moz-user-select: -moz-none;-khtml-user-select: none;-webkit-user-select: none;user-select: none;top: 0;bottom: 0;left: 0;position: absolute;}.ace_static_highlight .ace_gutter-cell:before {content: counter(ace_line, decimal);counter-increment: ace_line;}.ace_static_highlight {counter-reset: ace_line;}"+n.cssText,html:c.toString(),session:r}},n.exports=m,n.exports.highlight=m}),window.require(["ace/ext/static_highlight"],function(e){"object"==typeof module&&"object"==typeof exports&&module&&(module.exports=e)});