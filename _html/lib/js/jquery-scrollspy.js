/*!
 * jQuery Scrollspy Plugin
 * Author: @sxalexander
 * Licensed under the MIT license
 */

!function(e,n){e.fn.extend({scrollspy:function(i){var o={min:0,max:0,mode:"vertical",buffer:0,container:n,onEnter:i.onEnter?i.onEnter:[],onLeave:i.onLeave?i.onLeave:[],onTick:i.onTick?i.onTick:[]},i=e.extend({},o,i);return this.each(function(){var n=this,o=i,t=e(o.container),r=o.mode,s=o.buffer,c=leaves=0,a=!1;t.bind("scroll",function(){var i={top:e(this).scrollTop(),left:e(this).scrollLeft()},l="vertical"==r?i.top+s:i.left+s,v=o.max,u=o.min;e.isFunction(o.max)&&(v=o.max()),e.isFunction(o.min)&&(u=o.min()),0==v&&(v="vertical"==r?t.height():t.outerWidth()+e(n).outerWidth()),l>=o.min&&v>=l?(a||(a=!0,c++,e(n).trigger("scrollEnter",{position:i}),e.isFunction(o.onEnter)&&o.onEnter(n,i)),e(n).trigger("scrollTick",{position:i,inside:a,enters:c,leaves:leaves}),e.isFunction(o.onTick)&&o.onTick(n,i,a,c,leaves)):a&&(a=!1,leaves++,e(n).trigger("scrollLeave",{position:i,leaves:leaves}),e.isFunction(o.onLeave)&&o.onLeave(n,i))})})}})}(jQuery,window);