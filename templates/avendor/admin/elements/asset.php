<?php

/*
# -------------------------------------------------------------------------
# Custom Field Asset for Joomla Backend (load JS and CSS files)
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2013 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die;

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField {
	protected $type = 'Asset';

	protected function getInput() {  
		return null;
	}
}
$doc =& JFactory::getDocument();
$doc->addStyleSheet( 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );


?>

<script type="text/javascript">

!function(a,b){function c(a,b,c){return[parseFloat(a[0])*(n.test(a[0])?b/100:1),parseFloat(a[1])*(n.test(a[1])?c/100:1)]}function d(b,c){return parseInt(a.css(b,c),10)||0}function e(b){var c=b[0];return 9===c.nodeType?{width:b.width(),height:b.height(),offset:{top:0,left:0}}:a.isWindow(c)?{width:b.width(),height:b.height(),offset:{top:b.scrollTop(),left:b.scrollLeft()}}:c.preventDefault?{width:0,height:0,offset:{top:c.pageY,left:c.pageX}}:{width:b.outerWidth(),height:b.outerHeight(),offset:b.offset()}}a.ui=a.ui||{};var f,g=Math.max,h=Math.abs,i=Math.round,j=/left|center|right/,k=/top|center|bottom/,l=/[\+\-]\d+(\.[\d]+)?%?/,m=/^\w+/,n=/%$/,o=a.fn.pos;a.pos={scrollbarWidth:function(){if(f!==b)return f;var c,d,e=a("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),g=e.children()[0];return a("body").append(e),c=g.offsetWidth,e.css("overflow","scroll"),d=g.offsetWidth,c===d&&(d=e[0].clientWidth),e.remove(),f=c-d},getScrollInfo:function(b){var c=b.isWindow||b.isDocument?"":b.element.css("overflow-x"),d=b.isWindow||b.isDocument?"":b.element.css("overflow-y"),e="scroll"===c||"auto"===c&&b.width<b.element[0].scrollWidth,f="scroll"===d||"auto"===d&&b.height<b.element[0].scrollHeight;return{width:f?a.pos.scrollbarWidth():0,height:e?a.pos.scrollbarWidth():0}},getWithinInfo:function(b){var c=a(b||window),d=a.isWindow(c[0]),e=!!c[0]&&9===c[0].nodeType;return{element:c,isWindow:d,isDocument:e,offset:c.offset()||{left:0,top:0},scrollLeft:c.scrollLeft(),scrollTop:c.scrollTop(),width:d?c.width():c.outerWidth(),height:d?c.height():c.outerHeight()}}},a.fn.pos=function(b){if(!b||!b.of)return o.apply(this,arguments);b=a.extend({},b);var f,n,p,q,r,s,t=a(b.of),u=a.pos.getWithinInfo(b.within),v=a.pos.getScrollInfo(u),w=(b.collision||"flip").split(" "),x={};return s=e(t),t[0].preventDefault&&(b.at="left top"),n=s.width,p=s.height,q=s.offset,r=a.extend({},q),a.each(["my","at"],function(){var a,c,d=(b[this]||"").split(" ");1===d.length&&(d=j.test(d[0])?d.concat(["center"]):k.test(d[0])?["center"].concat(d):["center","center"]),d[0]=j.test(d[0])?d[0]:"center",d[1]=k.test(d[1])?d[1]:"center",a=l.exec(d[0]),c=l.exec(d[1]),x[this]=[a?a[0]:0,c?c[0]:0],b[this]=[m.exec(d[0])[0],m.exec(d[1])[0]]}),1===w.length&&(w[1]=w[0]),"right"===b.at[0]?r.left+=n:"center"===b.at[0]&&(r.left+=n/2),"bottom"===b.at[1]?r.top+=p:"center"===b.at[1]&&(r.top+=p/2),f=c(x.at,n,p),r.left+=f[0],r.top+=f[1],this.each(function(){var e,j,k=a(this),l=k.outerWidth(),m=k.outerHeight(),o=d(this,"marginLeft"),s=d(this,"marginTop"),y=l+o+d(this,"marginRight")+v.width,z=m+s+d(this,"marginBottom")+v.height,A=a.extend({},r),B=c(x.my,k.outerWidth(),k.outerHeight());"right"===b.my[0]?A.left-=l:"center"===b.my[0]&&(A.left-=l/2),"bottom"===b.my[1]?A.top-=m:"center"===b.my[1]&&(A.top-=m/2),A.left+=B[0],A.top+=B[1],a.support.offsetFractions||(A.left=i(A.left),A.top=i(A.top)),e={marginLeft:o,marginTop:s},a.each(["left","top"],function(c,d){a.ui.pos[w[c]]&&a.ui.pos[w[c]][d](A,{targetWidth:n,targetHeight:p,elemWidth:l,elemHeight:m,collisionPosition:e,collisionWidth:y,collisionHeight:z,offset:[f[0]+B[0],f[1]+B[1]],my:b.my,at:b.at,within:u,elem:k})}),b.using&&(j=function(a){var c=q.left-A.left,d=c+n-l,e=q.top-A.top,f=e+p-m,i={target:{element:t,left:q.left,top:q.top,width:n,height:p},element:{element:k,left:A.left,top:A.top,width:l,height:m},horizontal:0>d?"left":c>0?"right":"center",vertical:0>f?"top":e>0?"bottom":"middle"};l>n&&h(c+d)<n&&(i.horizontal="center"),m>p&&h(e+f)<p&&(i.vertical="middle"),i.important=g(h(c),h(d))>g(h(e),h(f))?"horizontal":"vertical",b.using.call(this,a,i)}),k.offset(a.extend(A,{using:j}))})},a.ui.pos={_trigger:function(a,b,c,d){b.elem&&b.elem.trigger({type:c,position:a,positionData:b,triggered:d})},fit:{left:function(b,c){a.ui.pos._trigger(b,c,"posCollide","fitLeft");var d,e=c.within,f=e.isWindow?e.scrollLeft:e.offset.left,h=e.width,i=b.left-c.collisionPosition.marginLeft,j=f-i,k=i+c.collisionWidth-h-f;c.collisionWidth>h?j>0&&0>=k?(d=b.left+j+c.collisionWidth-h-f,b.left+=j-d):b.left=k>0&&0>=j?f:j>k?f+h-c.collisionWidth:f:j>0?b.left+=j:k>0?b.left-=k:b.left=g(b.left-i,b.left),a.ui.pos._trigger(b,c,"posCollided","fitLeft")},top:function(b,c){a.ui.pos._trigger(b,c,"posCollide","fitTop");var d,e=c.within,f=e.isWindow?e.scrollTop:e.offset.top,h=c.within.height,i=b.top-c.collisionPosition.marginTop,j=f-i,k=i+c.collisionHeight-h-f;c.collisionHeight>h?j>0&&0>=k?(d=b.top+j+c.collisionHeight-h-f,b.top+=j-d):b.top=k>0&&0>=j?f:j>k?f+h-c.collisionHeight:f:j>0?b.top+=j:k>0?b.top-=k:b.top=g(b.top-i,b.top),a.ui.pos._trigger(b,c,"posCollided","fitTop")}},flip:{left:function(b,c){a.ui.pos._trigger(b,c,"posCollide","flipLeft");var d,e,f=c.within,g=f.offset.left+f.scrollLeft,i=f.width,j=f.isWindow?f.scrollLeft:f.offset.left,k=b.left-c.collisionPosition.marginLeft,l=k-j,m=k+c.collisionWidth-i-j,n="left"===c.my[0]?-c.elemWidth:"right"===c.my[0]?c.elemWidth:0,o="left"===c.at[0]?c.targetWidth:"right"===c.at[0]?-c.targetWidth:0,p=-2*c.offset[0];0>l?(d=b.left+n+o+p+c.collisionWidth-i-g,(0>d||d<h(l))&&(b.left+=n+o+p)):m>0&&(e=b.left-c.collisionPosition.marginLeft+n+o+p-j,(e>0||h(e)<m)&&(b.left+=n+o+p)),a.ui.pos._trigger(b,c,"posCollided","flipLeft")},top:function(b,c){a.ui.pos._trigger(b,c,"posCollide","flipTop");var d,e,f=c.within,g=f.offset.top+f.scrollTop,i=f.height,j=f.isWindow?f.scrollTop:f.offset.top,k=b.top-c.collisionPosition.marginTop,l=k-j,m=k+c.collisionHeight-i-j,n="top"===c.my[1],o=n?-c.elemHeight:"bottom"===c.my[1]?c.elemHeight:0,p="top"===c.at[1]?c.targetHeight:"bottom"===c.at[1]?-c.targetHeight:0,q=-2*c.offset[1];0>l?(e=b.top+o+p+q+c.collisionHeight-i-g,b.top+o+p+q>l&&(0>e||e<h(l))&&(b.top+=o+p+q)):m>0&&(d=b.top-c.collisionPosition.marginTop+o+p+q-j,b.top+o+p+q>m&&(d>0||h(d)<m)&&(b.top+=o+p+q)),a.ui.pos._trigger(b,c,"posCollided","flipTop")}},flipfit:{left:function(){a.ui.pos.flip.left.apply(this,arguments),a.ui.pos.fit.left.apply(this,arguments)},top:function(){a.ui.pos.flip.top.apply(this,arguments),a.ui.pos.fit.top.apply(this,arguments)}}},function(){var b,c,d,e,f,g=document.getElementsByTagName("body")[0],h=document.createElement("div");b=document.createElement(g?"div":"body"),d={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},g&&a.extend(d,{position:"absolute",left:"-1000px",top:"-1000px"});for(f in d)b.style[f]=d[f];b.appendChild(h),c=g||document.documentElement,c.insertBefore(b,c.firstChild),h.style.cssText="position: absolute; left: 10.7432222px;",e=a(h).offset().left,a.support.offsetFractions=e>10&&11>e,b.innerHTML="",c.removeChild(b)}()}(jQuery),function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):window.jQuery&&!window.jQuery.fn.iconpicker&&a(window.jQuery)}(function(a){"use strict";var b={isEmpty:function(a){return a===!1||""===a||null===a||void 0===a},isEmptyObject:function(a){return this.isEmpty(a)===!0||0===a.length},isElement:function(b){return a(b).length>0},isString:function(a){return"string"==typeof a||a instanceof String},isArray:function(b){return a.isArray(b)},inArray:function(b,c){return-1!==a.inArray(b,c)},throwError:function(a){throw"Font Awesome Icon Picker Exception: "+a}},c=function(d,e){this._id=c._idCounter++,this.element=a(d).addClass("iconpicker-element"),this._trigger("iconpickerCreate"),this.options=a.extend({},c.defaultOptions,this.element.data(),e),this.options.templates=a.extend({},c.defaultOptions.templates,this.options.templates),this.options.originalPlacement=this.options.placement,this.container=b.isElement(this.options.container)?a(this.options.container):!1,this.container===!1&&(this.container=this.element.is("input")?this.element.parent():this.element),this.container.addClass("iconpicker-container").is(".dropdown-menu")&&(this.options.placement="inline"),this.input=this.element.is("input")?this.element.addClass("iconpicker-input"):!1,this.input===!1&&(this.input=this.container.find(this.options.input)),this.component=this.container.find(this.options.component).addClass("iconpicker-component"),0===this.component.length?this.component=!1:this.component.find("i").addClass(this.options.iconComponentBaseClass),this._createPopover(),this._createIconpicker(),0===this.getAcceptButton().length&&(this.options.mustAccept=!1),this.container.is(".input-group")?this.container.parent().append(this.popover):this.container.append(this.popover),this._bindElementEvents(),this._bindWindowEvents(),this.update(this.options.selected),this.isInline()&&this.show(),this._trigger("iconpickerCreated")};c._idCounter=0,c.defaultOptions={title:!1,selected:!1,defaultValue:!1,placement:"bottom",collision:"none",animation:!0,hideOnSelect:!1,showFooter:!1,searchInFooter:!1,mustAccept:!1,selectedCustomClass:"bg-primary",icons:[],iconBaseClass:"fa",iconComponentBaseClass:"fa fa-fw",iconClassPrefix:"fa-",input:"input",component:".input-group-addon",container:!1,templates:{popover:'<div class="iconpicker-popover popover"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',footer:'<div class="popover-footer"></div>',buttons:'<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button> <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',search:'<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',iconpicker:'<div class="iconpicker"><div class="iconpicker-items"></div></div>',iconpickerItem:'<div class="iconpicker-item"><i></i></div>'}},c.batch=function(b,c){var d=Array.prototype.slice.call(arguments,2);return a(b).each(function(){var b=a(this).data("iconpicker");b&&b[c].apply(b,d)})},c.prototype={constructor:c,options:{},_id:0,_trigger:function(b,c){c=c||{},this.element.trigger(a.extend({type:b,iconpickerInstance:this},c))},_createPopover:function(){this.popover=a(this.options.templates.popover);var c=this.popover.find(".popover-title");if(this.options.title&&c.append(a('<div class="popover-title-text">'+this.options.title+"</div>")),this.options.searchInFooter||b.isEmpty(this.options.templates.buttons)?this.options.title||c.remove():c.append(this.options.templates.search),this.options.showFooter&&!b.isEmpty(this.options.templates.footer)){var d=a(this.options.templates.footer);!b.isEmpty(this.options.templates.search)&&this.options.searchInFooter&&d.append(a(this.options.templates.search)),b.isEmpty(this.options.templates.buttons)||d.append(a(this.options.templates.buttons)),this.popover.append(d)}return this.options.animation===!0&&this.popover.addClass("fade"),this.popover},_createIconpicker:function(){var b=this;this.iconpicker=a(this.options.templates.iconpicker);var c=function(){var c=a(this);c.is("."+b.options.iconBaseClass)&&(c=c.parent()),b._trigger("iconpickerSelect",{iconpickerItem:c,iconpickerValue:b.iconpickerValue}),b.options.mustAccept===!1?(b.update(c.data("iconpickerValue")),b._trigger("iconpickerSelected",{iconpickerItem:this,iconpickerValue:b.iconpickerValue})):b.update(c.data("iconpickerValue"),!0),b.options.hideOnSelect&&b.options.mustAccept===!1&&b.hide()};for(var d in this.options.icons){var e=a(this.options.templates.iconpickerItem);e.find("i").addClass(b.options.iconBaseClass+" "+this.options.iconClassPrefix+this.options.icons[d]),e.data("iconpickerValue",this.options.icons[d]).on("click.iconpicker",c),this.iconpicker.find(".iconpicker-items").append(e.attr("title","."+this.getValue(this.options.icons[d])))}return this.popover.find(".popover-content").append(this.iconpicker),this.iconpicker},_isEventInsideIconpicker:function(b){var c=a(b.target);return c.hasClass("iconpicker-element")&&(!c.hasClass("iconpicker-element")||c.is(this.element))||0!==c.parents(".iconpicker-popover").length?!0:!1},_bindElementEvents:function(){var c=this;this.getSearchInput().on("keyup",function(){c.filter(a(this).val().toLowerCase())}),this.getAcceptButton().on("click.iconpicker",function(){var a=c.iconpicker.find(".iconpicker-selected").get(0);c.update(c.iconpickerValue),c._trigger("iconpickerSelected",{iconpickerItem:a,iconpickerValue:c.iconpickerValue}),c.isInline()||c.hide()}),this.getCancelButton().on("click.iconpicker",function(){c.isInline()||c.hide()}),this.element.on("focus.iconpicker",function(a){c.show(),a.stopPropagation()}),this.hasComponent()&&this.component.on("click.iconpicker",function(){c.toggle()}),this.hasInput()&&this.input.on("keyup.iconpicker",function(a){b.inArray(a.keyCode,[38,40,37,39,16,17,18,9,8,91,93,20,46,186,190,46,78,188,44,86])?c._updateFormGroupStatus(c.getValid(this.value)!==!1):c.update()})},_bindWindowEvents:function(){var b=a(window.document),c=this,d=".iconpicker.inst"+this._id;return a(window).on("resize.iconpicker"+d+" orientationchange.iconpicker"+d,function(){c.popover.hasClass("in")&&c.updatePlacement()}),c.isInline()||b.on("mouseup"+d,function(a){return c._isEventInsideIconpicker(a)||c.isInline()||c.hide(),a.stopPropagation(),a.preventDefault(),!1}),!1},_unbindElementEvents:function(){this.popover.off(".iconpicker"),this.element.off(".iconpicker"),this.hasInput()&&this.input.off(".iconpicker"),this.hasComponent()&&this.component.off(".iconpicker"),this.hasContainer()&&this.container.off(".iconpicker")},_unbindWindowEvents:function(){a(window).off(".iconpicker.inst"+this._id),a(window.document).off(".iconpicker.inst"+this._id)},updatePlacement:function(b,c){b=b||this.options.placement,this.options.placement=b,c=c||this.options.collision,c=c===!0?"flip":c;var d={at:"right bottom",my:"right top",of:this.hasInput()?this.input:this.container,collision:c===!0?"flip":c,within:window};if(this.popover.removeClass("inline topLeftCorner topLeft top topRight topRightCorner rightTop right rightBottom bottomRight bottomRightCorner bottom bottomLeft bottomLeftCorner leftBottom left leftTop"),"object"==typeof b)return this.popover.pos(a.extend({},d,b));switch(b){case"inline":d=!1;break;case"topLeftCorner":d.my="right bottom",d.at="left top";break;case"topLeft":d.my="left bottom",d.at="left top";break;case"top":d.my="center bottom",d.at="center top";break;case"topRight":d.my="right bottom",d.at="right top";break;case"topRightCorner":d.my="left bottom",d.at="right top";break;case"rightTop":d.my="left bottom",d.at="right center";break;case"right":d.my="left center",d.at="right center";break;case"rightBottom":d.my="left top",d.at="right center";break;case"bottomRightCorner":d.my="left top",d.at="right bottom";break;case"bottomRight":d.my="right top",d.at="right bottom";break;case"bottom":d.my="center top",d.at="center bottom";break;case"bottomLeft":d.my="left top",d.at="left bottom";break;case"bottomLeftCorner":d.my="right top",d.at="left bottom";break;case"leftBottom":d.my="right top",d.at="left center";break;case"left":d.my="right center",d.at="left center";break;case"leftTop":d.my="right bottom",d.at="left center";break;default:return!1}return this.popover.css({display:"inline"===this.options.placement?"":"block"}),d!==!1?this.popover.pos(d).css("maxWidth",a(window).width()-this.container.offset().left-5):this.popover.css({top:"auto",right:"auto",bottom:"auto",left:"auto",maxWidth:"none"}),this.popover.addClass(this.options.placement),!0},_updateComponents:function(){if(this.iconpicker.find(".iconpicker-item.iconpicker-selected").removeClass("iconpicker-selected "+this.options.selectedCustomClass),this.iconpicker.find("."+this.options.iconBaseClass+"."+this.options.iconClassPrefix+this.iconpickerValue).parent().addClass("iconpicker-selected "+this.options.selectedCustomClass),this.hasComponent()){var a=this.component.find("i");a.length>0?a.attr("class",this.options.iconComponentBaseClass+" "+this.getValue()):this.component.html(this.getValueHtml())}},_updateFormGroupStatus:function(a){return this.hasInput()?(a!==!1?this.input.parents(".form-group:first").removeClass("has-error"):this.input.parents(".form-group:first").addClass("has-error"),!0):!1},getValid:function(c){b.isString(c)||(c="");var d=""===c;return c=a.trim(c.replace(this.options.iconClassPrefix,"")),b.inArray(c,this.options.icons)||d?c:!1},setValue:function(a){var b=this.getValid(a);return b!==!1?(this.iconpickerValue=b,this._trigger("iconpickerSetValue",{iconpickerValue:b}),this.iconpickerValue):(this._trigger("iconpickerInvalid",{iconpickerValue:a}),!1)},getValue:function(a){return this.options.iconClassPrefix+(a?a:this.iconpickerValue)},getValueHtml:function(){return'<i class="'+this.options.iconBaseClass+" "+this.getValue()+'"></i>'},setSourceValue:function(a){return a=this.setValue(a),a!==!1&&""!==a&&(this.hasInput()?this.input.val(this.getValue()):this.element.data("iconpickerValue",this.getValue()),this._trigger("iconpickerSetSourceValue",{iconpickerValue:a})),a},getSourceValue:function(a){a=a||this.options.defaultValue;var b=a;return b=this.hasInput()?this.input.val():this.element.data("iconpickerValue"),(void 0===b||""===b||null===b||b===!1)&&(b=a),b},hasInput:function(){return this.input!==!1},hasComponent:function(){return this.component!==!1},hasContainer:function(){return this.container!==!1},getAcceptButton:function(){return this.popover.find(".iconpicker-btn-accept")},getCancelButton:function(){return this.popover.find(".iconpicker-btn-cancel")},getSearchInput:function(){return this.popover.find(".iconpicker-search")},filter:function(c){if(b.isEmpty(c))return this.iconpicker.find(".iconpicker-item").show(),a(!1);var d=[];return this.iconpicker.find(".iconpicker-item").each(function(){var b=a(this),e=b.attr("title").toLowerCase(),f=!1;try{f=new RegExp(c,"g")}catch(g){f=!1}f!==!1&&e.match(f)?(d.push(b),b.show()):b.hide()}),d},show:function(){return this.popover.hasClass("in")?!1:(a.iconpicker.batch(a(".iconpicker-popover.in:not(.inline)").not(this.popover),"hide"),this._trigger("iconpickerShow"),this.updatePlacement(),this.popover.addClass("in"),void setTimeout(a.proxy(function(){this.popover.css("display",this.isInline()?"":"block"),this._trigger("iconpickerShown")},this),this.options.animation?300:1))},hide:function(){return this.popover.hasClass("in")?(this._trigger("iconpickerHide"),this.popover.removeClass("in"),void setTimeout(a.proxy(function(){this.popover.css("display","none"),this.getSearchInput().val(""),this.filter(""),this._trigger("iconpickerHidden")},this),this.options.animation?300:1)):!1},toggle:function(){this.popover.is(":visible")?this.hide():this.show(!0)},update:function(a,b){return a=a?a:this.getSourceValue(this.iconpickerValue),this._trigger("iconpickerUpdate"),b===!0?a=this.setValue(a):(a=this.setSourceValue(a),this._updateFormGroupStatus(a!==!1)),a!==!1&&this._updateComponents(),this._trigger("iconpickerUpdated"),a},destroy:function(){this._trigger("iconpickerDestroy"),this.element.removeData("iconpicker").removeData("iconpickerValue").removeClass("iconpicker-element"),this._unbindElementEvents(),this._unbindWindowEvents(),a(this.popover).remove(),this._trigger("iconpickerDestroyed")},disable:function(){return this.hasInput()?(this.input.prop("disabled",!0),!0):!1},enable:function(){return this.hasInput()?(this.input.prop("disabled",!1),!0):!1},isDisabled:function(){return this.hasInput()?this.input.prop("disabled")===!0:!1},isInline:function(){return"inline"===this.options.placement||this.popover.hasClass("inline")}},a.iconpicker=c,a.fn.iconpicker=function(b){return this.each(function(){var d=a(this);d.data("iconpicker")||d.data("iconpicker",new c(this,"object"==typeof b?b:{}))})},c.defaultOptions.icons=["adjust","adn","align-center","align-justify","align-left","align-right","ambulance","anchor","android","angle-double-down","angle-double-left","angle-double-right","angle-double-up","angle-down","angle-left","angle-right","angle-up","apple","archive","arrow-circle-down","arrow-circle-left","arrow-circle-o-down","arrow-circle-o-left","arrow-circle-o-right","arrow-circle-o-up","arrow-circle-right","arrow-circle-up","arrow-down","arrow-left","arrow-right","arrow-up","arrows","arrows-alt","arrows-h","arrows-v","asterisk","automobile","backward","ban","bank","bar-chart-o","barcode","bars","beer","behance","behance-square","bell","bell-o","bitbucket","bitbucket-square","bitcoin","bold","bolt","bomb","book","bookmark","bookmark-o","briefcase","btc","bug","building","building-o","bullhorn","bullseye","cab","calendar","calendar-o","camera","camera-retro","car","caret-down","caret-left","caret-right","caret-square-o-down","caret-square-o-left","caret-square-o-right","caret-square-o-up","caret-up","certificate","chain","chain-broken","check","check-circle","check-circle-o","check-square","check-square-o","chevron-circle-down","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-down","chevron-left","chevron-right","chevron-up","child","circle","circle-o","circle-o-notch","circle-thin","clipboard","clock-o","cloud","cloud-download","cloud-upload","cny","code","code-fork","codepen","coffee","cog","cogs","columns","comment","comment-o","comments","comments-o","compass","compress","copy","credit-card","crop","crosshairs","css3","cube","cubes","cut","cutlery","dashboard","database","dedent","delicious","desktop","deviantart","digg","dollar","dot-circle-o","download","dribbble","dropbox","drupal","edit","eject","ellipsis-h","ellipsis-v","empire","envelope","envelope-o","envelope-square","eraser","eur","euro","exchange","exclamation","exclamation-circle","exclamation-triangle","expand","external-link","external-link-square","eye","eye-slash","facebook","facebook-square","fast-backward","fast-forward","fax","female","fighter-jet","file","file-archive-o","file-audio-o","file-code-o","file-excel-o","file-image-o","file-movie-o","file-o","file-pdf-o","file-photo-o","file-picture-o","file-powerpoint-o","file-sound-o","file-text","file-text-o","file-video-o","file-word-o","file-zip-o","files-o","film","filter","fire","fire-extinguisher","flag","flag-checkered","flag-o","flash","flask","flickr","floppy-o","folder","folder-o","folder-open","folder-open-o","font","forward","foursquare","frown-o","gamepad","gavel","gbp","ge","gear","gears","gift","git","git-square","github","github-alt","github-square","gittip","glass","globe","google","google-plus","google-plus-square","graduation-cap","group","h-square","hacker-news","hand-o-down","hand-o-left","hand-o-right","hand-o-up","hdd-o","header","headphones","heart","heart-o","history","home","hospital-o","html5","image","inbox","indent","info","info-circle","inr","instagram","institution","italic","joomla","jpy","jsfiddle","key","keyboard-o","krw","language","laptop","leaf","legal","lemon-o","level-down","level-up","life-bouy","life-ring","life-saver","lightbulb-o","link","linkedin","linkedin-square","linux","list","list-alt","list-ol","list-ul","location-arrow","lock","long-arrow-down","long-arrow-left","long-arrow-right","long-arrow-up","magic","magnet","mail-forward","mail-reply","mail-reply-all","male","map-marker","maxcdn","medkit","meh-o","microphone","microphone-slash","minus","minus-circle","minus-square","minus-square-o","mobile","mobile-phone","money","moon-o","mortar-board","music","navicon","openid","outdent","pagelines","paper-plane","paper-plane-o","paperclip","paragraph","paste","pause","paw","pencil","pencil-square","pencil-square-o","phone","phone-square","photo","picture-o","pied-piper","pied-piper-alt","pied-piper-square","pinterest","pinterest-square","plane","play","play-circle","play-circle-o","plus","plus-circle","plus-square","plus-square-o","power-off","print","puzzle-piece","qq","qrcode","question","question-circle","quote-left","quote-right","ra","random","rebel","recycle","reddit","reddit-square","refresh","renren","reorder","repeat","reply","reply-all","retweet","rmb","road","rocket","rotate-left","rotate-right","rouble","rss","rss-square","rub","ruble","rupee","save","scissors","search","search-minus","search-plus","send","send-o","share","share-alt","share-alt-square","share-square","share-square-o","shield","shopping-cart","sign-in","sign-out","signal","sitemap","skype","slack","sliders","smile-o","sort","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-asc","sort-desc","sort-down","sort-numeric-asc","sort-numeric-desc","sort-up","soundcloud","space-shuttle","spinner","spoon","spotify","square","square-o","stack-exchange","stack-overflow","star","star-half","star-half-empty","star-half-full","star-half-o","star-o","steam","steam-square","step-backward","step-forward","stethoscope","stop","strikethrough","stumbleupon","stumbleupon-circle","subscript","suitcase","sun-o","superscript","support","table","tablet","tachometer","tag","tags","tasks","taxi","tencent-weibo","terminal","text-height","text-width","th","th-large","th-list","thumb-tack","thumbs-down","thumbs-o-down","thumbs-o-up","thumbs-up","ticket","times","times-circle","times-circle-o","tint","toggle-down","toggle-left","toggle-right","toggle-up","trash-o","tree","trello","trophy","truck","try","tumblr","tumblr-square","turkish-lira","twitter","twitter-square","umbrella","underline","undo","university","unlink","unlock","unlock-alt","unsorted","upload","usd","user","user-md","users","video-camera","vimeo-square","vine","vk","volume-down","volume-off","volume-up","warning","wechat","weibo","weixin","wheelchair","windows","won","wordpress","wrench","xing","xing-square","yahoo","yen","youtube","youtube-play","youtube-square"]});

</script>




<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery('.container-main').attr('id','wstheme');
  jQuery('.form-horizontal ul.nav-tabs').addClass('nav-stacked');
  jQuery('#module-form .form-horizontal').addClass('row');
  jQuery('.form-horizontal ul.nav-tabs').wrap('<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"></div>');
  jQuery('.form-horizontal .tab-content').wrap('<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12"></div>');
  
   	

  jQuery('.ws-px').wrap('<div class="ws-input-container-right"></div>').closest('.ws-input-container-right').append('<span class="ws-append" title="The Unit for this Field is Pixel">Pixel (px)</span>');
  jQuery('.ws-s').wrap('<div class="ws-input-container-right"></div>').closest('.ws-input-container-right').append('<span class="ws-append" title="The Unit for this Field is Seconds">Seconds (s)</span>');
  jQuery('.ws-ms').wrap('<div class="ws-input-container-right"></div>').closest('.ws-input-container-right').append('<span class="ws-append" title="The Unit for this Field is Milliseconds">Milliseconds (ms)</span>');
  jQuery('.ws-degree').wrap('<div class="ws-input-container-right"></div>').closest('.ws-input-container-right').append('<span class="ws-append" title="The Unit for this Field is Degree">Degree (&ordm;)</span>');
  jQuery('.ws-percent').wrap('<div class="ws-input-container-right"></div>').closest('.ws-input-container-right').append('<span class="ws-append" title="The Unit for this Field is Percent">Percent (%)</span>');
   
  jQuery('.icp').iconpicker({
    selectedCustomClass: "label label-primary",
    defaultValue:"heart",
    placement:"bottomLeft",
    inputSearch: true,
    iconComponentBaseClass: "fa", /* fa-fw fa-lg */
    component: ".ws-prepend",
    showFooter: true,
    templates: {
      footer: '<div class="popover-footer">Font Awesome Version: <b>3.4.0</b></div>',
      buttons: ' ' + ' ',
      search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />'
    },
    icons: [
    
      "adjust",
      "adn",
      "align-center",
      "align-justify",
      "align-left",
      "align-right",
      "ambulance",
      "anchor",
      "android",
      "angellist",
      "angle-double-down",
      "angle-double-left",
      "angle-double-right",
      "angle-double-up",
      "angle-down",
      "angle-left",
      "angle-right",
      "angle-up",
      "apple",
      "archive",
      "area-chart",
      "arrow-circle-down",
      "arrow-circle-left",
      "arrow-circle-o-down",
      "arrow-circle-o-left",
      "arrow-circle-o-right",
      "arrow-circle-o-up",
      "arrow-circle-right",
      "arrow-circle-up",
      "arrow-down",
      "arrow-left",
      "arrow-right",
      "arrow-up",
      "arrows",
      "arrows-alt",
      "arrows-h",
      "arrows-v",
      "asterisk",
      "at",
      "automobile",
      "backward",
      "ban",
      "bank",
      "bar-chart",
      "bar-chart-o",
      "barcode",
      "bars",
      "bed",
      "beer",
      "behance",
      "behance-square",
      "bell",
      "bell-o",
      "bell-slash",
      "bell-slash-o",
      "bicycle",
      "binoculars",
      "birthday-cake",
      "bitbucket",
      "bitbucket-square",
      "bitcoin",
      "bold",
      "bolt",
      "bomb",
      "book",
      "bookmark",
      "bookmark-o",
      "briefcase",
      "btc",
      "bug",
      "building",
      "building-o",
      "bullhorn",
      "bullseye",
      "bus",
      "buysellads",
      "cab",
      "calculator",
      "calendar",
      "calendar-o",
      "camera",
      "camera-retro",
      "car",
      "caret-down",
      "caret-left",
      "caret-right",
      "caret-square-o-down",
      "caret-square-o-left",
      "caret-square-o-right",
      "caret-square-o-up",
      "caret-up",
      "cart-arrow-down",
      "cart-plus",
      "cc",
      "cc-amex",
      "cc-discover",
      "cc-mastercard",
      "cc-paypal",
      "cc-stripe",
      "cc-visa",
      "certificate",
      "chain",
      "chain-broken",
      "check",
      "check-circle",
      "check-circle-o",
      "check-square",
      "check-square-o",
      "chevron-circle-down",
      "chevron-circle-left",
      "chevron-circle-right",
      "chevron-circle-up",
      "chevron-down",
      "chevron-left",
      "chevron-right",
      "chevron-up",
      "child",
      "circle",
      "circle-o",
      "circle-o-notch",
      "circle-thin",
      "clipboard",
      "clock-o",
      "close",
      "cloud",
      "cloud-download",
      "cloud-upload",
      "cny",
      "code",
      "code-fork",
      "codepen",
      "coffee",
      "cog",
      "cogs",
      "columns",
      "comment",
      "comment-o",
      "comments",
      "comments-o",
      "compass",
      "compress",
      "connectdevelop",
      "copy",
      "copyright",
      "credit-card",
      "crop",
      "crosshairs",
      "css3",
      "cube",
      "cubes",
      "cut",
      "cutlery",
      "dashboard",
      "dashcube",
      "database",
      "dedent",
      "delicious",
      "desktop",
      "deviantart",
      "diamond",
      "digg",
      "dollar",
      "dot-circle-o",
      "download",
      "dribbble",
      "dropbox",
      "drupal",
      "edit",
      "eject",
      "ellipsis-h",
      "ellipsis-v",
      "empire",
      "envelope",
      "envelope-o",
      "envelope-square",
      "eraser",
      "eur",
      "euro",
      "exchange",
      "exclamation",
      "exclamation-circle",
      "exclamation-triangle",
      "expand",
      "external-link",
      "external-link-square",
      "eye",
      "eye-slash",
      "eyedropper",
      "facebook",
      "facebook-f",
      "facebook-official",
      "facebook-square",
      "fast-backward",
      "fast-forward",
      "fax",
      "female",
      "fighter-jet",
      "file",
      "file-archive-o",
      "file-audio-o",
      "file-code-o",
      "file-excel-o",
      "file-image-o",
      "file-movie-o",
      "file-o",
      "file-pdf-o",
      "file-photo-o",
      "file-picture-o",
      "file-powerpoint-o",
      "file-sound-o",
      "file-text",
      "file-text-o",
      "file-video-o",
      "file-word-o",
      "file-zip-o",
      "files-o",
      "film",
      "filter",
      "fire",
      "fire-extinguisher",
      "flag",
      "flag-checkered",
      "flag-o",
      "flash",
      "flask",
      "flickr",
      "floppy-o",
      "folder",
      "folder-o",
      "folder-open",
      "folder-open-o",
      "font",
      "forumbee",
      "forward",
      "foursquare",
      "frown-o",
      "futbol-o",
      "gamepad",
      "gavel",
      "gbp",
      "ge",
      "gear",
      "gears",
      "genderless",
      "gift",
      "git",
      "git-square",
      "github",
      "github-alt",
      "github-square",
      "gittip",
      "glass",
      "globe",
      "google",
      "google-plus",
      "google-plus-square",
      "google-wallet",
      "graduation-cap",
      "gratipay",
      "group",
      "h-square",
      "hacker-news",
      "hand-o-down",
      "hand-o-left",
      "hand-o-right",
      "hand-o-up",
      "hdd-o",
      "header",
      "headphones",
      "heart",
      "heart-o",
      "heartbeat",
      "history",
      "home",
      "hospital-o",
      "hotel",
      "html5",
      "ils",
      "image",
      "inbox",
      "indent",
      "info",
      "info-circle",
      "inr",
      "instagram",
      "institution",
      "ioxhost",
      "italic",
      "joomla",
      "jpy",
      "jsfiddle",
      "key",
      "keyboard-o",
      "krw",
      "language",
      "laptop",
      "lastfm",
      "lastfm-square",
      "leaf",
      "leanpub",
      "legal",
      "lemon-o",
      "level-down",
      "level-up",
      "life-bouy",
      "life-buoy",
      "life-ring",
      "life-saver",
      "lightbulb-o",
      "line-chart",
      "link",
      "linkedin",
      "linkedin-square",
      "linux",
      "list",
      "list-alt",
      "list-ol",
      "list-ul",
      "location-arrow",
      "lock",
      "long-arrow-down",
      "long-arrow-left",
      "long-arrow-right",
      "long-arrow-up",
      "magic",
      "magnet",
      "mail-forward",
      "mail-reply",
      "mail-reply-all",
      "male",
      "map-marker",
      "mars",
      "mars-double",
      "mars-stroke",
      "mars-stroke-h",
      "mars-stroke-v",
      "maxcdn",
      "meanpath",
      "medium",
      "medkit",
      "meh-o",
      "mercury",
      "microphone",
      "microphone-slash",
      "minus",
      "minus-circle",
      "minus-square",
      "minus-square-o",
      "mobile",
      "mobile-phone",
      "money",
      "moon-o",
      "mortar-board",
      "motorcycle",
      "music",
      "navicon",
      "neuter",
      "newspaper-o",
      "openid",
      "outdent",
      "pagelines",
      "paint-brush",
      "paper-plane",
      "paper-plane-o",
      "paperclip",
      "paragraph",
      "paste",
      "pause",
      "paw",
      "paypal",
      "pencil",
      "pencil-square",
      "pencil-square-o",
      "phone",
      "phone-square",
      "photo",
      "picture-o",
      "pie-chart",
      "pied-piper",
      "pied-piper-alt",
      "pinterest",
      "pinterest-p",
      "pinterest-square",
      "plane",
      "play",
      "play-circle",
      "play-circle-o",
      "plug",
      "plus",
      "plus-circle",
      "plus-square",
      "plus-square-o",
      "power-off",
      "print",
      "puzzle-piece",
      "qq",
      "qrcode",
      "question",
      "question-circle",
      "quote-left",
      "quote-right",
      "ra",
      "random",
      "rebel",
      "recycle",
      "reddit",
      "reddit-square",
      "refresh",
      "remove",
      "renren",
      "reorder",
      "repeat",
      "reply",
      "reply-all",
      "retweet",
      "rmb",
      "road",
      "rocket",
      "rotate-left",
      "rotate-right",
      "rouble",
      "rss",
      "rss-square",
      "rub",
      "ruble",
      "rupee",
      "save",
      "scissors",
      "search",
      "search-minus",
      "search-plus",
      "sellsy",
      "send",
      "send-o",
      "server",
      "share",
      "share-alt",
      "share-alt-square",
      "share-square",
      "share-square-o",
      "shekel",
      "sheqel",
      "shield",
      "ship",
      "shirtsinbulk",
      "shopping-cart",
      "sign-in",
      "sign-out",
      "signal",
      "simplybuilt",
      "sitemap",
      "skyatlas",
      "skype",
      "slack",
      "sliders",
      "slideshare",
      "smile-o",
      "soccer-ball-o",
      "sort",
      "sort-alpha-asc",
      "sort-alpha-desc",
      "sort-amount-asc",
      "sort-amount-desc",
      "sort-asc",
      "sort-desc",
      "sort-down",
      "sort-numeric-asc",
      "sort-numeric-desc",
      "sort-up",
      "soundcloud",
      "space-shuttle",
      "spinner",
      "spoon",
      "spotify",
      "square",
      "square-o",
      "stack-exchange",
      "stack-overflow",
      "star",
      "star-half",
      "star-half-empty",
      "star-half-full",
      "star-half-o",
      "star-o",
      "steam",
      "steam-square",
      "step-backward",
      "step-forward",
      "stethoscope",
      "stop",
      "street-view",
      "strikethrough",
      "stumbleupon",
      "stumbleupon-circle",
      "subscript",
      "subway",
      "suitcase",
      "sun-o",
      "superscript",
      "support",
      "table",
      "tablet",
      "tachometer",
      "tag",
      "tags",
      "tasks",
      "taxi",
      "tencent-weibo",
      "terminal",
      "text-height",
      "text-width",
      "th",
      "th-large",
      "th-list",
      "thumb-tack",
      "thumbs-down",
      "thumbs-o-down",
      "thumbs-o-up",
      "thumbs-up",
      "ticket",
      "times",
      "times-circle",
      "times-circle-o",
      "tint",
      "toggle-down",
      "toggle-left",
      "toggle-off",
      "toggle-on",
      "toggle-right",
      "toggle-up",
      "train",
      "transgender",
      "transgender-alt",
      "trash",
      "trash-o",
      "tree",
      "trello",
      "trophy",
      "truck",
      "try",
      "tty",
      "tumblr",
      "tumblr-square",
      "turkish-lira",
      "twitch",
      "twitter",
      "twitter-square",
      "umbrella",
      "underline",
      "undo",
      "university",
      "unlink",
      "unlock",
      "unlock-alt",
      "unsorted",
      "upload",
      "usd",
      "user",
      "user-md",
      "user-plus",
      "user-secret",
      "user-times",
      "users",
      "venus",
      "venus-double",
      "venus-mars",
      "viacoin",
      "video-camera",
      "vimeo-square",
      "vine",
      "vk",
      "volume-down",
      "volume-off",
      "volume-up",
      "warning",
      "wechat",
      "weibo",
      "weixin",
      "whatsapp",
      "wheelchair",
      "wifi",
      "windows",
      "won",
      "wordpress",
      "wrench",
      "xing",
      "xing-square",
      "yahoo",
      "yelp",
      "yen",
      "youtube",
      "youtube-play",
      "youtube-square"

     
    ]
  });
    
  var $body=jQuery('body')
  
  $body.find('.toggles').delegate('.toggle-title', 'click', function(e) {
		var $this=jQuery(this), $parent=$this.closest('li');
			
		e.preventDefault();
		if ($parent.hasClass('current')) {
			$parent.removeClass('current').find('.toggle-content').stop().css('display','block').slideUp(500);
		} else {
			$parent.addClass('current').find('.toggle-content').stop().css('display','none').slideDown(500);
			$parent.siblings('.current').find('.toggle-title').trigger('click');
		};
	});	
  
});
</script>


