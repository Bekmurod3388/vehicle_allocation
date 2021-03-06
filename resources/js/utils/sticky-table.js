!function(t){"function"==typeof define&&define.amd?define(t):t()}(function(){"use strict";
    /**
     * jQuery throttle / debounce - v1.1 - 3/7/2010
     * http://benalman.com/projects/jquery-throttle-debounce-plugin/
     *
     * Copyright (c) 2010 "Cowboy" Ben Alman
     * Dual licensed under the MIT and GPL licenses.
     * http://benalman.com/about/license/
     * @preserve
     */
    /**
     * jQuery throttle / debounce - v1.1 - 3/7/2010
     * http://benalman.com/projects/jquery-throttle-debounce-plugin/
     *
     * Copyright (c) 2010 "Cowboy" Ben Alman
     * Dual licensed under the MIT and GPL licenses.
     * http://benalman.com/about/license/
     * @preserve
     */
    var t,l,s,e,p,u,i,n;function o(t,e){this.element=t,this._defaults=n,this._name=i,this.options=p.extend({},n,e),this._init()}t=window,(e=t.jQuery||t.Cowboy||(t.Cowboy={})).throttle=s=function(n,o,a,d){var c,h=0;function t(){var t=this,e=+new Date-h,i=arguments;function s(){h=+new Date,a.apply(t,i)}d&&!c&&s(),c&&clearTimeout(c),d===l&&n<e?s():!0!==o&&(c=setTimeout(d?function(){c=l}:s,d===l?n-e:n))}return"boolean"!=typeof o&&(d=a,a=o,o=l),e.guid&&(t.guid=a.guid=a.guid||e.guid++),t},e.debounce=function(t,e,i){return i===l?s(t,e,!1):s(t,i,!1!==e)},
        /**
         * jQuery Stick Table Headers - v3.0.0
         * https://github.com/jpchip/stickytable
         *
         * Wrapped version of sticky table headers code here:
         * http://tympanus.net/codrops/2014/01/09/sticky-table-headers-columns/
         * http://tympanus.net/Tutorials/StickyTableHeaders/
         *
         * CSS located in jquery-stickytable.css
         *
         * Depends:
         * jQuery
         * jQuery throttle / debounce - v1.1 - 3/7/2010
         * http://benalman.com/projects/jquery-throttle-debounce-plugin/
         * @preserve
         */
        p=jQuery,u=window,document,n={copyTableClass:!0,copyEvents:!(i="stickyTable"),overflowy:!1},o.prototype._init=function(){var t,e,i,s,n,o,a,d,c,h,l=p(u),r=p(this.element),f=[];p(this.element).is("table")||p.error("Target element must be a table"),p(this.element).hasClass("sticky-enabled")||0<r.find("thead").length&&0<r.find("th").length&&(t=r.find("thead").clone(this.options.copyEvents),e=r.find("thead, tbody").clone(this.options.copyEvents),r.css({margin:0,width:"100%"}).wrap('<div class="sticky-wrap" />'),this.options.overflowy&&r.parent().addClass("overflow-y"),r.attr("class")&&(f=r.attr("class").split(/\s+/)),r.addClass("sticky-enabled"),r.after('<table class="sticky-thead" />'),0<r.find("tbody th").length&&r.after('<table class="sticky-col" /><table class="sticky-intersect" />'),i=r.siblings(".sticky-thead"),s=r.siblings(".sticky-col"),n=r.siblings(".sticky-intersect"),o=r.parent(".sticky-wrap"),this.options.copyTableClass&&p.each(f,function(t,e){i.addClass(e),s.addClass(e),n.addClass(e)}),i.append(t),s.append(e).find("thead th:gt(0)").remove().end().find("tbody td").remove(),n.html("<thead><tr><th>"+r.find("thead th:first-child").html()+"</th></tr></thead>"),n.find("th").height(r.find("thead th:first-child").height()),d=function(){var t=h();r.height()>o.height()?0<o.scrollTop()?i.add(n).css({opacity:1,top:o.scrollTop()}):i.add(n).css({opacity:0,top:0}):l.scrollTop()>r.offset().top&&l.scrollTop()<r.offset().top+r.outerHeight()-t?i.add(n).css({opacity:1,top:l.scrollTop()-r.offset().top}):i.add(n).css({opacity:0,top:0})},c=function(){0<o.scrollLeft()?s.add(n).css({opacity:1,left:o.scrollLeft()}):s.css({opacity:0}).add(n).css({left:0})},h=function(){var t=0;return r.find("tbody tr:lt(3)").each(function(){t+=r.height()}),t>.25*l.height()&&(t=.25*l.height()),t+=i.height()},(a=function(){r.find("thead th").each(function(t){i.find("th").eq(t).width(p(this).width())}).end().find("tr").each(function(t){s.find("tr").eq(t).height(p(this).height())}),i.width(r.width()),s.find("th").add(n.find("th")).width(r.find("thead th").width())})(),r.parent(".sticky-wrap").scroll(function(){d(),c()}),l.on("load",a).resize(p.debounce(500,function(){a(),d(),c()})).scroll(d))},o.prototype.destroy=function(){var t=p(this.element),e=t.siblings(".sticky-thead"),i=t.siblings(".sticky-col"),s=t.siblings(".sticky-intersect");this.options=p.extend({},n),t.hasClass("sticky-enabled")&&(e.remove(),i.remove(),s.remove(),t.unwrap(),t.removeClass("sticky-enabled")),p.removeData(this.element,"plugin_"+this._name)},p.fn[i]=function(e){return this.each(function(){var t=p.data(this,"plugin_"+i);t?("string"==typeof e||e instanceof String)&&(void 0!==t[e]&&p.isFunction(t[e])?-1!==e.indexOf("_")?p.error("Method "+e+" is private!"):t[e](Array.prototype.slice.call(arguments,1)):p.error("Method "+e+" does not exist.")):"object"!=typeof e&&e?p.error("Plugin must be initialised before using method: "+e):p.data(this,"plugin_"+i,new o(this,e))})}});
