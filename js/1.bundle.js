(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{134:function(e,t,n){"use strict";var o=n(135);function r(){}function a(){}a.resetWarningCache=r,e.exports=function(){function e(e,t,n,r,a,c){if(c!==o){var l=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw l.name="Invariant Violation",l}}function t(){return e}e.isRequired=e;var n={array:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:a,resetWarningCache:r};return n.PropTypes=n,n}},135:function(e,t,n){"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},138:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),r=n(22),a=i(r),c=i(n(403)),l=i(n(93)),u=i(n(50));function i(e){return e&&e.__esModule?e:{default:e}}var s=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,r.Component),o(t,[{key:"scrollToWork",value:function(){window.location.href="#work",(0,l.default)(document.getElementById("what"))}},{key:"render",value:function(){var e=this,t=this.props.data.Why,n=t.img,o=t.section1,r=t.section2,l=this.props.data.PersonalInfo,u=l.name,i=l.email;return a.default.createElement("section",{id:c.default.why},a.default.createElement("h1",null,o),a.default.createElement("h2",null,r),a.default.createElement("div",{className:c.default.containerbtn},a.default.createElement("button",{className:"btn",onClick:function(){return window.location.href="mailto:"+i+"?Subject=Hello"},target:"_top"},a.default.createElement("span",null,"Contact me")),a.default.createElement("button",{className:"btn focus",onClick:function(){return e.scrollToWork()}},a.default.createElement("span",null,"Find out more"))),a.default.createElement("img",{src:n,alt:u,className:c.default.circle}))}}]),t}();t.default=s,s.propTypes={data:u.default.object,Why:u.default.object}},50:function(e,t,n){e.exports=n(134)()}}]);