<style type="text/css">

/* General Styling */

#wstheme * {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  -ms-border-radius: 0 !important;
  -o-border-radius: 0 !important;
  border-radius: 0 !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#wstheme .tab-content {
  padding-left:30px;
  border-left:3px solid #e3e3e3;
}

a {
  color: #E74C3C;
}

a:hover,
a:active,
a:focus {
  color:#cc4436;
  outline:none !important;
}

p {
  margin:0 0 20px 0;
}

#wstheme .ws-headline {
  background: #f5f5f5;
  padding:15px;
  font-weight:bold;
  font-size:20px;
  line-height:25px;
  border:1px solid #e3e3e3;
}

#wstheme .ws-headline .fa {
  background: #e74c3c;
  color:#fff;
  padding:15px;
  margin:-15px 15px -15px -15px;
  text-align:center;
  font-size:20px;
  line-height:25px;
  border:0;
  width:55px;
}

#wstheme .ws-line {
  background: #f5f5f5;
  padding:0;
  font-size:20px;
  line-height:25px;
  border:0;
  margin-top:-15px;
  margin-bottom:-15px;
  border-left:1px solid #e3e3e3;
  border-right:1px solid #e3e3e3;
  height:30px;
}

.ws-text {
  padding:0;
  font-weight:normal;
  border-left:none;
  line-height:20px;
  color: #555;
  font-size:14px;
  color:#333;
}

