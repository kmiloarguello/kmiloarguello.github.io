(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{141:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var l=function(){function e(e,t){for(var a=0;a<t.length;a++){var l=t[a];l.enumerable=l.enumerable||!1,l.configurable=!0,"value"in l&&(l.writable=!0),Object.defineProperty(e,l.key,l)}}return function(t,a,l){return a&&e(t.prototype,a),l&&e(t,l),t}}(),n=a(22),r=o(n),u=o(a(403));function o(e){return e&&e.__esModule?e:{default:e}}var i=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,n.Component),l(t,[{key:"renderSiteMap",value:function(){return this.props.data.Header.menu.map(function(e,t){return r.default.createElement("li",{key:t},r.default.createElement("a",{href:e.href},e.title))})}},{key:"render",value:function(){var e=this.props.data.PersonalInfo,t=e.logo,a=e.name,l=e.email,n=e.cv,o=e.linkedin,i=e.github,c=this.props.data.Legal.legal,f=this.props.data.AdditionalIcons,d=f.iconGithub,s=f.iconLinkedin;return r.default.createElement("footer",{id:"footer",className:"page-footer"},r.default.createElement("div",{className:u.default.contFooter},r.default.createElement("div",{className:u.default.social},r.default.createElement("img",{className:u.default.logo,src:t,alt:"Logo of "+a}),r.default.createElement("p",null,c),r.default.createElement("ul",null,r.default.createElement("li",null,r.default.createElement("a",{href:o,target:"_blank",className:u.default.linkedinicon},r.default.createElement("img",{src:s,alt:"Linkedin icon"}))),r.default.createElement("li",null,r.default.createElement("a",{href:i,target:"_blank",className:u.default.githubicon},r.default.createElement("img",{src:d,alt:"Github icon"}))))),r.default.createElement("div",{className:u.default.information},r.default.createElement("h2",null,"Contact"),r.default.createElement("a",{href:"mailto:"+l+"?Subject=Hello",target:"_top"},l),r.default.createElement("a",{href:n,target:"_blank"},"Curriculum Vitae")),r.default.createElement("div",{className:u.default.structure},r.default.createElement("h2",null,"Sitemap"),r.default.createElement("ul",null,this.renderSiteMap()))),r.default.createElement("hr",null),r.default.createElement("div",{className:u.default.copyright},r.default.createElement("small",null,"© ",(new Date).getFullYear()+" "+a)))}}]),t}();t.default=i}}]);