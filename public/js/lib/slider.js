"use strict";class Slider{constructor(t){$.extend(this,t),this.init()}actions(t){switch(this.timer(!1),t){case"dot":break;case"next":this.node=0,$(this.slide+".active").index()!=$(this.slide).length-1&&(this.node=$(this.slide+".active").index()+1);break;case"prev":this.node=0,0!=$(this.slide+".active").index()&&(this.node=$(this.slide+".active").index()-1)}this.changer()}timer(t){t?this["timer_"+this.instance]=setTimeout(()=>{$(this.container+" .next").trigger("click")},this.duration):clearTimeout(this["timer_"+this.instance])}buttons(){$(this.container).on("click",".dots i",t=>{this.node=$(t.currentTarget).index(),this.actions("dot")}),$(this.container).on("click",".prev",()=>{this.actions("prev")}),$(this.container).on("click",".next",()=>{this.actions("next")})}changer(){$(this.slide).removeClass("active").eq(this.node).addClass("active"),$(this.container).find(".dots i").removeClass("active").eq(this.node).addClass("active"),this.autoplay&&this.timer(!0)}dom(t,i){return $("<"+t+">").clone().addClass(i)}make_arrows(){let t=this.dom("div","prev"),i=this.dom("div","next"),s=this.dom("i","fal fa-angle-left"),e=this.dom("i","fal fa-angle-right");$(this.container).append(t.append(s),i.append(e))}make_dots(){let t=this.dom("div","dots");$(this.container).append(t),$(this.slide).length>1&&$(this.slide).each((i,s)=>{let e=this.dom("i","fa fa-circle");$(this.container).append(t.append(e))})}init(){this.node=0,this.instance=Math.round(1e5*Math.random()),this.duration="duration"in this?this.duration:6e3,this.dots=!("dots"in this)||this.dots,this.autoplay=!("autoplay"in this)||this.autoplay,this.slide="slide"in this?this.container+" "+this.slide:this.container+" .slide",this.dots&&$(this.slide).length>1&&this.make_dots(),$(this.slide).length>1&&this.make_arrows(),this.buttons(),$(this.slide+":first-of-type").addClass("active"),this.changer(0)}}
//# sourceMappingURL=slider.js.map