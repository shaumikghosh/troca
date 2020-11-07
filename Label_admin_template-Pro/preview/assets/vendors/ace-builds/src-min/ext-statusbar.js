define("ace/ext/statusbar",["require","exports","module","ace/lib/dom","ace/lib/lang"],function(e,t,n){"use strict";var a=e("ace/lib/dom"),o=e("ace/lib/lang"),i=function(e,t){this.element=a.createElement("div"),this.element.className="ace_status-indicator",this.element.style.cssText="display: inline-block;",t.appendChild(this.element);var n=o.delayedCall(function(){this.updateStatus(e)}.bind(this)).schedule.bind(null,100);e.on("changeStatus",n),e.on("changeSelection",n),e.on("keyboardActivity",n)};(function(){this.updateStatus=function(e){function t(e,t){e&&n.push(e,t||"|")}var n=[];t(e.keyBinding.getStatusText(e)),e.commands.recording&&t("REC");var a=e.selection,o=a.lead;if(!a.isEmpty()){var i=e.getSelectionRange();t("("+(i.end.row-i.start.row)+":"+(i.end.column-i.start.column)+")"," ")}t(o.row+":"+o.column," "),a.rangeCount&&t("["+a.rangeCount+"]"," "),n.pop(),this.element.textContent=n.join("")}}).call(i.prototype),t.StatusBar=i}),window.require(["ace/ext/statusbar"],function(e){"object"==typeof module&&"object"==typeof exports&&module&&(module.exports=e)});