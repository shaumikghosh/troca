define("ace/occur",["require","exports","module","ace/lib/oop","ace/range","ace/search","ace/edit_session","ace/search_highlight","ace/lib/dom"],function(e,n,t){"use strict";function a(){}var r=e("./lib/oop"),i=(e("./range").Range,e("./search").Search),s=e("./edit_session").EditSession,o=e("./search_highlight").SearchHighlight;r.inherits(a,i),function(){this.enter=function(e,n){if(!n.needle)return!1;var t=e.getCursorPosition();this.displayOccurContent(e,n);var a=this.originalToOccurPosition(e.session,t);return e.moveCursorToPosition(a),!0},this.exit=function(e,n){var t=n.translatePosition&&e.getCursorPosition(),a=t&&this.occurToOriginalPosition(e.session,t);return this.displayOriginalContent(e),a&&e.moveCursorToPosition(a),!0},this.highlight=function(e,n){(e.$occurHighlight=e.$occurHighlight||e.addDynamicMarker(new o(null,"ace_occur-highlight","text"))).setRegexp(n),e._emit("changeBackMarker")},this.displayOccurContent=function(e,n){this.$originalSession=e.session;var t=this.matchingLines(e.session,n),a=t.map(function(e){return e.content}),o=new s(a.join("\n"));o.$occur=this,o.$occurMatchingLines=t,e.setSession(o),this.$useEmacsStyleLineStart=this.$originalSession.$useEmacsStyleLineStart,o.$useEmacsStyleLineStart=this.$useEmacsStyleLineStart,this.highlight(o,n.re),o._emit("changeBackMarker")},this.displayOriginalContent=function(e){e.setSession(this.$originalSession),this.$originalSession.$useEmacsStyleLineStart=this.$useEmacsStyleLineStart},this.originalToOccurPosition=function(e,n){var t=e.$occurMatchingLines,a={row:0,column:0};if(!t)return a;for(var o=0;o<t.length;o++)if(t[o].row===n.row)return{row:o,column:n.column};return a},this.occurToOriginalPosition=function(e,n){var t=e.$occurMatchingLines;return t&&t[n.row]?{row:t[n.row].row,column:n.column}:n},this.matchingLines=function(o,e){if(e=r.mixin({},e),!o||!e.needle)return[];var n=new i;return n.set(e),n.findAll(o).reduce(function(e,n){var t=n.start.row,a=e[e.length-1];return a&&a.row===t?e:e.concat({row:t,content:o.getLine(t)})},[])}}.call(a.prototype),e("./lib/dom").importCssString(".ace_occur-highlight {\n    border-radius: 4px;\n    background-color: rgba(87, 255, 8, 0.25);\n    position: absolute;\n    z-index: 4;\n    box-sizing: border-box;\n    box-shadow: 0 0 4px rgb(91, 255, 50);\n}\n.ace_dark .ace_occur-highlight {\n    background-color: rgb(80, 140, 85);\n    box-shadow: 0 0 4px rgb(60, 120, 70);\n}\n","incremental-occur-highlighting"),n.Occur=a}),define("ace/commands/occur_commands",["require","exports","module","ace/config","ace/occur","ace/keyboard/hash_handler","ace/lib/oop"],function(e,n,t){function a(){}e("../config");var o=e("../occur").Occur,r={name:"occur",exec:function(e,n){var t=!!e.session.$occur;(new o).enter(e,n)&&!t&&a.installIn(e)},readOnly:!0},i=[{name:"occurexit",bindKey:"esc|Ctrl-G",exec:function(e){var n=e.session.$occur;n&&(n.exit(e,{}),e.session.$occur||a.uninstallFrom(e))},readOnly:!0},{name:"occuraccept",bindKey:"enter",exec:function(e){var n=e.session.$occur;n&&(n.exit(e,{translatePosition:!0}),e.session.$occur||a.uninstallFrom(e))},readOnly:!0}],s=e("../keyboard/hash_handler").HashHandler;e("../lib/oop").inherits(a,s),function(){this.isOccurHandler=!0,this.attach=function(e){s.call(this,i,e.commands.platform),this.$editor=e};var r=this.handleKeyboard;this.handleKeyboard=function(e,n,t,a){var o=r.call(this,e,n,t,a);return o&&o.command?o:void 0}}.call(a.prototype),a.installIn=function(e){var n=new this;e.keyBinding.addKeyboardHandler(n),e.commands.addCommands(i)},a.uninstallFrom=function(e){e.commands.removeCommands(i);var n=e.getKeyboardHandler();n.isOccurHandler&&e.keyBinding.removeKeyboardHandler(n)},n.occurStartCommand=r}),define("ace/commands/incremental_search_commands",["require","exports","module","ace/config","ace/lib/oop","ace/keyboard/hash_handler","ace/commands/occur_commands"],function(e,n,t){function a(e){this.$iSearch=e}var o=e("../config"),r=e("../lib/oop"),s=e("../keyboard/hash_handler").HashHandler,i=e("./occur_commands").occurStartCommand;n.iSearchStartCommands=[{name:"iSearch",bindKey:{win:"Ctrl-F",mac:"Command-F"},exec:function(t,a){o.loadModule(["core","ace/incremental_search"],function(e){var n=e.iSearch=e.iSearch||new e.IncrementalSearch;n.activate(t,a.backwards),a.jumpToFirstMatch&&n.next(a)})},readOnly:!0},{name:"iSearchBackwards",exec:function(e,n){e.execCommand("iSearch",{backwards:!0})},readOnly:!0},{name:"iSearchAndGo",bindKey:{win:"Ctrl-K",mac:"Command-G"},exec:function(e,n){e.execCommand("iSearch",{jumpToFirstMatch:!0,useCurrentOrPrevSearch:!0})},readOnly:!0},{name:"iSearchBackwardsAndGo",bindKey:{win:"Ctrl-Shift-K",mac:"Command-Shift-G"},exec:function(e){e.execCommand("iSearch",{jumpToFirstMatch:!0,backwards:!0,useCurrentOrPrevSearch:!0})},readOnly:!0}],n.iSearchCommands=[{name:"restartSearch",bindKey:{win:"Ctrl-F",mac:"Command-F"},exec:function(e){e.cancelSearch(!0)}},{name:"searchForward",bindKey:{win:"Ctrl-S|Ctrl-K",mac:"Ctrl-S|Command-G"},exec:function(e,n){n.useCurrentOrPrevSearch=!0,e.next(n)}},{name:"searchBackward",bindKey:{win:"Ctrl-R|Ctrl-Shift-K",mac:"Ctrl-R|Command-Shift-G"},exec:function(e,n){n.useCurrentOrPrevSearch=!0,n.backwards=!0,e.next(n)}},{name:"extendSearchTerm",exec:function(e,n){e.addString(n)}},{name:"extendSearchTermSpace",bindKey:"space",exec:function(e){e.addString(" ")}},{name:"shrinkSearchTerm",bindKey:"backspace",exec:function(e){e.removeChar()}},{name:"confirmSearch",bindKey:"return",exec:function(e){e.deactivate()}},{name:"cancelSearch",bindKey:"esc|Ctrl-G",exec:function(e){e.deactivate(!0)}},{name:"occurisearch",bindKey:"Ctrl-O",exec:function(e){var n=r.mixin({},e.$options);e.deactivate(),i.exec(e.$editor,n)}},{name:"yankNextWord",bindKey:"Ctrl-w",exec:function(e){var n=e.$editor,t=n.selection.getRangeOfMovements(function(e){e.moveCursorWordRight()}),a=n.session.getTextRange(t);e.addString(a)}},{name:"yankNextChar",bindKey:"Ctrl-Alt-y",exec:function(e){var n=e.$editor,t=n.selection.getRangeOfMovements(function(e){e.moveCursorRight()}),a=n.session.getTextRange(t);e.addString(a)}},{name:"recenterTopBottom",bindKey:"Ctrl-l",exec:function(e){e.$editor.execCommand("recenterTopBottom")}},{name:"selectAllMatches",bindKey:"Ctrl-space",exec:function(e){var n=e.$editor,t=n.session.$isearchHighlight,a=t&&t.cache?t.cache.reduce(function(e,n){return e.concat(n||[])},[]):[];e.deactivate(!1),a.forEach(n.selection.addRange.bind(n.selection))}},{name:"searchAsRegExp",bindKey:"Alt-r",exec:function(e){e.convertNeedleToRegExp()}}].map(function(e){return e.readOnly=!0,e.isIncrementalSearchCommand=!0,e.scrollIntoView="animate-cursor",e}),r.inherits(a,s),function(){this.attach=function(a){var o=this.$iSearch;s.call(this,n.iSearchCommands,a.commands.platform),this.$commandExecHandler=a.commands.addEventListener("exec",function(e){if(!e.command.isIncrementalSearchCommand)return o.deactivate();e.stopPropagation(),e.preventDefault();var n=a.session.getScrollTop(),t=e.command.exec(o,e.args||{});return a.renderer.scrollCursorIntoView(null,.5),a.renderer.animateScrolling(n),t})},this.detach=function(e){this.$commandExecHandler&&(e.commands.removeEventListener("exec",this.$commandExecHandler),delete this.$commandExecHandler)};var i=this.handleKeyboard;this.handleKeyboard=function(e,n,t,a){if((1===n||8===n)&&"v"===t||1===n&&"y"===t)return null;var o=i.call(this,e,n,t,a);if(o.command)return o;if(-1==n){var r=this.commands.extendSearchTerm;if(r)return{command:r,args:t}}return!1}}.call(a.prototype),n.IncrementalSearchKeyboardHandler=a}),define("ace/incremental_search",["require","exports","module","ace/lib/oop","ace/range","ace/search","ace/search_highlight","ace/commands/incremental_search_commands","ace/lib/dom","ace/commands/command_manager","ace/editor","ace/config"],function(e,n,t){"use strict";function a(){this.$options={wrap:!1,skipCurrent:!1},this.$keyboardHandler=new u(this)}function o(e){return e instanceof RegExp}function r(e){var n=String(e),t=n.indexOf("/"),a=n.lastIndexOf("/");return{expression:n.slice(t+1,a),flags:n.slice(a+1)}}function i(n,e){try{return new RegExp(n,e)}catch(e){return n}}function s(e){return i(e.expression,e.flags)}var c=e("./lib/oop"),l=e("./range").Range,d=e("./search").Search,h=e("./search_highlight").SearchHighlight,m=e("./commands/incremental_search_commands"),u=m.IncrementalSearchKeyboardHandler;c.inherits(a,d),function(){this.activate=function(e,n){this.$editor=e,this.$startPos=this.$currentPos=e.getCursorPosition(),this.$options.needle="",this.$options.backwards=n,e.keyBinding.addKeyboardHandler(this.$keyboardHandler),this.$originalEditorOnPaste=e.onPaste,e.onPaste=this.onPaste.bind(this),this.$mousedownHandler=e.addEventListener("mousedown",this.onMouseDown.bind(this)),this.selectionFix(e),this.statusMessage(!0)},this.deactivate=function(e){this.cancelSearch(e);var n=this.$editor;n.keyBinding.removeKeyboardHandler(this.$keyboardHandler),this.$mousedownHandler&&(n.removeEventListener("mousedown",this.$mousedownHandler),delete this.$mousedownHandler),n.onPaste=this.$originalEditorOnPaste,this.message("")},this.selectionFix=function(e){e.selection.isEmpty()&&!e.session.$emacsMark&&e.clearSelection()},this.highlight=function(e){var n=this.$editor.session;(n.$isearchHighlight=n.$isearchHighlight||n.addDynamicMarker(new h(null,"ace_isearch-result","text"))).setRegexp(e),n._emit("changeBackMarker")},this.cancelSearch=function(e){var n=this.$editor;return this.$prevNeedle=this.$options.needle,this.$options.needle="",e?(n.moveCursorToPosition(this.$startPos),this.$currentPos=this.$startPos):n.pushEmacsMark&&n.pushEmacsMark(this.$startPos,!1),this.highlight(null),l.fromPoints(this.$currentPos,this.$currentPos)},this.highlightAndFindWithNeedle=function(e,n){if(!this.$editor)return null;var t=this.$options;if(n&&(t.needle=n.call(this,t.needle||"")||""),0===t.needle.length)return this.statusMessage(!0),this.cancelSearch(!0);t.start=this.$currentPos;var a=this.$editor.session,o=this.find(a),r=this.$editor.emacsMark?!!this.$editor.emacsMark():!this.$editor.selection.isEmpty();return o&&(t.backwards&&(o=l.fromPoints(o.end,o.start)),this.$editor.selection.setRange(l.fromPoints(r?this.$startPos:o.end,o.end)),e&&(this.$currentPos=o.end),this.highlight(t.re)),this.statusMessage(o),o},this.addString=function(t){return this.highlightAndFindWithNeedle(!1,function(e){if(!o(e))return e+t;var n=r(e);return n.expression+=t,s(n)})},this.removeChar=function(e){return this.highlightAndFindWithNeedle(!1,function(e){if(!o(e))return e.substring(0,e.length-1);var n=r(e);return n.expression=n.expression.substring(0,n.expression.length-1),s(n)})},this.next=function(n){return n=n||{},this.$options.backwards=!!n.backwards,this.$currentPos=this.$editor.getCursorPosition(),this.highlightAndFindWithNeedle(!0,function(e){return n.useCurrentOrPrevSearch&&0===e.length?this.$prevNeedle||"":e})},this.onMouseDown=function(e){return this.deactivate(),!0},this.onPaste=function(e){this.addString(e)},this.convertNeedleToRegExp=function(){return this.highlightAndFindWithNeedle(!1,function(e){return o(e)?e:i(e,"ig")})},this.convertNeedleToString=function(){return this.highlightAndFindWithNeedle(!1,function(e){return o(e)?r(e).expression:e})},this.statusMessage=function(e){var n=this.$options,t="";t+=n.backwards?"reverse-":"",t+="isearch: "+n.needle,t+=e?"":" (not found)",this.message(t)},this.message=function(e){this.$editor.showCommandLine?(this.$editor.showCommandLine(e),this.$editor.focus()):console.log(e)}}.call(a.prototype),n.IncrementalSearch=a;var g=e("./lib/dom");g.importCssString&&g.importCssString(".ace_marker-layer .ace_isearch-result {  position: absolute;  z-index: 6;  box-sizing: border-box;}div.ace_isearch-result {  border-radius: 4px;  background-color: rgba(255, 200, 0, 0.5);  box-shadow: 0 0 4px rgb(255, 200, 0);}.ace_dark div.ace_isearch-result {  background-color: rgb(100, 110, 160);  box-shadow: 0 0 4px rgb(80, 90, 140);}","incremental-search-highlighting");var f=e("./commands/command_manager");(function(){this.setupIncrementalSearch=function(e,n){if(this.usesIncrementalSearch!=n){this.usesIncrementalSearch=n;var t=m.iSearchStartCommands;this[n?"addCommands":"removeCommands"](t)}}}).call(f.CommandManager.prototype);var p=e("./editor").Editor;e("./config").defineOptions(p.prototype,"editor",{useIncrementalSearch:{set:function(n){this.keyBinding.$handlers.forEach(function(e){e.setupIncrementalSearch&&e.setupIncrementalSearch(this,n)}),this._emit("incrementalSearchSettingChanged",{isEnabled:n})}}})}),define("ace/keyboard/emacs",["require","exports","module","ace/lib/dom","ace/incremental_search","ace/commands/incremental_search_commands","ace/keyboard/hash_handler","ace/lib/keys"],function(e,r,n){"use strict";var t=e("../lib/dom");e("../incremental_search");var a=e("../commands/incremental_search_commands"),o=e("./hash_handler").HashHandler;r.handler=new o,r.handler.isEmacs=!0;var i,s,c=!(r.handler.$id="ace/keyboard/emacs");r.handler.attach=function(e){c||(c=!0,t.importCssString("            .emacs-mode .ace_cursor{                border: 1px rgba(50,250,50,0.8) solid!important;                box-sizing: border-box!important;                background-color: rgba(0,250,0,0.9);                opacity: 0.5;            }            .emacs-mode .ace_hidden-cursors .ace_cursor{                opacity: 1;                background-color: transparent;            }            .emacs-mode .ace_overwrite-cursors .ace_cursor {                opacity: 1;                background-color: transparent;                border-width: 0 0 2px 2px !important;            }            .emacs-mode .ace_text-layer {                z-index: 4            }            .emacs-mode .ace_cursor-layer {                z-index: 2            }","emacsMode")),i=e.session.$selectLongWords,e.session.$selectLongWords=!0,s=e.session.$useEmacsStyleLineStart,e.session.$useEmacsStyleLineStart=!0,e.session.$emacsMark=null,e.session.$emacsMarkRing=e.session.$emacsMarkRing||[],e.emacsMark=function(){return this.session.$emacsMark},e.setEmacsMark=function(e){this.session.$emacsMark=e},e.pushEmacsMark=function(e,n){var t=this.session.$emacsMark;t&&this.session.$emacsMarkRing.push(t),!e||n?this.setEmacsMark(e):this.session.$emacsMarkRing.push(e)},e.popEmacsMark=function(){var e=this.emacsMark();return e?(this.setEmacsMark(null),e):this.session.$emacsMarkRing.pop()},e.getLastEmacsMark=function(e){return this.session.$emacsMark||this.session.$emacsMarkRing.slice(-1)[0]},e.emacsMarkForSelection=function(e){var n=this.selection,t=this.multiSelect?this.multiSelect.getAllRanges().length:1,a=n.index||0,o=this.session.$emacsMarkRing,r=o.length-(t-a),i=o[r]||n.anchor;return e&&o.splice(r,1,"row"in e&&"column"in e?e:void 0),i},e.on("click",d),e.on("changeSession",l),e.renderer.$blockCursor=!0,e.setStyle("emacs-mode"),e.commands.addCommands(u),r.handler.platform=e.commands.platform,e.$emacsModeHandler=this,e.addEventListener("copy",this.onCopy),e.addEventListener("paste",this.onPaste)},r.handler.detach=function(e){e.renderer.$blockCursor=!1,e.session.$selectLongWords=i,e.session.$useEmacsStyleLineStart=s,e.removeEventListener("click",d),e.removeEventListener("changeSession",l),e.unsetStyle("emacs-mode"),e.commands.removeCommands(u),e.removeEventListener("copy",this.onCopy),e.removeEventListener("paste",this.onPaste),e.$emacsModeHandler=null};var l=function(e){e.oldSession&&(e.oldSession.$selectLongWords=i,e.oldSession.$useEmacsStyleLineStart=s),i=e.session.$selectLongWords,e.session.$selectLongWords=!0,s=e.session.$useEmacsStyleLineStart,e.session.$useEmacsStyleLineStart=!0,e.session.hasOwnProperty("$emacsMark")||(e.session.$emacsMark=null),e.session.hasOwnProperty("$emacsMarkRing")||(e.session.$emacsMarkRing=[])},d=function(e){e.editor.session.$emacsMark=null},h=e("../lib/keys").KEY_MODS,m={C:"ctrl",S:"shift",M:"alt",CMD:"command"};["C-S-M-CMD","S-M-CMD","C-M-CMD","C-S-CMD","C-S-M","M-CMD","S-CMD","S-M","C-CMD","C-M","C-S","CMD","M","S","C"].forEach(function(e){var n=0;e.split("-").forEach(function(e){n|=h[m[e]]}),m[n]=e.toLowerCase()+"-"}),r.handler.onCopy=function(e,n){n.$handlesEmacsOnCopy||(n.$handlesEmacsOnCopy=!0,r.handler.commands.killRingSave.exec(n),n.$handlesEmacsOnCopy=!1)},r.handler.onPaste=function(e,n){n.pushEmacsMark(n.getCursorPosition())},r.handler.bindKey=function(e,n){if("object"==typeof e&&(e=e[this.platform]),e){var t=this.commandKeyBinding;e.split("|").forEach(function(e){e=e.toLowerCase(),t[e]=n,e.split(" ").slice(0,-1).reduce(function(e,n,t){var a=e[t-1]?e[t-1]+" ":"";return e.concat([a+n])},[]).forEach(function(e){t[e]||(t[e]="null")})},this)}},r.handler.getStatusText=function(e,n){var t="";return n.count&&(t+=n.count),n.keyChain&&(t+=" "+n.keyChain),t},r.handler.handleKeyboard=function(e,n,t,a){if(-1!==a){var o=e.editor;if(o._signal("changeStatus"),-1==n&&(o.pushEmacsMark(),e.count)){var r=new Array(e.count+1).join(t);return e.count=null,{command:"insertstring",args:r}}var i=m[n];if("c-"==i||e.count)if("number"==typeof(l=parseInt(t[t.length-1]))&&!isNaN(l))return e.count=Math.max(e.count,0)||0,e.count=10*e.count+l,{command:"null"};i&&(t=i+t),e.keyChain&&(t=e.keyChain+=" "+t);var s=this.commandKeyBinding[t];if(e.keyChain="null"==s?t:"",s){if("null"===s)return{command:"null"};if("universalArgument"===s)return e.count=-4,{command:"null"};var c;if("string"!=typeof s&&(c=s.args,s.command&&(s=s.command),"goorselect"===s&&(s=o.emacsMark()?c[1]:c[0],c=null)),"string"!=typeof s||(("insertstring"===s||"splitline"===s||"togglecomment"===s)&&o.pushEmacsMark(),s=this.commands[s]||o.commands.commands[s])){if(!s.readOnly&&!s.isYank&&(e.lastCommand=null),!s.readOnly&&o.emacsMark()&&o.setEmacsMark(null),e.count){var l=e.count;if(e.count=0,!s||!s.handlesCount)return{args:c,command:{exec:function(e,n){for(var t=0;t<l;t++)s.exec(e,n)},multiSelectAction:s.multiSelectAction}};c||(c={}),"object"==typeof c&&(c.count=l)}return{command:s,args:c}}}}},r.emacsKeys={"Up|C-p":{command:"goorselect",args:["golineup","selectup"]},"Down|C-n":{command:"goorselect",args:["golinedown","selectdown"]},"Left|C-b":{command:"goorselect",args:["gotoleft","selectleft"]},"Right|C-f":{command:"goorselect",args:["gotoright","selectright"]},"C-Left|M-b":{command:"goorselect",args:["gotowordleft","selectwordleft"]},"C-Right|M-f":{command:"goorselect",args:["gotowordright","selectwordright"]},"Home|C-a":{command:"goorselect",args:["gotolinestart","selecttolinestart"]},"End|C-e":{command:"goorselect",args:["gotolineend","selecttolineend"]},"C-Home|S-M-,":{command:"goorselect",args:["gotostart","selecttostart"]},"C-End|S-M-.":{command:"goorselect",args:["gotoend","selecttoend"]},"S-Up|S-C-p":"selectup","S-Down|S-C-n":"selectdown","S-Left|S-C-b":"selectleft","S-Right|S-C-f":"selectright","S-C-Left|S-M-b":"selectwordleft","S-C-Right|S-M-f":"selectwordright","S-Home|S-C-a":"selecttolinestart","S-End|S-C-e":"selecttolineend","S-C-Home":"selecttostart","S-C-End":"selecttoend","C-l":"recenterTopBottom","M-s":"centerselection","M-g":"gotoline","C-x C-p":"selectall","C-Down":{command:"goorselect",args:["gotopagedown","selectpagedown"]},"C-Up":{command:"goorselect",args:["gotopageup","selectpageup"]},"PageDown|C-v":{command:"goorselect",args:["gotopagedown","selectpagedown"]},"PageUp|M-v":{command:"goorselect",args:["gotopageup","selectpageup"]},"S-C-Down":"selectpagedown","S-C-Up":"selectpageup","C-s":"iSearch","C-r":"iSearchBackwards","M-C-s":"findnext","M-C-r":"findprevious","S-M-5":"replace",Backspace:"backspace","Delete|C-d":"del","Return|C-m":{command:"insertstring",args:"\n"},"C-o":"splitline","M-d|C-Delete":{command:"killWord",args:"right"},"C-Backspace|M-Backspace|M-Delete":{command:"killWord",args:"left"},"C-k":"killLine","C-y|S-Delete":"yank","M-y":"yankRotate","C-g":"keyboardQuit","C-w|C-S-W":"killRegion","M-w":"killRingSave","C-Space":"setMark","C-x C-x":"exchangePointAndMark","C-t":"transposeletters","M-u":"touppercase","M-l":"tolowercase","M-/":"autocomplete","C-u":"universalArgument","M-;":"togglecomment","C-/|C-x u|S-C--|C-z":"undo","S-C-/|S-C-x u|C--|S-C-z":"redo","C-x r":"selectRectangularRegion","M-x":{command:"focusCommandLine",args:"M-x "}},r.handler.bindKeys(r.emacsKeys),r.handler.addCommands({recenterTopBottom:function(e){var n=e.renderer,t=n.$cursorLayer.getPixelPosition(),a=n.$size.scrollerHeight-n.lineHeight,o=n.scrollTop;o=Math.abs(t.top-o)<2?t.top-a:Math.abs(t.top-o-.5*a)<2?t.top:t.top-.5*a,e.session.setScrollTop(o)},selectRectangularRegion:function(e){e.multiSelect.toggleBlockSelection()},setMark:{exec:function(n,e){function t(){var e=n.popEmacsMark();e&&n.moveCursorToPosition(e)}if(e&&e.count)return n.inMultiSelectMode?n.forEachSelection(t):t(),void t();var a=n.emacsMark(),o=n.selection.getAllRanges(),r=o.map(function(e){return{row:e.start.row,column:e.start.column}}),i=o.every(function(e){return e.isEmpty()});return a||!i?(n.inMultiSelectMode?n.forEachSelection({exec:n.clearSelection.bind(n)}):n.clearSelection(),void(a&&n.pushEmacsMark(null))):a?void 0:(r.forEach(function(e){n.pushEmacsMark(e)}),void n.setEmacsMark(r[r.length-1]))},readOnly:!0,handlesCount:!0},exchangePointAndMark:{exec:function(e,n){var t=e.selection;if(n.count||t.isEmpty())if(n.count){var a={row:t.lead.row,column:t.lead.column};t.clearSelection(),t.moveCursorToPosition(e.emacsMarkForSelection(a))}else t.selectToPosition(e.emacsMarkForSelection());else t.setSelectionRange(t.getRange(),!t.isBackwards())},readOnly:!0,handlesCount:!0,multiSelectAction:"forEach"},killWord:{exec:function(e,n){e.clearSelection(),"left"==n?e.selection.selectWordLeft():e.selection.selectWordRight();var t=e.getSelectionRange(),a=e.session.getTextRange(t);r.killRing.add(a),e.session.remove(t),e.clearSelection()},multiSelectAction:"forEach"},killLine:function(e){e.pushEmacsMark(null),e.clearSelection();var n=e.getSelectionRange(),t=e.session.getLine(n.start.row);n.end.column=t.length,t=t.substr(n.start.column);var a=e.session.getFoldLine(n.start.row);a&&n.end.row!=a.end.row&&(n.end.row=a.end.row,t="x"),/^\s*$/.test(t)&&(n.end.row++,t=e.session.getLine(n.end.row),n.end.column=/^\s*$/.test(t)?t.length:0);var o=e.session.getTextRange(n);e.prevOp.command==this?r.killRing.append(o):r.killRing.add(o),e.session.remove(n),e.clearSelection()},yank:function(e){e.onPaste(r.killRing.get()||""),e.keyBinding.$data.lastCommand="yank"},yankRotate:function(e){"yank"==e.keyBinding.$data.lastCommand&&(e.undo(),e.session.$emacsMarkRing.pop(),e.onPaste(r.killRing.rotate()),e.keyBinding.$data.lastCommand="yank")},killRegion:{exec:function(e){r.killRing.add(e.getCopyText()),e.commands.byName.cut.exec(e),e.setEmacsMark(null)},readOnly:!0,multiSelectAction:"forEach"},killRingSave:{exec:function(a){a.$handlesEmacsOnCopy=!0;var n=a.session.$emacsMarkRing.slice(),o=[];r.killRing.add(a.getCopyText()),setTimeout(function(){function e(){var e=a.selection,n=e.getRange(),t=e.isBackwards()?n.end:n.start;o.push({row:t.row,column:t.column}),e.clearSelection()}a.$handlesEmacsOnCopy=!1,a.inMultiSelectMode?a.forEachSelection({exec:e}):e(),a.session.$emacsMarkRing=n.concat(o.reverse())},0)},readOnly:!0},keyboardQuit:function(e){e.selection.clearSelection(),e.setEmacsMark(null),e.keyBinding.$data.count=null},focusCommandLine:function(e,n){e.showCommandLine&&e.showCommandLine(n)}}),r.handler.addCommands(a.iSearchStartCommands);var u=r.handler.commands;u.yank.isYank=!0,u.yankRotate.isYank=!0,r.killRing={$data:[],add:function(e){e&&this.$data.push(e),30<this.$data.length&&this.$data.shift()},append:function(e){var n=this.$data.length-1,t=this.$data[n]||"";e&&(t+=e),t&&(this.$data[n]=t)},get:function(e){return e=e||1,this.$data.slice(this.$data.length-e,this.$data.length).reverse().join("\n")},pop:function(){return 1<this.$data.length&&this.$data.pop(),this.get()},rotate:function(){return this.$data.unshift(this.$data.pop()),this.get()}}}),window.require(["ace/keyboard/emacs"],function(e){"object"==typeof module&&"object"==typeof exports&&module&&(module.exports=e)});