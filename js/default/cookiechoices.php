function allowCookie(){var a,b=document.getElementsByClassName("el"),c=new RegExp("<script.*?");for(a=0;a<b.length;a++){b[a].removeChild(b[a].childNodes[0]);var d=c.test(jsArr[a]);if(d){var e=/<script.*?src="(.*?)"/,f=e.test(jsArr[a]);f&&(f=e.exec(jsArr[a]),loadJS(f[1]));var g=/<script\b[^>]*>([\s\S]*?)<\/script>/gm,h=g.exec(jsArr[a]);h[1]&&appendJS(h[1])}else{var i=b[a].innerHTML;d=i.replace(/<cookie>/g,jsArr[a]),b[a].innerHTML=d}}}function loadJS(a){var b=document.createElement("script");b.type="application/javascript",b.src=a,document.body.appendChild(b)}function appendJS(a){var b=document.createElement("script");b.type="text/javascript";var c=a;try{b.appendChild(document.createTextNode(c)),document.body.appendChild(b)}catch(d){b.text=c,document.body.appendChild(b)}}!function(a){if(a.cookieChoices)return a.cookieChoices;var b=a.document,c=(b.documentElement,"textContent"in b.body),d=function(){function a(a){var b=a.offsetHeight,c=getComputedStyle(a);return b+=parseInt(c.marginTop)+parseInt(c.marginBottom)}function d(a,c,d,e){var f=b.createElement("div");f.id=s,f.className=container;var j=b.createElement("div");return j.className=contentStyle,j.appendChild(g(a)),d&&e&&j.appendChild(i(d,e)),j.appendChild(h(c)),f.appendChild(j),f}function e(a,c,d,e){var f=b.createElement("div");f.id=s;var j=b.createElement("div");j.className="glassStyle";var k=b.createElement("div");k.className="contentStyle";var l=b.createElement("div");l.className="dialogStyle";var m=h(c);return k.appendChild(g(a)),d&&e&&k.appendChild(i(d,e)),k.appendChild(m),l.appendChild(k),f.appendChild(j),f.appendChild(l),f}function f(a,b){c?a.textContent=b:a.innerText=b}function g(a){var c=b.createElement("span");return c.className="consentText",f(c,a),c}function h(a){var c=b.createElement("a");return f(c,a),c.id=t,c.className=closeClass,c.href="#",c}function i(a,c){var d=b.createElement("a");return f(d,a),d.className=infoClass,d.href=c,tar&&(d.target="_blank"),d}function j(){return q()&&(htmlM&&(b.getElementsByTagName("html")[0].style.marginTop=u),allowCookie(),p(),n()),rel&&b.location.reload(),!1}function k(c,f,g,h,i){if(q()){var k=i?e(c,f,g,h):d(c,f,g,h),l=b.createDocumentFragment();l.appendChild(k),b.body.appendChild(l.cloneNode(!0)),htmlM&&(b.getElementsByTagName("html")[0].style.marginTop=a(b.getElementById("cookieChoiceInfo"))+"px"),b.getElementById(t).onclick=j,scroll&&(b.onscroll=j)}}function l(a,b,c,d){k(a,b,c,d,!1)}function m(a,b,c,d){k(a,b,c,d,!0)}function n(){var a=b.getElementById(s);null!==a&&a.parentNode.removeChild(a)}function o(){j()}function p(){var a=new Date;a.setFullYear(a.getFullYear()+1),b.cookie=r+"="+coVA+"; expires="+a.toGMTString()+";path=/"}function q(){return!b.cookie.match(new RegExp(r+"=([^;]+)"))}var r=coNA,s="cookieChoiceInfo",t="cookieChoiceDismiss",u=b.getElementsByTagName("html")[0].style.marginTop,v={};return v.showCookieConsentBar=l,v.showCookieConsentDialog=m,v.removeCookieConsent=o,v}();return a.cookieChoices=d,d}(this);