.controls .ws-headline, .controls .ws-text, .controls .ws-attention, .controls .ws-line, .controls .ws-faq, .ws-toggle {
  margin-left: -180px;
}

@media only screen and (max-width : 480px) {

  .controls .ws-headline, .controls .ws-text, .controls .ws-attention, .controls .ws-line, .controls .ws-faq, .ws-toggle {
    margin-left: 0;
  }
  		
}

@media only screen and (max-width : 768px) {

  #wstheme .tab-content {
    padding-left:0;
    border-left:0;
  }

  		
}




#wstheme .alert.alert-success {
  background: #5cb85c;
  border: 1px solid #4cae4c;
  color:#fff;
}

#wstheme .alert *:last-child {
  margin-bottom:0;
}

#wstheme .alert h4 {
  color:#fff;
}

#wstheme .alert {
  text-shadow:none !important;
  padding:15px 35px 15px 15px;
}

#wstheme .label.label-primary {
  background: #e74c3c;
}


/* ------------------------------ NEW TOOLTIPS ------------------------------ */

.tooltip {
	position: absolute;
	z-index: 1030;
	display: block;
	visibility: visible;
	font-size: 13px;
	line-height: 20px;
	opacity: 0;
	filter: alpha(opacity=0);
}
.tooltip.in {
	opacity: 1;
	filter: alpha(opacity=100);
}
.tooltip.top {
	margin-top: -3px;
	padding: 5px 0;
}
.tooltip.right {
	margin-left: 3px;
	padding: 0 5px;
}
.tooltip.bottom {
	margin-top: 3px;
	padding: 5px 0;
}
.tooltip.left {
	margin-left: -3px;
	padding: 0 5px;
}
.tooltip-inner {
  min-width:200px;
	max-width: 300px;
	padding: 6px 12px;
	color: #333;
	text-align: center;
	text-decoration: none;
	background-color: #f5f5f5;
	border:3px solid #e3e3e3;
	text-align:left;
	-webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  -ms-border-radius: 0 !important;
  -o-border-radius: 0 !important;
  border-radius: 0 !important;

}
.tooltip-inner strong {
  font-weight:700;
  font-size:14px;
  line-height:18px;
  background: #e3e3e3;
  margin: -6px -12px -10px -12px;
  padding: 6px 12px;
  display: block;

}
.tooltip-arrow {
	position: absolute;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
}
.tooltip.top .tooltip-arrow {
	bottom: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 5px 5px 0;
	border-top-color: #e3e3e3;
}
.tooltip.right .tooltip-arrow {
	top: 50%;
	left: 0;
	margin-top: -5px;
	border-width: 5px 5px 5px 0;
	border-right-color: #e3e3e3;
}
.tooltip.left .tooltip-arrow {
	top: 50%;
	right: 0;
	margin-top: -5px;
	border-width: 5px 0 5px 5px;
	border-left-color: #e3e3e3;
}
.tooltip.bottom .tooltip-arrow {
	top: 0;
	left: 50%;
	margin-left: -5px;
	border-width: 0 5px 5px;
	border-bottom-color: #e3e3e3;
}

