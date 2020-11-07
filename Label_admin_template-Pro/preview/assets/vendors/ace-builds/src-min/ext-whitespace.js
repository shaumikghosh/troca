define("ace/ext/whitespace",["require","exports","module","ace/lib/lang"],function(e,r,t){"use strict";var p=e("../lib/lang");r.$detectIndentation=function(e,t){function n(e){for(var t=0,n=e;n<r.length;n+=e)t+=r[n]||0;return t}for(var r=[],o=[],i=0,s=0,a=Math.min(e.length,1e3),c=0;c<a;c++){var g=e[c];if(/^\s*[^*+\-\s]/.test(g)){if("\t"==g[0])i++,s=-Number.MAX_VALUE;else{var l=g.match(/^ */)[0].length;if(l&&"\t"!=g[l]){var u=l-s;0<u&&!(s%u)&&!(l%u)&&(o[u]=(o[u]||0)+1),r[l]=(r[l]||0)+1}s=l}for(;c<a&&"\\"==g[g.length-1];)g=e[c++]}}var h=o.reduce(function(e,t){return e+t},0),f={score:0,length:0},v=0;for(c=1;c<12;c++){var d=n(c);1==c?(v=d,d=r[1]?.9:.8,r.length||(d=0)):d/=v,o[c]&&(d+=o[c]/h),d>f.score&&(f={score:d,length:c})}if(f.score&&1.4<f.score)var m=f.length;return v+1<i?((1==m||v<i/4||f.score<1.8)&&(m=void 0),{ch:"\t",length:m}):i+1<v?{ch:" ",length:m}:void 0},r.detectIndentation=function(e){var t=e.getLines(0,1e3),n=r.$detectIndentation(t)||{};return n.ch&&e.setUseSoftTabs(" "==n.ch),n.length&&e.setTabSize(n.length),n},r.trimTrailingSpace=function(e,t){var n=e.getDocument(),r=n.getAllLines(),o=t&&t.trimEmpty?-1:0,i=[],s=-1;t&&t.keepCursorPosition&&(e.selection.rangeCount?e.selection.rangeList.ranges.forEach(function(e,t,n){var r=n[t+1];r&&r.cursor.row==e.cursor.row||i.push(e.cursor)}):i.push(e.selection.getCursor()),s=0);for(var a=i[s]&&i[s].row,c=0,g=r.length;c<g;c++){var l=r[c],u=l.search(/\s+$/);c==a&&(u<i[s].column&&o<u&&(u=i[s].column),a=i[++s]?i[s].row:-1),o<u&&n.removeInLine(c,u,l.length)}},r.convertIndentation=function(e,t,n){var r=e.getTabString()[0],o=e.getTabSize();n||(n=o),t||(t=r);for(var i="\t"==t?t:p.stringRepeat(t,n),s=e.doc,a=s.getAllLines(),c={},g={},l=0,u=a.length;l<u;l++){var h=a[l].match(/^\s*/)[0];if(h){var f=e.$getStringScreenWidth(h)[0],v=Math.floor(f/o),d=f%o,m=c[v]||(c[v]=p.stringRepeat(i,v));(m+=g[d]||(g[d]=p.stringRepeat(" ",d)))!=h&&(s.removeInLine(l,0,h.length),s.insertInLine({row:l,column:0},m))}}e.setTabSize(n),e.setUseSoftTabs(" "==t)},r.$parseStringArg=function(e){var t={};/t/.test(e)?t.ch="\t":/s/.test(e)&&(t.ch=" ");var n=e.match(/\d+/);return n&&(t.length=parseInt(n[0],10)),t},r.$parseArg=function(e){return e?"string"==typeof e?r.$parseStringArg(e):"string"==typeof e.text?r.$parseStringArg(e.text):e:{}},r.commands=[{name:"detectIndentation",exec:function(e){r.detectIndentation(e.session)}},{name:"trimTrailingSpace",exec:function(e,t){r.trimTrailingSpace(e.session,t)}},{name:"convertIndentation",exec:function(e,t){var n=r.$parseArg(t);r.convertIndentation(e.session,n.ch,n.length)}},{name:"setIndentation",exec:function(e,t){var n=r.$parseArg(t);n.length&&e.session.setTabSize(n.length),n.ch&&e.session.setUseSoftTabs(" "==n.ch)}}]}),window.require(["ace/ext/whitespace"],function(e){"object"==typeof module&&"object"==typeof exports&&module&&(module.exports=e)});