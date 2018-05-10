(function(e){
	"use strict";
	e.fn.counter=function(t){
	var n=e.extend({time:500,delay:10},t);
	return this.each(function(){
		var t=e(this),r=n,i=function(){
			var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");
			var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;
			for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");
				e.unshift(l)}t.data("counter-number",e);
			t.text("0");
			var tn=function(){
				t.text(t.data("counter-number").shift());if(t.data("counter-number").length)setTimeout(t.data("counter-function"),r.delay);else{
					delete t.data("counter-number");t.data("counter-number",null);
					t.data("counter-function",null)}};
					t.data("counter-function",tn);
					setTimeout(t.data("counter-function"),r.delay)};
					t.waypoint(i,{offset:"100%",triggerOnce:!0
				})
				})
}
})

(jQuery);