/* ------------------------------ THE NAME LINE ON THE TOP ------------------------------ */

#wstheme .form-inline-header {
  margin: 5px 0 15px 0;
  padding-bottom:9px;
  border-bottom:1px solid #e3e3e3;
}

.ws-subline {color:#999;}
pre, code {background: #F5F5F5;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 4px;display: block;font-size: 12px;line-height: 18px;margin: 0 0 20px;padding: 8.5px;white-space: pre-wrap;word-break: break-all;word-wrap: break-word;}
.tip-title img {max-width: 100% !important;}
.control-label:empty {display: none;}

/* JOOMLA 3.X */

.controls textarea {min-width: 288px;}
.minicolors-theme-bootstrap .minicolors-input {min-width: 186px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;}
.controls textarea {min-height:200px !important;}

#wstheme .minicolors-panel,
#wstheme .minicolors-panel * {
  -webkit-box-sizing: padding-box;
  -moz-box-sizing: padding-box;
  box-sizing: padding-box;
}

#wstheme .minicolors {
  width:100%;
}

#wstheme .minicolors-theme-bootstrap.minicolors-position-bottom .minicolors-panel {
  left:0;
  top:40px;
}

#wstheme .minicolors-swatch {
  top:0;
  left:0;
  width:32px;
  height:100%;
  border:1px solid #ccc;
}

