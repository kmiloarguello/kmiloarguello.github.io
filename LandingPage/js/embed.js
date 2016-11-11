/**
 * Veeva Engage Embed Javascript Library v1.3
 *
 * Copyright 2015, Veeva Systems Inc.
 *
 * History:
 *   2014-01-03: Initial version
 *   2014-08-28: 1.1 - Remove version from the name
 *   2015-03-20: 1.2 - Add dns switcher for IE
 *   2015-03-26: 1.2 - Only use dns switcher for IE8 & 9
 *   2015-05-11: 1.3 - Only use dns switcher when file is being served from cdn
 */

var VeevaEngage = {
    initialize: function(id, params) {
        var container = document.getElementById(id);
        if(container) {
            var qparams = getQParams(params);
            params = mergeInto(params, qparams);
            params.width = checkSizeParam(params.width);
            params.height = checkSizeParam(params.height);
            params.referrer = document.referrer;
            params.url = window.location.href.split("?")[0];

            var iframe = document.createElement("iframe");
            iframe.frameBorder = 0;
            iframe.width = params.width;
            iframe.height = params.height;
            iframe.style.overflow = "hidden";
            iframe.setAttribute("scrolling", "no");
            iframe.setAttribute("allowfullscreen", "true");
            iframe.setAttribute("webkitallowfullscreen", "true");
            var ieVersion = getIEVersion();
            var src = (ieVersion > 0 && ieVersion < 10) && isStatic(params.dns) ? createDnsForDomain(params.mc) : params.dns;
            if(isDefined(src) === false) {
                throw "VeevaException: must specify a dns parameter";
            }
            var paramString = "";
            for(var key in params) {
                if(!key || key.length == 0) {
                    continue;
                }
                if(paramString.length > 0) {
                    paramString += "&";
                }
                var value = params[key];
                paramString = paramString + key + "=" + encodeURIComponent(value);
            }

            if(paramString.length > 0) {
                src = src + "?" + paramString;
            }
            iframe.setAttribute("src", src);
            container.appendChild(iframe);

        } else {
            throw "VeevaException: no element with id " + id + " found";
        }

        function getQParams() {
            var params = {};
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for(var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
                params[pair[0]] = pair[1];
            }
            return params;
        }

        function mergeInto(source, other) {
            for(var key in other) {
                if(other.hasOwnProperty(key) === true) {
                    source[key] = other[key];
                }
            }
            return source;
        }

        function checkSizeParam(param) {
            if(isDefined(param) === false) {
                return "100%";
            }
            var result = param.toString();
            if(result.length === 0) {
                return "100%";
            }
            if(result.indexOf("%") < 0) {
                if(result.toLowerCase().indexOf("px") < 0) {
                    result = result + "px";
                }
            }
            return param;
        }

        /**
         * This method return a new dns url under the mc engine domain
         * It is used to prevent potential cross domain request issue
         * @param mcURL mc engine domain
         * @returns {string}
         */
        function createDnsForDomain(mcURL) {
            if(isDefined(mcURL) === true) {
                return mcURL + '/app/engage/index';
            }
            return null;
        }

        function getIEVersion() {
            // ignore IE11 since we are looking for version 8 and 9
            if(/MSIE (\d+\.\d+);/.test(navigator.userAgent)) { //test for MSIE x.x;
                return Number(RegExp.$1); // capture x.x portion and store as a number
            }
            return -1;
        }

        function isStatic(dnsUrl) {
            if(isDefined(dnsUrl) === true && dnsUrl.indexOf(".html") >= 0) {
                return true;
            }
            return false;
        }

        function isDefined(value) {
            return typeof(value) !== 'undefined' && value !== null && value !== '';
        }

    }
};

// callback
// onVeevaEngageReady();