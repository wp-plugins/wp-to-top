var toTop = {
	init: function(){
		if(toTop.getScrolledAmountY() > 0){
			//if(YAHOO.util.Dom.getStyle('takeMeUpContainer', 'display') != 'block'){
				YAHOO.util.Dom.setStyle('takeMeUpContainer', 'display', 'block');
				var attributes = {
					opacity: { from: 0, to: 1 }
				};
				var effect = new YAHOO.util.Anim('takeMeUpContainer', attributes, 0.5);
				effect.animate();
			//}
		}
		else{
			//if(YAHOO.util.Dom.getStyle('takeMeUpContainer', 'display') != 'none'){
				var attributes = {
					opacity: { from: 1, to: 0 }
					};
				var effect = new YAHOO.util.Anim('takeMeUpContainer', attributes, 0.5);
				effect.animate();
				effect.onComplete.subscribe(function() {
					YAHOO.util.Dom.setStyle('takeMeUpContainer', 'display', 'none');
				});
			//}
		}
	},
	
	getScrolledAmount: function(){
		var x,y;
		if (typeof(self.pageYOffset) != 'undefined' ){ // all but
			x = self.pageXOffset;
			y = self.pageYOffset;
		}else if (document.documentElement && typeof(document.documentElement.scrollTop)!='undefined'){
			// IE Standards mode
			x = document.documentElement.scrollLeft;
			y = document.documentElement.scrollTop;
		}else if(document.body){ // IE Quirks mode
			x = document.body.scrollLeft;
			y = document.body.scrollTop;
		}

		var values = new Array();
		values.x = x;
		values.y = y;
		return values;
	},

	getScrolledAmountY: function(){
		var y;
		if (typeof(self.pageYOffset) != 'undefined' ){ // all but
		y = self.pageYOffset;
		}else if (document.documentElement && typeof(document.documentElement.scrollTop)!='undefined'){
			// IE Standards mode
			y = document.documentElement.scrollTop;
		}else if(document.body){ // IE Quirks mode
			y = document.body.scrollTop;
		}

		return y;
	},

	setAttr: function(a, v, u) {
		window.scroll(0, v);
	},
	
	scrollToTop: function(e){
		var scrolledAmountY = toTop.getScrolledAmountY();
		var anim = new YAHOO.util.Anim(null,
				{'scroll' : {
					from : scrolledAmountY ,
					to : 0 }
				},
			0.5);
			anim.setAttribute = toTop.setAttr;
			anim.animate();
	}
};
YAHOO.util.Event.on(window, 'scroll', toTop.init);
YAHOO.util.Event.on('takeMeUp', 'click', toTop.scrollToTop);