#wstheme input[type="text"].minicolors-input {
  padding-left: 44px;
}

#wstheme .minicolors-theme-bootstrap .minicolors-panel {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  border-color:#ccc;
  padding:0;
}

#wstheme .minicolors-theme-bootstrap .minicolors-grid {
  left:1px;
  top:1px;
}

#wstheme .minicolors-theme-bootstrap .minicolors-slider,
#wstheme .minicolors-theme-bootstrap .minicolors-opacity-slider {
  left: 152px;
  top: 1px;
}

#wstheme .minicolors-swatch span {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
}

#wstheme .form-horizontal .control-group {
  margin:0 0 20px 0;
  padding:0 0 20px 0;
  border-bottom:1px solid #e3e3e3;
}

/* ------------------------------ REMOVE STUPID SHADOW AT BOTTOM ------------------------------ */

#status {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -ms-box-shadow: none !important;
  -o-box-shadow: none !important;
  box-shadow: none !important;
}

/* ------------------------------ NEW SIDEBAR IN DARK LOOK ------------------------------ */

#wstheme .nav-tabs.nav-stacked {
  background: #222;
}

#wstheme .nav-tabs.nav-stacked > li > a {
  border:0;
}

#wstheme .nav-tabs.nav-stacked li {

}

#wstheme .nav-tabs.nav-stacked li a {
  color:#fff;
}

#wstheme .nav > li > a:hover,
-wstheme .nav > li > a:focus {
  background: #111;
  color:#fff;
}

#wstheme .nav-tabs.nav-stacked > .active > a,
#wstheme .nav-tabs.nav-stacked > .active > a:hover,
#wstheme .nav-tabs.nav-stacked > .active > a:focus,
#wstheme .nav-tabs.nav-stacked > .active > a .fa,
#wstheme .nav-tabs.nav-stacked > .active > a:hover .fa,
#wstheme .nav-tabs.nav-stacked > .active > a:focus .fa {
  background: #E74C3C;
  color:#fff;
}

/* ------------------------------ STYLE ALL INPUT FIELDS NEW ------------------------------ */

#wstheme select,
#wstheme textarea,
#wstheme input[type="text"],
#wstheme input[type="password"],
#wstheme input[type="datetime"],
#wstheme input[type="datetime-local"],
#wstheme input[type="date"],
#wstheme input[type="month"],
#wstheme input[type="time"],
#wstheme input[type="week"],
#wstheme input[type="number"],
#wstheme input[type="email"],
#wstheme input[type="url"],
#wstheme input[type="search"],
#wstheme input[type="tel"],
#wstheme input[type="color"],
#wstheme .uneditable-input {
  width:100% !important;
  font-size:13px;
  line-height:20px;
  padding:6px 12px;
  height:auto;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
}

#wstheme select:focus,
#wstheme textarea:focus,
#wstheme input[type="text"]:focus,
#wstheme input[type="password"]:focus,
#wstheme input[type="datetime"]:focus,
#wstheme input[type="datetime-local"]:focus,
#wstheme input[type="date"]:focus,
#wstheme input[type="month"]:focus,
#wstheme input[type="time"]:focus,
#wstheme input[type="week"]:focus,
#wstheme input[type="number"]:focus,
#wstheme input[type="email"]:focus,
#wstheme input[type="url"]:focus,
#wstheme input[type="search"]:focus,
#wstheme input[type="tel"]:focus,
#wstheme input[type="color"]:focus,
#wstheme .uneditable-input {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  border-color: #E74C3C;
}

#wstheme .ws-input-container-right,
#wstheme .ws-input-container-left {
  width:100% !important;
  position: relative;
}



#wstheme .ws-input-container-right input[type="text"],
#wstheme .ws-input-container-right input[type="number"],
#wstheme .ws-input-container-right input[type="datetime"],
#wstheme .ws-input-container-right input[type="datetime-local"],
#wstheme .ws-input-container-right input[type="date"],
#wstheme .ws-input-container-right input[type="month"],
#wstheme .ws-input-container-right input[type="time"],
#wstheme .ws-input-container-right input[type="week"],
#wstheme .ws-input-container-right input[type="email"],
#wstheme .ws-input-container-right input[type="url"],
#wstheme .ws-input-container-right input[type="search"],
#wstheme .ws-input-container-right input[type="tel"],
#wstheme .ws-input-container-right input[type="color"],
#wstheme .ws-input-container-right textarea {
  padding-right:142px !important;
}

#wstheme .ws-input-container-left input[type="text"],
#wstheme .ws-input-container-left input[type="number"],
#wstheme .ws-input-container-left input[type="datetime"],
#wstheme .ws-input-container-left input[type="datetime-local"],
#wstheme .ws-input-container-left input[type="date"],
#wstheme .ws-input-container-left input[type="month"],
#wstheme .ws-input-container-left input[type="time"],
#wstheme .ws-input-container-left input[type="week"],
#wstheme .ws-input-container-left input[type="email"],
#wstheme .ws-input-container-left input[type="url"],
#wstheme .ws-input-container-left input[type="search"],
#wstheme .ws-input-container-left input[type="tel"],
#wstheme .ws-input-container-left input[type="color"],
#wstheme .ws-input-container-left textarea {
  padding-left:44px !important;
}


#wstheme .ws-input-container-left .popover-title input[type="search"] {
  padding-left:12px !important;
}



#wstheme .ws-input-container-right .ws-append {
  background: #f5f5f5;
  border: 1px solid #ccc;
  height:100%;
  line-height:20px;
  padding:6px 12px;
  position: absolute;
  min-width: 130px;
  right:0;
  top:0;
}

#wstheme .ws-input-container-left .ws-prepend {
  background: #f5f5f5;
  border: 1px solid #ccc;
  height:100%;
  line-height:20px;
  padding:6px;
  position: absolute;
  width:32px;
  left:0;
  top:0;
  text-align:center;
}


/* ------------------------------ INPUT BEFORE AND AFTER ------------------------------ */

#wstheme .input-append .add-on,
#wstheme .input-prepend .add-on {
  font-size: 13px;
  line-height:20px;
  padding:6px;
  height:auto;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  background: #f5f5f5;
  border:1px solid #ccc;
  text-shadow: none;
  min-width:34px;
}

/* ------------------------------ BUTTON GROUPS ------------------------------ */


#wstheme .controls .btn-group.with-images > .btn {
  min-width:0;
  background: #fff;
  padding:10px;
  margin:0 10px 10px 0;
  border:3px solid #e3e3e3;
}

#wstheme .controls .btn-group.with-images > .btn.btn-success {
  border:3px solid #adadad;
  color: #4cae4c;
  background: #fff;
}

#wstheme .controls .btn-group.with-images > .btn.btn-success:after {
  position: absolute;
  left:-3px;
  top:-3px;
  width:35px;
  height:35px;
  line-height:35px;
  font-size:24px;
  background: #fff;
  display: block;
  content: "";
  color:transparent;
  display: inline-block;
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAIAAACRuyQOAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAhJJREFUeNq818tLAkEcB/DWfIQVVGAQecosKoI65bVroIGCl4ouncoy6YVIf0RqV/+HrlE+etyqFZEeFLpUWj7LSosytx9sqORrdt1pTsNvBz77nfkx7BI0TTfgH5FMpIHGP8JvYe2OVog7zUP6wbBv+Pz+JLDuXp6BOUapmMEoATO/N5/NZfMVLFLoLQRpihks0v3r/aJz8Q/Dv1SJ4Vm6e71bci6VZfiUbl9ujS5jJYY3qSbDjwQMnE2OzlVfVq9EvVBGp7EmU68UTAWXXcsoTF1SIBUwuUyIDHcp8BwwuVkwHCUODBfp5vlmxb3ClmEtcWbYScBAC3BuVAHiuuuna0SGIAh9v35rfGu0c1QqlLLLdPV0tepeRXwnrVI7MzgjFAjTX+ldatfhd6BmqsJ0t3R3NHUUVyZ7J6cHp4FhbqlwOoya6TJ5ueZZK61LGiXKduXCyEI0E7V77bFMjGFmh2ZFAhHMTyOnNtKWeE8gSRfJi3XPetlHEz0T6h61vFUO85PHk23v9ljX2NzwHJOmlKkmVWFgKNoUqi6Vrk/HJKBSlEwqaxY1M4ydtMff40hdfp443zjYqHmEGoUGtkvcKM5XyChpPbOWMuUlf9xvPjQjdppaoQYMjq3SplWUWDF5bGpgCnoH0iQ/kkh3hC/msxxZMH3SFiSsTEHCzfxK3qh383gT9+8NQUbIf2Bg/AgwAHvd4hZITAjJAAAAAElFTkSuQmCC');
  border-width: 0 3px 3px 0;
  border-style: solid;
  border-color: transparent #4cae4c #4cae4c transparent;

}

#wstheme .controls .btn-group.with-images > .btn img {
  margin-bottom:10px;
  max-width:100px;
}

#wstheme .controls .btn-group > .btn {
  min-width:40px;
  float:left;
}

#wstheme .controls .btn-group > .btn:hover {
  border-color: #adadad;
  background: #e6e6e6;
}

#wstheme .controls .btn-group > .btn.btn-success:hover {
  border-color: #4cae4c;
  background: #5cb85c;
}

#wstheme .controls .btn-group > .btn.btn-danger:hover {
  border-color: #d43f3a;
  background: #e74c3c;
}

#wstheme .controls .btn-group > .btn.btn-primary:hover {
  border-color: #0044cc;
  background: #0088cc;
}

#wstheme .controls .btn-group.with-images > .btn:hover {
  border-color: #adadad;
  background: #fff;
}

#wstheme .btn {
  font-size: 13px;
  line-height:20px;
  padding:6px 12px;
  height:auto;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  background: #f5f5f5;
  border:1px solid #e3e3e3;
  text-shadow: none;
  position: relative;
}

#wstheme .btn-icon-left {
  padding-left: 44px;
}

#wstheme .btn-icon-left i {
  position: absolute;
  left:0;
  top:0;
  height:100%;
  width:32px;
  line-height:20px;
  font-size:16px;
  padding:6px 0;
  background: #111;
}

#wstheme .btn-success {
  background-color: #5cb85c;
  border-color: #4cae4c;
  color: #ffffff;
  text-shadow: none;
}

#wstheme .btn-danger {
  background-color: #E74C3C;
  border-color: #d43f3a;
  color: #ffffff;
  text-shadow: none;
}

#wstheme .btn-primary {
  background-color: #0088cc;
  border-color: #0044cc;
  color: #ffffff;
  text-shadow: none;
}



#wstheme .chzn-container-single .chzn-single {
  height:auto !important;
}

#wstheme #permissions-sliders .chzn-container, .chzn-drop {
  width:auto !important;
}

#wstheme .chzn-container, .chzn-drop {
  width:100% !important;
}

#wstheme .chzn-container-single .chzn-single {
  background: #fff;
  border: 1px solid #e3e3e3;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  color:inherit;
  height:auto;
  line-height: 20px;
  overflow: hidden;
  padding: 6px 12px;
}

#wstheme .chzn-container-single .chzn-single div b {
  background-position: 0 6px;
}

#wstheme .chzn-container .chzn-drop {
  border-bottom-color: #e3e3e3;
  border-left-color: #e3e3e3;
  border-right-color: #e3e3e3;
}

#wstheme .chzn-container .chzn-results li.highlighted {
  background: #E74C3C;
}

#wstheme .chzn-container .chzn-results {
  margin:0;
  padding:0;
}

#wstheme .chzn-container-single .chzn-search {
  margin:0;
  padding:6px 12px;
  background: #f5f5f5;
  border-bottom: 1px solid #e3e3e3;
}

#wstheme .chzn-container-single-nosearch .chzn-search {
  display: none;
}


#wstheme .chzn-container .chzn-results li {
  line-height:20px;
  padding: 6px 12px;
}

#wstheme .chzn-color.chzn-single[rel="value_0"],
#wstheme .chzn-color-reverse.chzn-single[rel="value_1"],
#wstheme .chzn-color-state.chzn-single[rel="value_0"],
#wstheme .chzn-color-state.chzn-single[rel="value_-1"],
#wstheme .chzn-color-state.chzn-single[rel="value_-2"] {
  background: #E74C3C;
  border-color: #d43f3a;
  color:#fff;
  text-shadow: none;
}

#wstheme .chzn-color.chzn-single[rel="value_1"],
#wstheme .chzn-color-reverse.chzn-single[rel="value_0"],
#wstheme .chzn-color-state.chzn-single[rel="value_1"] {
  background-color: #5cb85c;
  border-color: #4cae4c;
  color: #ffffff;
  text-shadow: none;
}



#wstheme .nav-tabs > li > a {
  font-weight:700;
  padding:15px;
  font-size:14px;
  line-height:20px;
}

#wstheme .nav-tabs > li > a .fa {
  margin-right:10px;
  color:#999;
}

#wstheme .toggles {list-style:none;;padding:0;margin-bottom:0;}
#wstheme .toggle-title a { display:block;line-height:20px;padding:15px 15px 15px 50px;text-decoration: none;color:#333;font-weight:700;}
#wstheme .toggles > li {background:none;	border:solid 1px #ccc;margin:0;margin-top:-1px;padding:0;position:relative;}
#wstheme .toggles > li:fist-child { margin-top:0; }
#wstheme .toggles > li.current a:not(.btn), .toggles > li:hover a:not(.btn) { text-decoration:none;color:#E74C3C;}
#wstheme .toggle-title a span {	display:block;float:left;height:20px;margin-left:-30px;	margin-right:10px;width:20px;font-size:20px;}
#wstheme .toggle-title a span:before {content: "\f059";color:#E74C3C;}
#wstheme .toggles li.current .toggle-title a span:before { content: "\f00d"; color:#E74C3C;}
#wstheme .toggle-content {display:none;padding:0 20px 0 50px;}
#wstheme .toggle-content .toggle-content-inner {margin-bottom:20px;}
#wstheme .toggles li.current .toggle-content { display:block; }
#wstheme .toggle-content > ul { margin-bottom:20px; }


/* ---------------------- GRID -------------------- */

#wstheme .row {
  margin-left: -15px;
  margin-right: -15px;
}

#wstheme .col-xs-1,
#wstheme .col-sm-1,
#wstheme .col-md-1,
#wstheme .col-lg-1,
#wstheme .col-xs-2,
#wstheme .col-sm-2,
#wstheme .col-md-2,
#wstheme .col-lg-2,
#wstheme .col-xs-3,
#wstheme .col-sm-3,
#wstheme .col-md-3,
#wstheme .col-lg-3,
#wstheme .col-xs-4,
#wstheme .col-sm-4,
#wstheme .col-md-4,
#wstheme .col-lg-4,
#wstheme .col-xs-5,
#wstheme .col-sm-5,
#wstheme .col-md-5,
#wstheme .col-lg-5,
#wstheme .col-xs-6,
#wstheme .col-sm-6,
#wstheme .col-md-6,
#wstheme .col-lg-6,
#wstheme .col-xs-7,
#wstheme .col-sm-7,
#wstheme .col-md-7,
#wstheme .col-lg-7,
#wstheme .col-xs-8,
#wstheme .col-sm-8,
#wstheme .col-md-8,
#wstheme .col-lg-8,
#wstheme .col-xs-9,
#wstheme .col-sm-9,
#wstheme .col-md-9,
#wstheme .col-lg-9,
#wstheme .col-xs-10,
#wstheme .col-sm-10,
#wstheme .col-md-10,
#wstheme .col-lg-10,
#wstheme .col-xs-11,
#wstheme .col-sm-11,
#wstheme .col-md-11,
#wstheme .col-lg-11,
#wstheme .col-xs-12,
#wstheme .col-sm-12,
#wstheme .col-md-12,
#wstheme .col-lg-12 {
  position: relative;
  min-height: 1px;
  -webkit-transition: width .2s linear 0s;
  -moz-transition: width .2s linear 0s;
  -ms-transition: width .2s linear 0s;
  -o-transition: width .2s linear 0s;
  transition: width .2s linear 0s;
  padding-left:15px;
  padding-right:15px;
}
#wstheme .col-xs-1,
#wstheme .col-xs-2,
#wstheme .col-xs-3,
#wstheme .col-xs-4,
#wstheme .col-xs-5,
#wstheme .col-xs-6,
#wstheme .col-xs-7,
#wstheme .col-xs-8,
#wstheme .col-xs-9,
#wstheme .col-xs-10,
#wstheme .col-xs-11,
#wstheme .col-xs-12 {
  float: left;
}
#wstheme .col-xs-12 {
  width: 100%;
}
#wstheme .col-xs-11 {
  width: 91.66666667%;
}
#wstheme .col-xs-10 {
  width: 83.33333333%;
}
#wstheme .col-xs-9 {
  width: 75%;
}
#wstheme .col-xs-8 {
  width: 66.66666667%;
}
#wstheme .col-xs-7 {
  width: 58.33333333%;
}
#wstheme .col-xs-6 {
  width: 50%;
}
#wstheme .col-xs-5 {
  width: 41.66666667%;
}
#wstheme .col-xs-4 {
  width: 33.33333333%;
}
#wstheme .col-xs-3 {
  width: 25%;
}
#wstheme .col-xs-2 {
  width: 16.66666667%;
}
#wstheme .col-xs-1 {
  width: 8.33333333%;
}

@media (min-width: 768px) {

  #wstheme .col-sm-1,
  #wstheme .col-sm-2,
  #wstheme .col-sm-3,
  #wstheme .col-sm-4,
  #wstheme .col-sm-5,
  #wstheme .col-sm-6,
  #wstheme .col-sm-7,
  #wstheme .col-sm-8,
  #wstheme .col-sm-9,
  #wstheme .col-sm-10,
  #wstheme .col-sm-11,
  #wstheme .col-sm-12 {
    float: left;
  }
  #wstheme .col-sm-12 {
    width: 100%;
  }
  #wstheme .col-sm-11 {
    width: 91.66666667%;
  }
  #wstheme .col-sm-10 {
    width: 83.33333333%;
  }
  #wstheme .col-sm-9 {
    width: 75%;
  }
  #wstheme .col-sm-8 {
    width: 66.66666667%;
  }
  #wstheme .col-sm-7 {
    width: 58.33333333%;
  }
  #wstheme .col-sm-6 {
    width: 50%;
  }
  #wstheme .col-sm-5 {
    width: 41.66666667%;
  }
  #wstheme .col-sm-4 {
    width: 33.33333333%;
  }
  #wstheme .col-sm-3 {
    width: 25%;
  }
  #wstheme .col-sm-2 {
    width: 16.66666667%;
  }
  #wstheme .col-sm-1 {
    width: 8.33333333%;
  }
}

@media (min-width: 992px) {

  #wstheme .col-md-1,
  #wstheme .col-md-2,
  #wstheme .col-md-3,
  #wstheme .col-md-4,
  #wstheme .col-md-5,
  #wstheme .col-md-6,
  #wstheme .col-md-7,
  #wstheme .col-md-8,
  #wstheme .col-md-9,
  #wstheme .col-md-10,
  #wstheme .col-md-11,
  #wstheme .col-md-12 {
    float: left;
  }
  #wstheme .col-md-12 {
    width: 100%;
  }
  #wstheme .col-md-11 {
    width: 91.66666667%;
  }
  #wstheme .col-md-10 {
    width: 83.33333333%;
  }
  #wstheme .col-md-9 {
    width: 75%;
  }
  #wstheme .col-md-8 {
    width: 66.66666667%;
  }
  #wstheme .col-md-7 {
    width: 58.33333333%;
  }
  #wstheme .col-md-6 {
    width: 50%;
  }
  #wstheme .col-md-5 {
    width: 41.66666667%;
  }
  #wstheme .col-md-4 {
    width: 33.33333333%;
  }
  #wstheme .col-md-3 {
    width: 25%;
  }
  #wstheme .col-md-2 {
    width: 16.66666667%;
  }
  #wstheme .col-md-1 {
    width: 8.33333333%;
  }
}

@media (min-width: 1200px) {
  #wstheme .col-lg-1,
  #wstheme .col-lg-2,
  #wstheme .col-lg-3,
  #wstheme .col-lg-4,
  #wstheme .col-lg-5,
  #wstheme .col-lg-6,
  #wstheme .col-lg-7,
  #wstheme .col-lg-8,
  #wstheme .col-lg-9,
  #wstheme .col-lg-10,
  #wstheme .col-lg-11,
  #wstheme .col-lg-12 {
    float: left;
  }
  #wstheme .col-lg-12 {
    width: 100%;
  }
  #wstheme .col-lg-11 {
    width: 91.66666667%;
  }
  #wstheme .col-lg-10 {
    width: 83.33333333%;
  }
  #wstheme .col-lg-9 {
    width: 75%;
  }
  #wstheme .col-lg-8 {
    width: 66.66666667%;
  }
  #wstheme .col-lg-7 {
    width: 58.33333333%;
  }
  #wstheme .col-lg-6 {
    width: 50%;
  }
  #wstheme .col-lg-5 {
    width: 41.66666667%;
  }
  #wstheme .col-lg-4 {
    width: 33.33333333%;
  }
  #wstheme .col-lg-3 {
    width: 25%;
  }
  #wstheme .col-lg-2 {
    width: 16.66666667%;
  }
  #wstheme .col-lg-1 {
    width: 8.33333333%;
  }

}





/*!
 * Font Awesome Icon Picker
 * http://mjolnic.github.io/fontawesome-iconpicker/
 *
 * Originally written by (c) 2014 Javier Aguilar @mjolnic
 * Licensed under the MIT License
 * https://github.com/mjolnic/fontawesome-iconpicker/blob/master/LICENSE
 *
 */
/*
 * Font Awesome Icon Picker
 * http://mjolnic.github.io/fontawesome-iconpicker/
 *
 * Originally written by (c) 2014 Javier Aguilar @mjolnic
 * Licensed under the MIT License
 * https://github.com/mjolnic/fontawesome-iconpicker/blob/master/LICENSE
 *
 */
/*
 * Font Awesome Icon Picker
 * http://mjolnic.github.io/fontawesome-iconpicker/
 *
 * Originally written by (c) 2014 Javier Aguilar @mjolnic
 * Licensed under the MIT License
 * https://github.com/mjolnic/fontawesome-iconpicker/blob/master/LICENSE
 *
 */
.iconpicker-popover.popover {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  max-width: none;
  padding: 1px;
  text-align: left;
  width: 300px;
  max-width:300px;
  background: #f7f7f7;
}
.iconpicker-popover.popover.top,
.iconpicker-popover.popover.topLeftCorner,
.iconpicker-popover.popover.topLeft,
.iconpicker-popover.popover.topRight,
.iconpicker-popover.popover.topRightCorner {
  margin-top: -10px;
}
.iconpicker-popover.popover.right,
.iconpicker-popover.popover.rightTop,
.iconpicker-popover.popover.rightBottom {
  margin-left: 10px;
}
.iconpicker-popover.popover.bottom,
.iconpicker-popover.popover.bottomRightCorner,
.iconpicker-popover.popover.bottomRight,
.iconpicker-popover.popover.bottomLeft,
.iconpicker-popover.popover.bottomLeftCorner {
  margin-top: 10px;
}
.iconpicker-popover.popover.left,
.iconpicker-popover.popover.leftBottom,
.iconpicker-popover.popover.leftTop {
  margin-left: -10px;
}
.iconpicker-popover.popover.inline {
  margin: 0 0 14px 0;
  position: relative;
  display: inline-block;
  opacity: 1;
  top: auto;
  left: auto;
  bottom: auto;
  right: auto;
  max-width: 100%;
  box-shadow: none;
  z-index: auto;
  vertical-align: top;
}
.iconpicker-popover.popover.inline > .arrow {
  display: none;
}
.dropdown-menu .iconpicker-popover.inline {
  margin: 0;
  border: none;
}
.dropdown-menu.iconpicker-container {
  padding: 0;
}
.iconpicker-popover.popover .popover-title {
  padding: 14px;
  font-size: 14px;
  line-height: 16px;
  border-bottom: 1px solid #e3e3e3;
  background-color: #f5f5f5;
}
.iconpicker-popover.popover .popover-title input[type=search].iconpicker-search {
  margin: 0 0 2px 0;
}
.iconpicker-popover.popover .popover-title-text ~ input[type=search].iconpicker-search {
  margin-top: 14px;
}
.iconpicker-popover.popover .popover-content {
  padding: 0px;
  text-align: center;
}
.iconpicker-popover .popover-footer {
  float: none;
  clear: both;
  padding: 14px;
  text-align: right;
  margin: 0;
  border-top: 1px solid #e3e3e3;
  background-color: #f5f5f5;
}
.iconpicker-popover .popover-footer:before,
.iconpicker-popover .popover-footer:after {
  content: " ";
  display: table;
}
.iconpicker-popover .popover-footer:after {
  clear: both;
}
.iconpicker-popover .popover-footer .iconpicker-btn {
  margin-left: 10px;
}
.iconpicker-popover .popover-footer input[type=search].iconpicker-search {
  /*width:auto;
        float:left;*/
  margin-bottom: 14px;
}
.iconpicker-popover.popover > .arrow,
.iconpicker-popover.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.iconpicker-popover.popover > .arrow {
  border-width: 11px;
}
.iconpicker-popover.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.iconpicker-popover.popover.top > .arrow,
.iconpicker-popover.popover.topLeft > .arrow,
.iconpicker-popover.popover.topRight > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.iconpicker-popover.popover.top > .arrow:after,
.iconpicker-popover.popover.topLeft > .arrow:after,
.iconpicker-popover.popover.topRight > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #ffffff;
}
.iconpicker-popover.popover.topLeft > .arrow {
  left: 14px;
  margin-left: 0;
}
.iconpicker-popover.popover.topRight > .arrow {
  left: auto;
  right: 14px;
  margin-left: 0;
}
.iconpicker-popover.popover.right > .arrow,
.iconpicker-popover.popover.rightTop > .arrow,
.iconpicker-popover.popover.rightBottom > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.iconpicker-popover.popover.right > .arrow:after,
.iconpicker-popover.popover.rightTop > .arrow:after,
.iconpicker-popover.popover.rightBottom > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #ffffff;
}
.iconpicker-popover.popover.rightTop > .arrow {
  top: auto;
  bottom: 14px;
  margin-top: 0;
}
.iconpicker-popover.popover.rightBottom > .arrow {
  top: 14px;
  margin-top: 0;
}
.iconpicker-popover.popover.bottom > .arrow,
.iconpicker-popover.popover.bottomRight > .arrow,
.iconpicker-popover.popover.bottomLeft > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.iconpicker-popover.popover.bottom > .arrow:after,
.iconpicker-popover.popover.bottomRight > .arrow:after,
.iconpicker-popover.popover.bottomLeft > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #f5f5f5;
}
.iconpicker-popover.popover.bottomLeft > .arrow {
  left: 14px;
  margin-left: 0;
}
.iconpicker-popover.popover.bottomRight > .arrow {
  left: auto;
  right: 14px;
  margin-left: 0;
}
.iconpicker-popover.popover.left > .arrow,
.iconpicker-popover.popover.leftBottom > .arrow,
.iconpicker-popover.popover.leftTop > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.iconpicker-popover.popover.left > .arrow:after,
.iconpicker-popover.popover.leftBottom > .arrow:after,
.iconpicker-popover.popover.leftTop > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #ffffff;
  bottom: -10px;
}
.iconpicker-popover.popover.leftBottom > .arrow {
  top: 14px;
  margin-top: 0;
}
.iconpicker-popover.popover.leftTop > .arrow {
  top: auto;
  bottom: 14px;
  margin-top: 0;
}
.iconpicker {
  position: relative;
  text-align: left;
  text-shadow: none;
  line-height: 0;
  display: block;
  margin: 0;
  overflow: hidden;
}

.iconpicker:before,
.iconpicker:after {
  content: " ";
  display: table;
}
.iconpicker:after {
  clear: both;
}
.iconpicker .iconpicker-items {
  position: relative;
  clear: both;
  float: none;
  padding: 14px 0 0 14px;
  background: #fff;
  margin: 0;
  overflow: hidden;
  overflow-y: auto;
  min-height: 55px;
  max-height: 275px;
}
.iconpicker .iconpicker-items:before,
.iconpicker .iconpicker-items:after {
  content: " ";
  display: table;
}
.iconpicker .iconpicker-items:after {
  clear: both;
}
.iconpicker .iconpicker-item {
  float: left;
  width: 45px;
  height: 45px;
  line-height:45px;
  padding: 0;
  margin: 0 10px 10px 0;
  text-align: center;
  cursor: pointer;
  font-size: 25px;
  border:1px solid #d5d5d5;


}
.iconpicker .iconpicker-item:hover:not(.iconpicker-selected) {
  background-color: #eeeeee;
}
.iconpicker .iconpicker-item.iconpicker-selected {
  box-shadow: none;
}
.iconpicker-component {
  cursor: pointer;
}








</style>