<?php include ("./include/header.php")?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
                <script type="importmap" data-ot-ignore>
        {
            "imports": {
                    "/assets/javascript/braze.js": "/assets/javascript/braze-a0bf1fbd2148bd8377701930209106ee.js",
                    "/assets/javascript/ga.js": "/assets/javascript/ga-e7f9d9a577470e9d73514db007360303.js",
                    "/assets/javascript/ga-ecommerce.js": "/assets/javascript/ga-ecommerce-4020a2a28065c2aff85f3b50e7a443dd.js",
                    "/assets/javascript/ga-ecommerce-cart.js": "/assets/javascript/ga-ecommerce-cart-603b38f39842ae9863c7916b35a8a018.js",
                    "/assets/javascript/ga-ecommerce-item-list.js": "/assets/javascript/ga-ecommerce-item-list-f6c2559384acb540336187fe77935bbc.js",
                    "/assets/javascript/ga-ecommerce-slot.js": "/assets/javascript/ga-ecommerce-slot-16c7e82521f7b2e04f24a294d5628da3.js",
                    "/assets/javascript/ga-instance.js": "/assets/javascript/ga-instance-4c1a0e6e05ae8de21ecebc2ea794bd9a.js",
                    "/assets/javascript/log.js": "/assets/javascript/log-9ffb318c99cdd9a2962172343ea2e523.js",
                    "/assets/javascript/onetrust.js": "/assets/javascript/onetrust-2ab3f9775805aeff4a1d171f57437721.js",
                    "/assets/javascript/platform.js": "/assets/javascript/platform-7c4e55191527e4d1221f0a3817c2f70a.js",
                    "/assets/javascript/tower.js": "/assets/javascript/tower-313535314a506035d020dbf758bcf9a0.js",
                    "/assets/javascript/uuid.js": "/assets/javascript/uuid-5c8fc36be6227986b44b259c33164d73.js",
                    "/assets/javascript/voxlytics.js": "/assets/javascript/voxlytics-dcc360da1ad70556afe2d5626a134b4d.js"
            }
        }
    </script>


                <script src="https://cdn.cookielaw.org/consent/875eb283-28ea-45f1-b220-2282bbb56c28/OtAutoBlock.js" type="text/javascript" data-ot-ignore></script>


                <!-- OneTrust Cookies Consent Notice start -->
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8"  class="" data-domain-script="875eb283-28ea-45f1-b220-2282bbb56c28"data-document-language="true" data-ot-ignore></script>
    <script type="text/javascript" data-ot-ignore>
        function OptanonWrapper() {}
    </script>
    <!-- OneTrust Cookies Consent Notice end -->

        <script type="module" data-ot-ignore>
            import { default as Consent } from '/assets/javascript/onetrust-2ab3f9775805aeff4a1d171f57437721.js';

            (function() {
                if (Consent) {
                    window.Consent = new Consent();

                    if (window.OneTrust) {
                        window.OneTrust.OnConsentChanged((event) => {
                            window.Consent.updateCategories(event.detail);

                            const performance = window.Consent.allowsPerformance();
                            const targeting = window.Consent.allowsTargeting();

                            if (window.Voxlytics) {
                                window.Voxlytics.getPlatform().updateConsent(performance, targeting);
                            }
                        });
                    }
                }
            })();
        </script>


            <script>
    window.dataLayer = window.dataLayer || [];
</script>
        <script>
            function gtag(){ dataLayer.push(arguments); }
            gtag('js', new Date());
                gtag('config', 'G-HJTQVCGYMM', {'transport_type':'beacon'});
        </script>
    <script type="module" data-ot-ignore>
        import * as GoogleAnalytics from '/assets/javascript/ga-e7f9d9a577470e9d73514db007360303.js';

        (function() {
            if (GoogleAnalytics) {
                window.GoogleAnalytics = GoogleAnalytics;

                    const config = {
                        debug: false,
                        containerId: 'GTM-5PMMF4',
                        measurementId: 'G-HJTQVCGYMM',
                    };

                    GoogleAnalytics.configure(config);

                            GoogleAnalytics.setClient('424673426.1651583243');

                GoogleAnalytics.requestClientData('virtual_pv')
                        .then((data) => {
                            let title = window.location.pathname.split('/').pop();
                            let metaDescription = document.querySelector('meta[name="description"]');

                            Object.assign(data.page, {
                                url: window.location.href,
                                location: window.location.hostname,
                                path: window.location.pathname,
                                title: title ? title : 'home',
                                referral: document.referrer ? document.referrer : null,
                                description_length: metaDescription ? metaDescription.content.length : 0
                            });

                            GoogleAnalytics.push(data);

                                let userLoggedIn = false;
                                if (userLoggedIn) {
                                    GoogleAnalytics.trackClientEvent('custom_event', {
                                        event_category: 'membership',
                                        event_action: 'login',
                                        event_label: null,
                                        event_non_interaction: false
                                    });
                                }
                        });
            }
        })();
    </script>


        <title>Movies, Cinema Listings & Latest Films | VOX Cinemas Egypt</title>
        <meta charset="utf-8" />

            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <script type="text/javascript" data-ot-ignore>
    ;window.NREUM||(NREUM={});NREUM.init={distributed_tracing:{enabled:true},privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]}};

    ;NREUM.loader_config={accountID:"1359645",trustKey:"1359645",agentID:"1120227502",licenseKey:"NRBR-b8d45923694eddb8f92",applicationID:"1120227502"};
    ;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"NRBR-b8d45923694eddb8f92",applicationID:"1120227502",sa:1};
    ;/*! For license information please see nr-loader-spa-1.238.0.min.js.LICENSE.txt */
    (()=>{"use strict";var e,t,r={5763:(e,t,r)=>{r.d(t,{P_:()=>f,Mt:()=>p,C5:()=>s,DL:()=>v,OP:()=>T,lF:()=>D,Yu:()=>y,Dg:()=>h,CX:()=>c,GE:()=>b,sU:()=>_});var n=r(8632),i=r(9567);const o={beacon:n.ce.beacon,errorBeacon:n.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.D)(t,o),(0,n.Qy)(e,a[e],"info")}var u=r(7056);const d=()=>{const e={blockSelector:"[data-nr-block]",maskInputOptions:{password:!0}};return{allow_bfcache:!0,privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,block_internal:!0,enabled:!0,harvestTimeSeconds:10},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},session:{domain:void 0,expiresMs:u.oD,inactiveMs:u.Hb},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0,harvestTimeSeconds:10},metrics:{enabled:!0},page_action:{enabled:!0,harvestTimeSeconds:30},page_view_event:{enabled:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,long_task:!1},session_trace:{enabled:!0,harvestTimeSeconds:10},harvest:{tooManyRequestsDelay:60},session_replay:{enabled:!1,harvestTimeSeconds:60,sampleRate:.1,errorSampleRate:.1,maskTextSelector:"*",maskAllInputs:!0,get blockClass(){return"nr-block"},get ignoreClass(){return"nr-ignore"},get maskTextClass(){return"nr-mask"},get blockSelector(){return e.blockSelector},set blockSelector(t){e.blockSelector+=",".concat(t)},get maskInputOptions(){return e.maskInputOptions},set maskInputOptions(t){e.maskInputOptions={...t,password:!0}}},spa:{enabled:!0,harvestTimeSeconds:10}}},l={};function f(e){if(!e)throw new Error("All configuration objects require an agent identifier!");if(!l[e])throw new Error("Configuration for ".concat(e," was never set"));return l[e]}function h(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");l[e]=(0,i.D)(t,d()),(0,n.Qy)(e,l[e],"config")}function p(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");var r=f(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const g={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},m={};function v(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!m[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return m[e]}function b(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");m[e]=(0,i.D)(t,g),(0,n.Qy)(e,m[e],"loader_config")}const y=(0,n.mF)().o;var w=r(385),A=r(6818);const x={buildEnv:A.Re,bytesSent:{},queryBytesSent:{},customTransaction:void 0,disabled:!1,distMethod:A.gF,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,offset:Math.floor(w._A?.performance?.timeOrigin||w._A?.performance?.timing?.navigationStart||Date.now()),onerror:void 0,origin:""+w._A.location,ptid:void 0,releaseIds:{},session:void 0,xhrWrappable:"function"==typeof w._A.XMLHttpRequest?.prototype?.addEventListener,version:A.q4,denyList:void 0},E={};function T(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!E[e])throw new Error("Runtime for ".concat(e," was never set"));return E[e]}function _(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");E[e]=(0,i.D)(t,x),(0,n.Qy)(e,E[e],"runtime")}function D(e){return function(e){try{const t=s(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}(e)}},9567:(e,t,r)=>{r.d(t,{D:()=>i});var n=r(50);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.Z)("Setting a Configurable requires an object as input");if(!t||"object"!=typeof t)return(0,n.Z)("Setting a Configurable requires a model to set its initial properties");const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.Z)("An error occurred while setting a property of a Configurable",e)}return r}catch(e){(0,n.Z)("An error occured while setting a Configurable",e)}}},6818:(e,t,r)=>{r.d(t,{Re:()=>i,gF:()=>o,q4:()=>n});const n="1.238.0",i="PROD",o="CDN"},385:(e,t,r)=>{r.d(t,{FN:()=>a,IF:()=>u,Nk:()=>l,Tt:()=>s,_A:()=>o,il:()=>n,pL:()=>c,v6:()=>i,w1:()=>d});const n="undefined"!=typeof window&&!!window.document,i="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),o=n?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),a=""+o?.location,s=/iPad|iPhone|iPod/.test(navigator.userAgent),c=s&&"undefined"==typeof SharedWorker,u=(()=>{const e=navigator.userAgent.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),d=Boolean(n&&window.document.documentMode),l=!!navigator.sendBeacon},1117:(e,t,r)=>{r.d(t,{w:()=>o});var n=r(50);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.Z)("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(i).includes(t)&&(this.sharedContext[t]=r)}))}catch(e){(0,n.Z)("An error occured while setting SharedContext",e)}}}},8e3:(e,t,r)=>{r.d(t,{L:()=>d,R:()=>c});var n=r(8325),i=r(1284),o=r(4322),a=r(3325);const s={};function c(e,t){const r={staged:!1,priority:a.p[t]||0};u(e),s[e].get(t)||s[e].set(t,r)}function u(e){e&&(s[e]||(s[e]=new Map))}function d(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"feature";if(u(e),!e||!s[e].get(t))return a(t);s[e].get(t).staged=!0;const r=[...s[e]];function a(t){const r=e?n.ee.get(e):n.ee,a=o.X.handlers;if(r.backlog&&a){var s=r.backlog[t],c=a[t];if(c){for(var u=0;s&&u<s.length;++u)l(s[u],c);(0,i.D)(c,(function(e,t){(0,i.D)(t,(function(t,r){r[0].on(e,r[1])}))}))}delete a[t],r.backlog[t]=null,r.emit("drain-"+t,[])}}r.every((e=>{let[t,r]=e;return r.staged}))&&(r.sort(((e,t)=>e[1].priority-t[1].priority)),r.forEach((e=>{let[t]=e;a(t)})))}function l(e,t){var r=e[1];(0,i.D)(t[r],(function(t,r){var n=e[0];if(r[0]===n){var i=r[1],o=e[3],a=e[2];i.apply(o,a)}}))}},8325:(e,t,r)=>{r.d(t,{A:()=>c,ee:()=>u});var n=r(8632),i=r(2210),o=r(5763);class a{constructor(e){this.contextId=e}}var s=r(3117);const c="nr@context:".concat(s.a),u=function e(t,r){var n={},s={},d={},f=!1;try{f=16===r.length&&(0,o.OP)(r).isolatedBacklog}catch(e){}var h={on:g,addEventListener:g,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=p(n),c=m(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var f=b()[s[e]];f&&f.push([h,e,r,a]);return a},get:v,listeners:m,context:p,buffer:function(e,t){const r=b();if(t=t||"feature",h.aborted)return;Object.entries(e||{}).forEach((e=>{let[n,i]=e;s[i]=t,t in r||(r[t]=[])}))},abort:l,aborted:!1,isBuffering:function(e){return!!b()[s[e]]},debugId:r,backlog:f?{}:t&&"object"==typeof t.backlog?t.backlog:{}};return h;function p(e){return e&&e instanceof a?e:e?(0,i.X)(e,c,(()=>new a(c))):new a(c)}function g(e,t){n[e]=m(e).concat(t)}function m(e){return n[e]||[]}function v(t){return d[t]=d[t]||e(h,t)}function b(){return h.backlog}}(void 0,"globalEE"),d=(0,n.fP)();function l(){u.aborted=!0,u.backlog={}}d.ee||(d.ee=u)},5546:(e,t,r)=>{r.d(t,{E:()=>n,p:()=>i});var n=r(8325).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4322:(e,t,r)=>{r.d(t,{X:()=>o});var n=r(5546);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3239:(e,t,r)=>{r.d(t,{bP:()=>s,iz:()=>c,m$:()=>a});var n=r(385);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n._A.addEventListener("test",null,e),n._A.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;window.addEventListener(e,t,a(r,n))}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;document.addEventListener(e,t,a(r,n))}},3117:(e,t,r)=>{r.d(t,{a:()=>n});const n=(0,r(4402).Rl)()},4402:(e,t,r)=>{r.d(t,{Ht:()=>u,M:()=>c,Rl:()=>a,ky:()=>s});var n=r(385);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n._A?.crypto||n._A?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(31))),i.split("").map((e=>"x"===e?o(t,++r).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n._A?.crypto||n._A?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(31)));const a=[];for(var s=0;s<e;s++)a.push(o(r,++i).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},7056:(e,t,r)=>{r.d(t,{Bq:()=>n,Hb:()=>o,oD:()=>i});const n="NRBA",i=144e5,o=18e5},7894:(e,t,r)=>{function n(){return Math.round(performance.now())}r.d(t,{z:()=>n})},7243:(e,t,r)=>{r.d(t,{e:()=>o});var n=r(385),i={};function o(e){if(e in i)return i[e];if(0===(e||"").indexOf("data:"))return{protocol:"data"};let t;var r=n._A?.location,o={};if(n.il)t=document.createElement("a"),t.href=e;else try{t=new URL(e,r.href)}catch(e){return o}o.port=t.port;var a=t.href.split("://");!o.port&&a[1]&&(o.port=a[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===a[0]?"443":"80"),o.hostname=t.hostname||r.hostname,o.pathname=t.pathname,o.protocol=a[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var s=!t.protocol||":"===t.protocol||t.protocol===r.protocol,c=t.hostname===r.hostname&&t.port===r.port;return o.sameOrigin=s&&(!t.hostname||c),"/"===o.pathname&&(i[e]=o),o}},50:(e,t,r)=>{function n(e,t){"function"==typeof console.warn&&(console.warn("New Relic: ".concat(e)),t&&console.warn(t))}r.d(t,{Z:()=>n})},2587:(e,t,r)=>{r.d(t,{N:()=>c,T:()=>u});var n=r(8325),i=r(5546),o=r(8e3),a=r(3325);const s={stn:[a.D.sessionTrace],err:[a.D.jserrors,a.D.metrics],ins:[a.D.pageAction],spa:[a.D.spa],sr:[a.D.sessionReplay,a.D.sessionTrace]};function c(e,t){const r=n.ee.get(t);e&&"object"==typeof e&&(Object.entries(e).forEach((e=>{let[t,n]=e;void 0===u[t]&&(s[t]?s[t].forEach((e=>{n?(0,i.p)("feat-"+t,[],void 0,e,r):(0,i.p)("block-"+t,[],void 0,e,r),(0,i.p)("rumresp-"+t,[Boolean(n)],void 0,e,r)})):n&&(0,i.p)("feat-"+t,[],void 0,void 0,r),u[t]=Boolean(n))})),Object.keys(s).forEach((e=>{void 0===u[e]&&(s[e]?.forEach((t=>(0,i.p)("rumresp-"+e,[!1],void 0,t,r))),u[e]=!1)})),(0,o.L)(t,a.D.pageViewEvent))}const u={}},2210:(e,t,r)=>{r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},1284:(e,t,r)=>{r.d(t,{D:()=>n});const n=(e,t)=>Object.entries(e||{}).map((e=>{let[r,n]=e;return t(r,n)}))},4351:(e,t,r)=>{r.d(t,{P:()=>o});var n=r(8325);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}}}},3960:(e,t,r)=>{r.d(t,{K:()=>a,b:()=>o});var n=r(3239);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.bP)("load",e,t)}function a(e){if(i())return e();(0,n.iz)("DOMContentLoaded",e)}},8632:(e,t,r)=>{r.d(t,{EZ:()=>u,Qy:()=>c,ce:()=>o,fP:()=>a,gG:()=>d,mF:()=>s});var n=r(7894),i=r(385);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return i._A.NREUM||(i._A.NREUM={}),void 0===i._A.newrelic&&(i._A.newrelic=i._A.NREUM),i._A.NREUM}function s(){let e=a();return e.o||(e.o={ST:i._A.setTimeout,SI:i._A.setImmediate,CT:i._A.clearTimeout,XHR:i._A.XMLHttpRequest,REQ:i._A.Request,EV:i._A.Event,PR:i._A.Promise,MO:i._A.MutationObserver,FETCH:i._A.fetch}),e}function c(e,t,r){let i=a();const o=i.initializedAgents||{},s=o[e]||{};return Object.keys(s).length||(s.initializedAt={ms:(0,n.z)(),date:new Date}),i.initializedAgents={...o,[e]:{...s,[r]:t}},i}function u(e,t){a()[e]=t}function d(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},7956:(e,t,r)=>{r.d(t,{N:()=>i});var n=r(3239);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0;return void(0,n.iz)("visibilitychange",(function(){if(t)return void("hidden"==document.visibilityState&&e());e(document.visibilityState)}),r,i)}},1214:(e,t,r)=>{r.d(t,{em:()=>b,u5:()=>j,QU:()=>O,_L:()=>I,Gm:()=>H,Lg:()=>L,BV:()=>G,Kf:()=>K});var n=r(8325),i=r(3117);const o="nr@original:".concat(i.a);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&e instanceof Function&&e.apply&&!e[o])}var l=r(2210),f=r(385);const h={},p=f._A.XMLHttpRequest,g="addEventListener",m="removeEventListener",v="nr@wrapped:".concat(n.A);function b(e){var t=function(e){return(e||n.ee).get("events")}(e);if(h[t.debugId]++)return t;h[t.debugId]=1;var r=c(t,!0);function i(e){r.inPlace(e,[g,m],"-",o)}function o(e,t){return e[1]}return"getPrototypeOf"in Object&&(f.il&&y(document,i),y(f._A,i),y(p.prototype,i)),t.on(g+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,l.X)(n,v,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(m+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function y(e,t){let r=e;for(;"object"==typeof r&&!Object.prototype.hasOwnProperty.call(r,g);)r=Object.getPrototypeOf(r);for(var n=arguments.length,i=new Array(n>2?n-2:0),o=2;o<n;o++)i[o-2]=arguments[o];r&&t(r,...i)}var w="fetch-",A=w+"body-",x=["arrayBuffer","blob","json","text","formData"],E=f._A.Request,T=f._A.Response,_="prototype";const D={};function j(e){const t=function(e){return(e||n.ee).get("fetch")}(e);if(!(E&&T&&f._A.fetch))return t;if(D[t.debugId]++)return t;function r(e,r,i){var o=e[r];"function"==typeof o&&(e[r]=function(){var e,r=[...arguments],a={};t.emit(i+"before-start",[r],a),a[n.A]&&a[n.A].dt&&(e=a[n.A].dt);var s=o.apply(this,r);return t.emit(i+"start",[r,e],s),s.then((function(e){return t.emit(i+"end",[null,e],s),e}),(function(e){throw t.emit(i+"end",[e],s),e}))})}return D[t.debugId]=1,x.forEach((e=>{r(E[_],e,A),r(T[_],e,A)})),r(f._A,"fetch",w),t.on(w+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(w+"done",[null,r],n)}else t.emit(w+"done",[e],n)})),t}const C={},N=["pushState","replaceState"];function O(e){const t=function(e){return(e||n.ee).get("history")}(e);return!f.il||C[t.debugId]++||(C[t.debugId]=1,c(t).inPlace(window.history,N,"-")),t}var S=r(3239);const P={},R=["appendChild","insertBefore","replaceChild"];function I(e){const t=function(e){return(e||n.ee).get("jsonp")}(e);if(!f.il||P[t.debugId])return t;P[t.debugId]=!0;var r=c(t),i=/[?&](?:callback|cb)=([^&#]+)/,o=/(.*)\.([^.]+)/,a=/^(\w+)(\.|$)(.*)$/;function s(e,t){if(!e)return t;const r=e.match(a),n=r[1];return s(r[3],t[n])}return r.inPlace(Node.prototype,R,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var n=(a=e.src,c=a.match(i),c?c[1]:null);var a,c;if(!n)return;var u=function(e){var t=e.match(o);if(t&&t.length>=3)return{key:t[2],parent:s(t[1],window)};return{key:e,parent:window}}(n);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,S.m$)(!1)),e.removeEventListener("error",f,(0,S.m$)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,S.m$)(!1)),e.removeEventListener("error",f,(0,S.m$)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,S.m$)(!1)),e.addEventListener("error",f,(0,S.m$)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const k={};function H(e){const t=function(e){return(e||n.ee).get("mutation")}(e);if(!f.il||k[t.debugId])return t;k[t.debugId]=!0;var r=c(t),i=f._A.MutationObserver;return i&&(window.MutationObserver=function(e){return this instanceof i?new i(r(e,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype),t}const z={};function L(e){const t=function(e){return(e||n.ee).get("promise")}(e);if(z[t.debugId])return t;z[t.debugId]=!0;var r=t.context,i=c(t),a=f._A.Promise;return a&&function(){function e(r){var n=t.context(),o=i(r,"executor-",n,null,!1);const s=Reflect.construct(a,[o],e);return t.context(s).getCtx=function(){return n},s}f._A.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return a.toString()},Object.setPrototypeOf(e,a),["all","race"].forEach((function(r){const n=a[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=a[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=a.prototype;const n=a.prototype.then;a.prototype.then=function(){var e=this,o=r(e);o.promise=e;for(var a=arguments.length,s=new Array(a),c=0;c<a;c++)s[c]=arguments[c];s[0]=i(s[0],"cb-",o,null,!1),s[1]=i(s[1],"cb-",o,null,!1);const u=n.apply(this,s);return o.nextPromise=u,t.emit("propagate",[e,!0],u,!1,!1),u},a.prototype.then[o]=n,t.on("executor-start",(function(e){e[0]=i(e[0],"resolve-",this,null,!1),e[1]=i(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const M={},B="setTimeout",F="setInterval",U="clearTimeout",q="-start",Z="-",V=[B,"setImmediate",F,U,"clearImmediate"];function G(e){const t=function(e){return(e||n.ee).get("timer")}(e);if(M[t.debugId]++)return t;M[t.debugId]=1;var r=c(t);return r.inPlace(f._A,V.slice(0,2),B+Z),r.inPlace(f._A,V.slice(2,3),F+Z),r.inPlace(f._A,V.slice(3),U+Z),t.on(F+q,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(B+q,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}var W=r(50);const X={},Q=["open","send"];function K(e){var t=e||n.ee;const r=function(e){return(e||n.ee).get("xhr")}(t);if(X[r.debugId]++)return r;X[r.debugId]=1,b(t);var i=c(r),o=f._A.XMLHttpRequest,a=f._A.MutationObserver,s=f._A.Promise,u=f._A.setInterval,d="readystatechange",l=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],h=[],p=f._A.XMLHttpRequest=function(e){const t=new o(e),n=r.context(t);try{r.emit("new-xhr",[t],n),t.addEventListener(d,(a=n,function(){var e=this;e.readyState>3&&!a.resolved&&(a.resolved=!0,r.emit("xhr-resolved",[],e)),i.inPlace(e,l,"fn-",A)}),(0,S.m$)(!1))}catch(e){(0,W.Z)("An error occurred while intercepting XHR",e);try{r.emit("internal-error",[e])}catch(e){}}var a;return t};function g(e,t){i.inPlace(t,["onreadystatechange"],"fn-",A)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,p),p.prototype=o.prototype,i.inPlace(p.prototype,Q,"-xhr-",A),r.on("send-xhr-start",(function(e,t){g(e,t),function(e){h.push(e),a&&(m?m.then(w):u?u(w):(v=-v,y.data=v))}(t)})),r.on("open-xhr-start",g),a){var m=s&&s.resolve();if(!u&&!s){var v=1,y=document.createTextNode(v);new a(w).observe(y,{characterData:!0})}}else t.on("fn-end",(function(e){e[0]&&e[0].type===d||w()}));function w(){for(var e=0;e<h.length;e++)g(0,h[e]);h.length&&(h=[])}function A(e,t){return t}return r}},7825:(e,t,r)=>{r.d(t,{t:()=>n});const n=r(3325).D.ajax},6660:(e,t,r)=>{r.d(t,{t:()=>n});const n=r(3325).D.jserrors},3081:(e,t,r)=>{r.d(t,{gF:()=>o,mY:()=>i,t9:()=>n,vz:()=>s,xS:()=>a});const n=r(3325).D.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},4649:(e,t,r)=>{r.d(t,{t:()=>n});const n=r(3325).D.pageAction},7633:(e,t,r)=>{r.d(t,{Dz:()=>i,OJ:()=>a,qw:()=>o,t9:()=>n});const n=r(3325).D.pageViewEvent,i="firstbyte",o="domcontent",a="windowload"},9251:(e,t,r)=>{r.d(t,{t:()=>n});const n=r(3325).D.pageViewTiming},3614:(e,t,r)=>{r.d(t,{BST_RESOURCE:()=>i,END:()=>s,FEATURE_NAME:()=>n,FN_END:()=>u,FN_START:()=>c,PUSH_STATE:()=>d,RESOURCE:()=>o,START:()=>a});const n=r(3325).D.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState"},7836:(e,t,r)=>{r.d(t,{BODY:()=>x,CB_END:()=>E,CB_START:()=>u,END:()=>A,FEATURE_NAME:()=>i,FETCH:()=>_,FETCH_BODY:()=>v,FETCH_DONE:()=>m,FETCH_START:()=>g,FN_END:()=>c,FN_START:()=>s,INTERACTION:()=>f,INTERACTION_API:()=>d,INTERACTION_EVENTS:()=>o,JSONP_END:()=>b,JSONP_NODE:()=>p,JS_TIME:()=>T,MAX_TIMER_BUDGET:()=>a,REMAINING:()=>l,SPA_NODE:()=>h,START:()=>w,originalSetTimeout:()=>y});var n=r(5763);const i=r(3325).D.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",p="jsonpNode",g="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=n.Yu.ST,w="-start",A="-end",x="-body",E="cb"+A,T="jsTime",_="fetch"},5938:(e,t,r)=>{r.d(t,{W:()=>o});var n=r(5763),i=r(8325);class o{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=i.ee.get(e,(0,n.OP)(this.agentIdentifier).isolatedBacklog),this.featureName=r,this.blocked=!1}}},9144:(e,t,r)=>{r.d(t,{j:()=>m});var n=r(3325),i=r(5763),o=r(5546),a=r(8325),s=r(7894),c=r(8e3),u=r(3960),d=r(385),l=r(50),f=r(3081),h=r(8632);function p(){const e=(0,h.gG)();["setErrorHandler","finished","addToTrace","inlineHit","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion"].forEach((t=>{e[t]=function(){for(var r=arguments.length,n=new Array(r),i=0;i<r;i++)n[i]=arguments[i];return function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];let o=[];return Object.values(e.initializedAgents).forEach((e=>{e.exposed&&e.api[t]&&o.push(e.api[t](...n))})),o.length>1?o:o[0]}(t,...n)}}))}var g=r(2587);function m(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},m=arguments.length>2?arguments[2]:void 0,v=arguments.length>3?arguments[3]:void 0,{init:b,info:y,loader_config:w,runtime:A={loaderType:m},exposed:x=!0}=t;const E=(0,h.gG)();y||(b=E.init,y=E.info,w=E.loader_config),(0,i.Dg)(e,b||{}),(0,i.GE)(e,w||{}),y.jsAttributes??={},d.v6&&(y.jsAttributes.isWorker=!0),(0,i.CX)(e,y);const T=(0,i.P_)(e);A.denyList=[...T.ajax?.deny_list||[],...T.ajax?.block_internal?[y.beacon,y.errorBeacon]:[]],(0,i.sU)(e,A),p();const _=function(e,t){t||(0,c.R)(e,"api");const h={};var p=a.ee.get(e),g=p.get("tracer"),m="api-",v=m+"ixn-";function b(t,r,n,o){const a=(0,i.C5)(e);return null===r?delete a.jsAttributes[t]:(0,i.CX)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),A(m,n,!0,o||null===r?"session":void 0)(t,r)}function y(){}["setErrorHandler","finished","addToTrace","inlineHit","addRelease"].forEach((e=>h[e]=A(m,e,!0,"api"))),h.addPageAction=A(m,"addPageAction",!0,n.D.pageAction),h.setCurrentRouteName=A(m,"routeName",!0,n.D.spa),h.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,i.OP)(e).customTransaction=(r||"http://custom.transaction")+t,A(m,"setPageViewName",!0)()},h.setCustomAttribute=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if("string"==typeof e){if(["string","number"].includes(typeof t)||null===t)return b(e,t,"setCustomAttribute",r);(0,l.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string or number type, but a type of <".concat(typeof t,"> was provided."))}else(0,l.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setUserId=function(e){if("string"==typeof e||null===e)return b("enduser.id",e,"setUserId",!0);(0,l.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e,"> was provided."))},h.setApplicationVersion=function(e){if("string"==typeof e||null===e)return b("application.version",e,"setApplicationVersion",!1);(0,l.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e,">."))},h.interaction=function(){return(new y).get()};var w=y.prototype={createTracer:function(e,t){var r={},i=this,a="function"==typeof t;return(0,o.p)(v+"tracer",[(0,s.z)(),e,r],i,n.D.spa,p),function(){if(g.emit((a?"":"no-")+"fn-start",[(0,s.z)(),i,a],r),a)try{return t.apply(this,arguments)}catch(e){throw g.emit("fn-err",[arguments,this,e],r),e}finally{g.emit("fn-end",[(0,s.z)()],r)}}}};function A(e,t,r,i){return function(){return(0,o.p)(f.xS,["API/"+t+"/called"],void 0,n.D.metrics,p),i&&(0,o.p)(e+t,[(0,s.z)(),...arguments],r?null:this,i,p),r?void 0:this}}function x(){r.e(111).then(r.bind(r,7438)).then((t=>{let{setAPI:r}=t;r(e),(0,c.L)(e,"api")})).catch((()=>(0,l.Z)("Downloading runtime APIs failed...")))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{w[e]=A(v,e,void 0,n.D.spa)})),h.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,o.p)(f.xS,["API/noticeError/called"],void 0,n.D.metrics,p),(0,o.p)("err",[e,(0,s.z)(),!1,t],void 0,n.D.jserrors,p)},d.il?(0,u.b)((()=>x()),!0):x(),h}(e,v);return(0,h.Qy)(e,_,"api"),(0,h.Qy)(e,x,"exposed"),(0,h.EZ)("activatedFeatures",g.T),_}},3325:(e,t,r)=>{r.d(t,{D:()=>n,p:()=>i});const n={ajax:"ajax",jserrors:"jserrors",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.ajax]:5,[n.sessionTrace]:6,[n.pageAction]:7,[n.spa]:8,[n.sessionReplay]:9}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>"nr-spa.1097a448-1.238.0.min.js",i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.238.0.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}s||(c=!0,(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r),e[r]=[n];var f=(t,n)=>{s.onerror=s.onload=null,clearTimeout(h);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},h=setTimeout(f.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=f.bind(null,s.onerror),s.onload=f.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={801:0,92:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.238.0.PROD"]=self["webpackChunk:NRBA-1.238.0.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{var e=i(50);class t{addPageAction(t,r){(0,e.Z)("Call to agent api addPageAction failed. The session trace feature is not currently initialized.")}setPageViewName(t,r){(0,e.Z)("Call to agent api setPageViewName failed. The page view feature is not currently initialized.")}setCustomAttribute(t,r,n){(0,e.Z)("Call to agent api setCustomAttribute failed. The js errors feature is not currently initialized.")}noticeError(t,r){(0,e.Z)("Call to agent api noticeError failed. The js errors feature is not currently initialized.")}setUserId(t){(0,e.Z)("Call to agent api setUserId failed. The js errors feature is not currently initialized.")}setApplicationVersion(t){(0,e.Z)("Call to agent api setApplicationVersion failed. The agent is not currently initialized.")}setErrorHandler(t){(0,e.Z)("Call to agent api setErrorHandler failed. The js errors feature is not currently initialized.")}finished(t){(0,e.Z)("Call to agent api finished failed. The page action feature is not currently initialized.")}addRelease(t,r){(0,e.Z)("Call to agent api addRelease failed. The agent is not currently initialized.")}}var r=i(3325),n=i(5763);const o=Object.values(r.D);function a(e){const t={};return o.forEach((r=>{t[r]=function(e,t){return!1!==(0,n.Mt)(t,"".concat(e,".enabled"))}(r,e)})),t}var s=i(9144);var c=i(5546),u=i(385),d=i(8e3),l=i(5938),f=i(3960);class h extends l.W{constructor(e,t,r){let n=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];super(e,t,r),this.auto=n,this.abortHandler,this.featAggregate,this.onAggregateImported,n&&(0,d.R)(e,r)}importAggregator(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(this.featAggregate||!this.auto)return;const r=u.il&&!0===(0,n.Mt)(this.agentIdentifier,"privacy.cookies_enabled");let o;this.onAggregateImported=new Promise((e=>{o=e}));const a=async()=>{let n;try{if(r){const{setupAgentSession:e}=await i.e(111).then(i.bind(i,3228));n=e(this.agentIdentifier)}}catch(t){(0,e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.",t)}try{if(!this.shouldImportAgg(this.featureName,n))return(0,d.L)(this.agentIdentifier,this.featureName),void o(!1);const{lazyFeatureLoader:e}=await i.e(111).then(i.bind(i,8582)),{Aggregate:r}=await e(this.featureName,"aggregate");this.featAggregate=new r(this.agentIdentifier,this.aggregator,t),o(!0)}catch(t){(0,e.Z)("Downloading and initializing ".concat(this.featureName," failed..."),t),this.abortHandler?.(),o(!1)}};u.il?(0,f.b)((()=>a()),!0):a()}shouldImportAgg(e,t){return e!==r.D.sessionReplay||!!n.Yu.MO&&(!1!==(0,n.Mt)(this.agentIdentifier,"session_trace.enabled")&&(!!t?.isNew||!!t?.state.sessionReplay))}}var p=i(7633),g=i(7894);class m extends h{static featureName=p.t9;constructor(e,t){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];if(super(e,t,p.t9,i),("undefined"==typeof PerformanceNavigationTiming||u.Tt)&&"undefined"!=typeof PerformanceTiming){const t=(0,n.OP)(e);t[p.Dz]=Math.max(Date.now()-t.offset,0),(0,f.K)((()=>t[p.qw]=Math.max((0,g.z)()-t[p.Dz],0))),(0,f.b)((()=>{const e=(0,g.z)();t[p.OJ]=Math.max(e-t[p.Dz],0),(0,c.p)("timing",["load",e],void 0,r.D.pageViewTiming,this.ee)}))}this.importAggregator()}}var v=i(1117),b=i(1284);class y extends v.w{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,(0,b.D)(e,(function(e,r){t[e]=w(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,(0,b.D)(r,(function(e,t){if("count"!==e){var n=a[e],i=r[e];i&&!i.c?a[e]=w(i.t,n):a[e]=function(e,t){if(!t)return e;t.c||(t=A(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(i,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=w(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=x(this.aggregatedData[r]),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function w(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=A(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function A(e){return{t:e,min:e,max:e,sos:e*e,c:1}}function x(e){return"object"!=typeof e?[]:(0,b.D)(e,E)}function E(e,t){return t}var T=i(8632),_=i(4402),D=i(4351);var j=i(7956),C=i(3239),N=i(9251);class O extends h{static featureName=N.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,N.t,r),u.il&&((0,n.OP)(e).initHidden=Boolean("hidden"===document.visibilityState),(0,j.N)((()=>(0,c.p)("docHidden",[(0,g.z)()],void 0,N.t,this.ee)),!0),(0,C.bP)("pagehide",(()=>(0,c.p)("winPagehide",[(0,g.z)()],void 0,N.t,this.ee))),this.importAggregator())}}var S=i(3081);class P extends h{static featureName=S.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,S.t9,r),this.importAggregator()}}var R=i(6660);class I{constructor(e,t,r,n){this.name="UncaughtError",this.message=e,this.sourceURL=t,this.line=r,this.column=n}}class k extends h{static featureName=R.t;#e=new Set;constructor(e,t){let n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,R.t,n);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("fn-err",((e,t,n)=>{this.abortHandler&&!this.#e.has(n)&&(this.#e.add(n),(0,c.p)("err",[this.#t(n),(0,g.z)()],void 0,r.D.jserrors,this.ee))})),this.ee.on("internal-error",(e=>{this.abortHandler&&(0,c.p)("ierr",[this.#t(e),(0,g.z)(),!0],void 0,r.D.jserrors,this.ee)})),u._A.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,c.p)("err",[this.#r(e),(0,g.z)(),!1,{unhandledPromiseRejection:1}],void 0,r.D.jserrors,this.ee)}),(0,C.m$)(!1,this.removeOnAbort?.signal)),u._A.addEventListener("error",(e=>{this.abortHandler&&(this.#e.has(e.error)?this.#e.delete(e.error):(0,c.p)("err",[this.#n(e),(0,g.z)()],void 0,r.D.jserrors,this.ee))}),(0,C.m$)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#i,this.importAggregator()}#i(){this.removeOnAbort?.abort(),this.#e.clear(),this.abortHandler=void 0}#t(e){return e instanceof Error?e:void 0!==e?.message?new I(e.message,e.filename||e.sourceURL,e.lineno||e.line,e.colno||e.col):new I("string"==typeof e?e:(0,D.P)(e))}#r(e){let t="Unhandled Promise Rejection: ";if(e?.reason instanceof Error)try{return e.reason.message=t+e.reason.message,e.reason}catch(t){return e.reason}if(void 0===e.reason)return new I(t);const r=this.#t(e.reason);return r.message=t+r.message,r}#n(e){return e.error instanceof Error?e.error:new I(e.message,e.filename,e.lineno,e.colno)}}var H=i(2210);let z=1;const L="nr@id";function M(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===u._A?0:(0,H.X)(e,L,(function(){return z++}))}function B(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,D.P)(e).length}catch(e){return}}}var F=i(1214),U=i(7243);class q{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,n.DL)(this.agentIdentifier);if(!t)return null;var r=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!r||!i)return null;var a=(0,_.M)(),s=(0,_.Ht)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,r,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,r,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof u._A?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,D.P)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,n.Mt)(this.agentIdentifier,"distributed_tracing")&&(r=(0,n.P_)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var i=0;i<r.allowed_origins.length;i++){var o=(0,U.e)(r.allowed_origins[i]);if(e.hostname===o.hostname&&e.protocol===o.protocol&&e.port===o.port){t=!0;break}}return t}isDtEnabled(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,n.Mt)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var Z=i(7825),V=["load","error","abort","timeout"],G=V.length,W=n.Yu.REQ,X=n.Yu.XHR;class Q extends h{static featureName=Z.t;constructor(e,t){let i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,Z.t,i),(0,n.OP)(e).xhrWrappable&&(this.dt=new q(e),this.handler=(e,t,r,n)=>(0,c.p)(e,t,r,n,this.ee),(0,F.u5)(this.ee),(0,F.Kf)(this.ee),function(e,t,i,o){function a(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=E,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){_(t,e)}),(0,C.m$)(!1)),u.IF||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,C.m$)(!1))}function s(e){this.params={method:e[0]},T(this,e[1]),this.metrics={}}function c(t,r){var i=(0,n.DL)(e);i.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",i.xpid);var a=o.generateTracePayload(this.parsedOrigin);if(a){var s=!1;a.newrelicHeader&&(r.setRequestHeader("newrelic",a.newrelicHeader),s=!0),a.traceContextParentHeader&&(r.setRequestHeader("traceparent",a.traceContextParentHeader),a.traceContextStateHeader&&r.setRequestHeader("tracestate",a.traceContextStateHeader),s=!0),s&&(this.dt=a)}}function d(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=B(i);a&&(n.txSize=a)}this.startTime=(0,g.z)(),this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<G;s++)r.addEventListener(V[s],this.listener,(0,C.m$)(!1))}function l(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function f(e,t){var r=""+M(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function h(e,t){var r=""+M(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function p(){this.endTime=(0,g.z)()}function m(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function v(e,r){r instanceof X&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function b(e,t,r){t instanceof X&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,g.z)()))}function y(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,g.z)()-this.xhrCbStart,this.onload,r],r)}function w(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&u.il&&(t=""+u._A.location.href):e[0]&&e[0].url?t=e[0].url:u._A?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,U.e)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var n=o.generateTracePayload(this.parsedOrigin);if(n&&(n.newrelicHeader||n.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,n)&&(this.dt=n);else{var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),s(i.headers,n)&&(this.dt=n),e.length>1?e[1]=i:e.push(i)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function A(e,t){this.params={},this.metrics={},this.startTime=(0,g.z)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof W?r=i.url:u._A?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),T(this,r);var o=(""+(i&&i instanceof W&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.txSize=B(n.body)||0}function x(e,t){var n;this.endTime=(0,g.z)(),this.params||(this.params={}),this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var o={txSize:this.txSize,rxSize:n,duration:(0,g.z)()-this.startTime};i("xhr",[this.params,o,this.startTime,this.endTime,"fetch"],this,r.D.ajax)}function E(e){var t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var o=0;o<G;o++)e.removeEventListener(V[o],this.listener,!1);t.aborted||(n.duration=(0,g.z)()-this.startTime,this.loadCaptureCalled||4!==e.readyState?null==t.status&&(t.status=0):_(this,e),n.cbTime=this.cbTime,i("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,r.D.ajax))}}function T(e,t){var r=(0,U.e)(t),n=e.params;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}function _(e,t){e.params.status=t.status;var r=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?B(e.response):"text"===r||""===r||void 0===r?B(e.responseText):void 0}(t,e.lastSize);if(r&&(e.metrics.rxSize=r),e.sameOrigin){var n=t.getResponseHeader("X-NewRelic-App-Data");n&&(e.params.cat=n.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",a),t.on("open-xhr-start",s),t.on("open-xhr-end",c),t.on("send-xhr-start",d),t.on("xhr-cb-time",l),t.on("xhr-load-added",f),t.on("xhr-load-removed",h),t.on("xhr-resolved",p),t.on("addEventListener-end",m),t.on("removeEventListener-end",v),t.on("fn-end",y),t.on("fetch-before-start",w),t.on("fetch-start",A),t.on("fn-start",b),t.on("fetch-done",x)}(e,this.ee,this.handler,this.dt),this.importAggregator())}}var K=i(3614);const{BST_RESOURCE:Y,RESOURCE:J,START:ee,END:te,FEATURE_NAME:re,FN_END:ne,FN_START:ie,PUSH_STATE:oe}=K;var ae=i(7836);const{FEATURE_NAME:se,START:ce,END:ue,BODY:de,CB_END:le,JS_TIME:fe,FETCH:he,FN_START:pe,CB_START:ge,FN_END:me}=ae;var ve=i(4649);class be extends h{static featureName=ve.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,ve.t,r),this.importAggregator()}}new class extends t{constructor(t){let r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:(0,_.ky)(16);super(),u._A?(this.agentIdentifier=r,this.sharedAggregator=new y({agentIdentifier:this.agentIdentifier}),this.features={},this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(m),Object.assign(this,(0,s.j)(this.agentIdentifier,t,t.loaderType||"agent")),this.start()):(0,e.Z)("Failed to initial the agent. Could not determine the runtime environment.")}get config(){return{info:(0,n.C5)(this.agentIdentifier),init:(0,n.P_)(this.agentIdentifier),loader_config:(0,n.DL)(this.agentIdentifier),runtime:(0,n.OP)(this.agentIdentifier)}}start(){const t="features";try{const n=a(this.agentIdentifier),i=[...this.desiredFeatures];i.sort(((e,t)=>r.p[e.featureName]-r.p[t.featureName])),i.forEach((t=>{if(n[t.featureName]||t.featureName===r.D.pageViewEvent){const i=function(e){switch(e){case r.D.ajax:return[r.D.jserrors];case r.D.sessionTrace:return[r.D.ajax,r.D.pageViewEvent];case r.D.sessionReplay:return[r.D.sessionTrace];case r.D.pageViewTiming:return[r.D.pageViewEvent];default:return[]}}(t.featureName);i.every((e=>n[e]))||(0,e.Z)("".concat(t.featureName," is enabled but one or more dependent features has been disabled (").concat((0,D.P)(i),"). This may cause unintended consequences or missing data...")),this.features[t.featureName]=new t(this.agentIdentifier,this.sharedAggregator)}})),(0,T.Qy)(this.agentIdentifier,this.features,t)}catch(r){(0,e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -",r);for(const e in this.features)this.features[e].abortHandler?.();const n=(0,T.fP)();return delete n.initializedAgents[this.agentIdentifier]?.api,delete n.initializedAgents[this.agentIdentifier]?.[t],delete this.sharedAggregator,n.ee?.abort(),delete n.ee?.get(this.agentIdentifier),!1}}addToTrace(t){(0,e.Z)("Call to agent api addToTrace failed. The page action feature is not currently initialized.")}setCurrentRouteName(t){(0,e.Z)("Call to agent api setCurrentRouteName failed. The spa feature is not currently initialized.")}interaction(){(0,e.Z)("Call to agent api interaction failed. The spa feature is not currently initialized.")}}({features:[Q,m,O,class extends h{static featureName=re;constructor(e,t){if(super(e,t,re,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!u.il)return;const n=this.ee;let i;(0,F.QU)(n),this.eventsEE=(0,F.em)(n),this.eventsEE.on(ie,(function(e,t){this.bstStart=(0,g.z)()})),this.eventsEE.on(ne,(function(e,t){(0,c.p)("bst",[e[0],t,this.bstStart,(0,g.z)()],void 0,r.D.sessionTrace,n)})),n.on(oe+ee,(function(e){this.time=(0,g.z)(),this.startPath=location.pathname+location.hash})),n.on(oe+te,(function(e){(0,c.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,r.D.sessionTrace,n)}));try{i=new PerformanceObserver((e=>{const t=e.getEntries();(0,c.p)(Y,[t],void 0,r.D.sessionTrace,n)})),i.observe({type:J,buffered:!0})}catch(e){}this.importAggregator({resourceObserver:i})}},P,be,k,class extends h{static featureName=se;constructor(e,t){if(super(e,t,se,!(arguments.length>2&&void 0!==arguments[2])||arguments[2]),!u.il)return;if(!(0,n.OP)(e).xhrWrappable)return;try{this.removeOnAbort=new AbortController}catch(e){}let r,i=0;const o=this.ee.get("tracer"),a=(0,F._L)(this.ee),s=(0,F.Lg)(this.ee),c=(0,F.BV)(this.ee),d=(0,F.Kf)(this.ee),l=this.ee.get("events"),f=(0,F.u5)(this.ee),h=(0,F.QU)(this.ee),p=(0,F.Gm)(this.ee);function m(e,t){h.emit("newURL",[""+window.location,t])}function v(){i++,r=window.location.hash,this[pe]=(0,g.z)()}function b(){i--,window.location.hash!==r&&m(0,!0);var e=(0,g.z)();this[fe]=~~this[fe]+e-this[pe],this[me]=e}function y(e,t){e.on(t,(function(){this[t]=(0,g.z)()}))}this.ee.on(pe,v),s.on(ge,v),a.on(ge,v),this.ee.on(me,b),s.on(le,b),a.on(le,b),this.ee.buffer([pe,me,"xhr-resolved"],this.featureName),l.buffer([pe],this.featureName),c.buffer(["setTimeout"+ue,"clearTimeout"+ce,pe],this.featureName),d.buffer([pe,"new-xhr","send-xhr"+ce],this.featureName),f.buffer([he+ce,he+"-done",he+de+ce,he+de+ue],this.featureName),h.buffer(["newURL"],this.featureName),p.buffer([pe],this.featureName),s.buffer(["propagate",ge,le,"executor-err","resolve"+ce],this.featureName),o.buffer([pe,"no-"+pe],this.featureName),a.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),y(f,he+ce),y(f,he+"-done"),y(a,"new-jsonp"),y(a,"jsonp-end"),y(a,"cb-start"),h.on("pushState-end",m),h.on("replaceState-end",m),window.addEventListener("hashchange",m,(0,C.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",m,(0,C.m$)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){m(0,i>1)}),(0,C.m$)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#i,this.importAggregator()}#i(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}],loaderType:"spa"})})()})();
</script>

            <link rel="canonical" href="https://egy.voxcinemas.com/" />


            <link rel="icon" sizes="96x96"  type="image/png" href="/assets/favicon-96x96.png" />
            <link rel="icon" sizes="32x32"  type="image/png" href="/assets/favicon-32x32.png" />
            <link rel="icon" sizes="16x16"  type="image/png" href="/assets/favicon-16x16.png" />
            <link rel="mask-icon"  color="#0075bc"  href="/assets/safari-pinned-tab.svg" />
            <link rel="shortcut icon"   type="image/x-icon" href="/assets/favicon.ico" />

            <link rel="preload" as="font" crossorigin="anonymous" type="font/woff" href="/assets/fonts/Effra_W_Rg.woff" />
            <link rel="preload" as="font" crossorigin="anonymous" type="font/woff" href="/assets/fonts/Effra_W_Bd.woff" />

            <link rel="stylesheet" href="/assets/css/core-9d28e749788deba799f1167074fab68f.css" />

        
            
        <meta name="description" content="The biggest blockbusters in Cairo, Egypt are just one click away. Discover the perfect movie for you, find session times and book tickets at VOX Cinemas." />


                <meta name="apple-itunes-app" content="app-id=669495038, affiliate-data=ct=smart-app&pt=552913" />

            <link rel="manifest" href="/manifest.json" />

    
    
<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"true","rua.cpush":"true","rua.upre":"true","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"SJ-7f5bf5ba-88dd-4f49-98fd-b1bfd2009389","rua.cook":"false","rua.ims":"false","rua.ufprl":"true","rua.cfprl":"true","rua.isuxp":"false","rua.texp":"norulematch"}]);</script>
                              <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="78QL2-CA88Q-CQWTP-ENF59-A3PRQ",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"78QL2-CA88Q-CQWTP-ENF59-A3PRQ",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e="true"=="true"?1:0,t="",n="yseb66ycc3vcqzryxena-f-c0a4b7a7a-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"37","ak.cp":"1062920","ak.ai":parseInt("633568",10),"ak.ol":"0","ak.cr":87,"ak.ipv":4,"ak.proto":"h2","ak.rid":"206d7528","ak.r":47776,"ak.a2":e,"ak.m":"dsca","ak.n":"essl","ak.bpcip":"196.136.31.0","ak.cport":21608,"ak.gh":"2.22.234.36","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1714993434","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==c4ZIasmiVEqRXaVg9XxvtacEm6bBGCfGWI5JkMzQixl+hniOBN1GCpvzUWzmJGpw1R4Wu3VMhyerDdi067wiinfAqI2Ia7Ka6AOLqJTo7f/hrBfNygXodehoIC0Qdi0Tycgb8Dl0Gc3HEHLC3L1NjbPxyZgSuPFahwnx70Dbl5RkImdx0OFimrSCGoAX0jt1cd7A9eY9cqwrcsGLABdUw80wVhSzLR+czV2GdHmo6JGscO2abXO9iTKVWRH9RlZoC8MxOPg6vN+9XExqmiuMZ1mW7iKmctwanYUC0EzXvgDXUyqagnwN9JdVtu/HJdDGUZ/SMg9mm88uO4A1qjEpiqfLzKw1tNtXgxlEer29k89Gxfk/ufpCRcuq0HNSMDvR2MDthklEHIDhgOAVIIewP5U+q3lAhkK/94x3zF6W3Ik=","ak.pv":"63","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script><script >bazadebezolkohpepadr="710603790"</script><script type="text/javascript" src="https://egy.voxcinemas.com/akam/13/2a5af456"  defer></script></head>
    <body class="region-eg authenticated home" data-region="eg" data-segment-title="Movies, Cinema Listings & Latest Films">
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PMMF4" height="0" width="0" style="display:none;visibility:hidden" data-ot-ignore></iframe></noscript>


        <div class="container">

                <section  class="site-search-banner" data-banner="site-search" style="display: none;">
    <article>
            <form  class="search" action="/search" method="get" autocomplete="off" >

                        <label  class="" >
        <span>Keyword(s)</span>
        <input type="text" inputmode="text" name="q"  value=""  required          />

        
    </label>


                    <button type="submit"  class="action secondary"  >Search</button>

                <a class="action primary outline" data-dismiss="true">Close</a>
            </form>
    </article>
</section>

            <header role="banner">
                <section>
                    <a class="brand vox" href="/" title="VOX Cinemas">VOX Cinemas</a>

                        <nav  class="light tertiary authenticated" role="navigation">
                            <ul>
                                        <li  class="site-search" data-target="site-search">
                                            <a href="/search" title="Search">
                                                <span class="iconography white no-text hide-tablet hide-phone" data-glyph="search"></span>
                                                <span class="iconography blue no-text hide-desktop" data-glyph="search"></span>
                                            </a>
                                        </li>
                                    <li class="site-account has-children">
                                        <a class="" href="/account/dashboard/fetch" ><span class="iconography blue no-text hide-desktop" data-glyph="logged-in"></span> <span class="hide-tablet hide-phone">My Account</span> <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href="/account/details" >Manage Details</a></li>
                                                    <li class=""><a class="" href="/account/stored/manage" >Manage Payment</a></li>
                                                    <li class=""><a class="" href="/account/history/fetch" >Purchases</a></li>
                                                    <li class=""><a class="" href="/account/logout" >Logout</a></li>
                                            </ul>
                                    </li>
                                <li class="locale hide-phone hide-tablet">
                                        <span class="flag en">
                                            <a class="region" href="https://egy.voxcinemas.com/regions" title="Change my region">
                                                <img src="/assets/images/region/eg-128x128.png" alt="Egypt" data-ot-ignore/>
                                                <span>Egypt</span>
                                            </a>
                                        </span>

                                        <a  class="language ar" href="https://egy.voxcinemas.com/regions/select/ar/eg?success_url&#x3D;%2Far%2F" title="Change my language">عربي</a>
                                </li>
                            </ul>
                        </nav>

                        <a class="flyout hide-desktop" data-target="navigation"><span class="iconography blue no-text" data-glyph="menu"></span></a>
                </section>

                <section>
                        <nav  class="primary" role="navigation" data-flyout="navigation">
                            <ul>
                                    <li class="has-children">
                                        <a class="" href="/"  data-google-category="home">HOME <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href=""  data-google-category=""></a></li>
                                            </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="" href="/movies/whatson"  data-google-category="movies">MOVIES <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href="/movies/whatson"  data-google-category="movies_whatson">WHAT'S ON</a></li>
                                                    <li class=""><a class="" href="/movies/comingsoon"  data-google-category="movies_comingsoon">COMING SOON</a></li>
                                            </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="" href=""  data-google-category="foodanddrinks">FOOD & DRINKS <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href="/food-and-drinks"  data-google-category="foodanddrinks_preorderonline">PRE-ORDER ONLINE</a></li>
                                                    <li class=""><a class="" href="/vox-exclusives"  data-google-category="foodanddrinks_voxexclusives">VOX EXCLUSIVES</a></li>
                                            </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="" href="/ways-to-watch/summary"  data-google-category="waystowatch">WAYS TO WATCH <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href="/ways-to-watch/sensory-friendly-screenings"  data-google-category="waystowatch_sensoryfriendly">SENSORY FRIENDLY</a></li>
                                                    <li class=""><a class="" href="/ways-to-watch/imax"  data-google-category="waystowatch_imax">IMAX</a></li>
                                                    <li class=""><a class="" href="/ways-to-watch/max"  data-google-category="waystowatch_max">MAX</a></li>
                                                    <li class=""><a class="" href="/ways-to-watch/gold"  data-google-category="waystowatch_gold">GOLD</a></li>
                                                    <li class=""><a class="" href="/ways-to-watch/4dx"  data-google-category="waystowatch_4dx">4DX</a></li>
                                                    <li class=""><a class="" href="/ways-to-watch/kids"  data-google-category="waystowatch_kids">KIDS</a></li>
                                            </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="" href=""  data-google-category="offers">OFFERS <span aria-hidden="true" class="iconic" data-glyph="caret-bottom"></span></a>
                                            <ul>
                                                    <li class=""><a class="" href="/ladies-morning-offer"  data-google-category="offers_ladiesmorningoffer">Ladies Morning Offer</a></li>
                                            </ul>
                                    </li>
                                <li class="locale hide-desktop">
                                        <span class="flag en">
                                            <a class="region" href="https://egy.voxcinemas.com/regions" title="Change my region" >
                                                <img src="/assets/images/region/eg-128x128.png" alt="Egypt" data-ot-ignore />
                                                <span>Egypt</span>
                                            </a>
                                        </span>

                                        <a  class="language ar" href="https://egy.voxcinemas.com/regions/select/ar/eg?success_url&#x3D;%2Far%2F" title="Change my language">عربي</a>
                                </li>
                            </ul>
                        </nav>
                </section>
            </header>

            <main role="main">
                    <section class="book-tickets hide-embed">
                        <nav>
                            <form  class="quick-filter" action="/showtimes" method="get" autocomplete="off" >

                <div  class="pseudo-multi-select cinemas" >
            <span class="label" data-none="Select Your Cinema(s)"  data-selected="{0} Cinema(s) Selected">Select Your Cinema(s)</span>
            <div class="dropdown">
                <div class="scroll has-toolbar">
                    

                    <ol class="values">
                            <li>
                                <label>
                                    <input type="checkbox" name="c" value="city-centre-alexandria"  />
                                    <span>City Centre Alexandria</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="c" value="city-centre-almaza"  />
                                    <span>City Centre Almaza</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="c" value="mall-of-egypt"  />
                                    <span>Mall of Egypt</span>
                                </label>
                            </li>
                    </ol>
                </div>

                    <div class="toolbar">
                        <a class="action primary outline clear">Clear All</a>
                        <a class="action primary done">Done</a>
                    </div>
            </div>
        </div>


                <div  class="pseudo-multi-select movies" >
            <span class="label" data-none="Select Your Movie(s)" data-all="Any Movie" data-selected="{0} Movie(s) Selected">Select Your Movie(s)</span>
            <div class="dropdown">
                <div class="scroll has-toolbar">
                    <div class="pre-selection"><a class="action primary outline all">Any Movie</a></div>

                    <ol class="values">
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="3almashi-arabic"  />
                                    <span>(Arabic) 3almashi</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="al-serb-arabic"  />
                                    <span>(Arabic) Al Serb</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="black-dragon"  />
                                    <span>Black Dragon</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="civil-war"  />
                                    <span>Civil War</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="ghostbusters-frozen-empire"  />
                                    <span>Ghostbusters: Frozen Empire</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="godzilla-x-kong-the-new-empire"  />
                                    <span>Godzilla X Kong: The New Empire</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="kung-fu-panda-4"  />
                                    <span>Kung Fu Panda 4</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="lahazat-lazeeza-arabic"  />
                                    <span>(Arabic) Lahazat Lazeeza</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="sheqo-arabic"  />
                                    <span>(Arabic) Sheqo</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="the-fall-guy"  />
                                    <span>The Fall Guy</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="the-first-omen"  />
                                    <span>The First Omen</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="the-ministry-of-ungentlemanly-warfare"  />
                                    <span>The Ministry of Ungentlemanly Warfare</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="the-monkey-man"  />
                                    <span>The Monkey Man</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="m" value="winnie-the-pooh-blood-and-honey-2"  />
                                    <span>Winnie The Pooh: Blood &amp; Honey 2</span>
                                </label>
                            </li>
                    </ol>
                </div>

                    <div class="toolbar">
                        <a class="action primary outline clear">Clear All</a>
                        <a class="action primary done">Done</a>
                    </div>
            </div>
        </div>


        <button type="submit"  class="action secondary"  >Find Times and Book</button>
</form>
                        </nav>
                    </section>

                

            <section  class="carousel" data-deferred="/home">
    <div class="layout">
        <div class="viewport">
            <ol class="slides">
                    <li>
                            <a href="https://egy.voxcinemas.com/movies/al-serb-arabic#showtimes" >
                                <img src="https://assets.voxcinemas.com/content/Al-Serb-_1714641435.jpg" alt="" data-ot-ignore />
                            </a>
                    </li>
                    <li>
                            <a href="https://egy.voxcinemas.com/movies/sheqo-arabic#showtimes" >
                                <img src="https://assets.voxcinemas.com/content/Sheqo_1713172185.jpg" alt="" data-ot-ignore />
                            </a>
                    </li>
                    <li>
                            <a href="https://egy.voxcinemas.com/movies/lahazat-lazeeza-arabic#showtimes" >
                                <img src="https://assets.voxcinemas.com/content/Lahazat-Lazeeza_1712579071.jpg" alt="" data-ot-ignore />
                            </a>
                    </li>
                    <li>
                            <a href="https://egy.voxcinemas.com/movies/the-fall-guy#showtimes" >
                                <img src="https://assets.voxcinemas.com/content/FGY_VOX_HB_EN_1714641478.jpg" alt="" data-ot-ignore />
                            </a>
                    </li>
                    <li>
                            <a href="https://egy.voxcinemas.com/movies/ghostbusters-frozen-empire#showtimes" >
                                <img src="https://assets.voxcinemas.com/content/Ghostbuster--Frozen-empire_1714641513.jpg" alt="" data-ot-ignore />
                            </a>
                    </li>
            </ol>
        </div>
    </div>
</section>
<noscript>
    <style>
        .carousel[data-deferred] .viewport .slides > li {
            display: block;
        }
    </style>
</noscript>

            <section >
                <h2 class="highlight">What&#39;s On</h2>

                <div class="poster-wall" data-attribute="pw">

                        <article  class="movie-summary" data-slug="al-serb-arabic"data-identifier="al-serb-arabic"data-title="Al Serb">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00011079.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Al Serb" data-ot-ignore />

                            <div class="overlay">
                                <h3>Al Serb</h3>
                                <p><span class="classification c-g fixed white" >G</span></p>

                                <p class="synopsis">&quot;El Serb&quot; is a captivating thriller inspired by real events movie, tracing the journey of a team of Egyptian heroes as they battle terrorist organizations. Following a devastating tragedy, they undertake a mission within enemy territory, encountering resistance. With high-powered combat sequences and impressive production, the film showcases their bravery and determination to protect their homeland and uphold justice. </p>
                                <a  class="action primary outline " href="/movies/al-serb-arabic">More Info</a>
                                <a  class="action secondary " href="/movies/al-serb-arabic#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="sheqo-arabic"data-identifier="sheqo-arabic"data-title="Sheqo">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00011021.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Sheqo" data-ot-ignore />

                            <div class="overlay">
                                <h3>Sheqo</h3>
                                <p><span class="classification c-12p fixed white" >12+</span></p>

                                <p class="synopsis">The events of the film revolve around an action comedy about Ismail (Amr Youssef) and Hegazy (Mohamed Mamdouh), who carry out thefts on behalf of Dr. Yousra, but things turn upside down when Ismail falls in love with one of his victims, Fatima (Dina El-Sherbiny), and Hegazy falls in love with one of his victims, Fatima (Dina El-Sherbiny). In love with a charming performance artist, Amina Khalil.</p>
                                <a  class="action primary outline " href="/movies/sheqo-arabic">More Info</a>
                                <a  class="action secondary " href="/movies/sheqo-arabic#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="lahazat-lazeeza-arabic"data-identifier="lahazat-lazeeza-arabic"data-title="Lahazat Lazeeza">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010968.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Lahazat Lazeeza" data-ot-ignore />

                            <div class="overlay">
                                <h3>Lahazat Lazeeza</h3>
                                <p><span class="classification c-g fixed white" >G</span></p>

                                <p class="synopsis">Saleh &quot;Hesham Maged&quot; and Doria &quot;Hannah Al Zahed&quot; are a couple who live an unhappy life. They have a mischievous son who always causes them problems, and the parents always blame each other for these problems and shirk responsibility. One day, after a big quarrel between them, Doria leaves the house and Saleh is left alone. Saleh discovers a strange illuminated portal in the garage room of his house. Saleh crosses the portal to find a parallel world in which there is a better version of his home, his family, and his life. The events take place within a comedic framework with the participation of Bayoumi Fouad and Mohamed Tharwat.</p>
                                <a  class="action primary outline " href="/movies/lahazat-lazeeza-arabic">More Info</a>
                                <a  class="action secondary " href="/movies/lahazat-lazeeza-arabic#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="the-fall-guy"data-identifier="the-fall-guy"data-title="The Fall Guy">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010925.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="The Fall Guy" data-ot-ignore />

                            <div class="overlay">
                                <h3>The Fall Guy</h3>
                                <p><span class="classification c-12p fixed white" >12+</span></p>

                                <p class="synopsis">Colt Seavers, a battered and past-his-prime action choreographer, finds himself working on a film set with Tom Ryder, a famous actor for whom he had doubled long ago. When Tom goes missing and the film, which is being directed by Jody Moreno, Colt&#39;s ex-girlfriend in her directing debut, is in danger of being shut down, Colt volunteers to find Tom and save Jody&#39;s debut film.</p>
                                <a  class="action primary outline " href="/movies/the-fall-guy">More Info</a>
                                <a  class="action secondary " href="/movies/the-fall-guy#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="ghostbusters-frozen-empire"data-identifier="ghostbusters-frozen-empire"data-title="Ghostbusters: Frozen Empire">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010985.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Ghostbusters: Frozen Empire" data-ot-ignore />

                            <div class="overlay">
                                <h3>Ghostbusters: Frozen Empire</h3>
                                <p><span class="classification c-12p fixed white" >12+</span></p>

                                <p class="synopsis">When the discovery of an ancient artifact unleashes an evil force, Ghostbusters new and old must join forces to protect their home and save the world from a second ice age.

</p>
                                <a  class="action primary outline " href="/movies/ghostbusters-frozen-empire">More Info</a>
                                <a  class="action secondary " href="/movies/ghostbusters-frozen-empire#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="godzilla-x-kong-the-new-empire"data-identifier="godzilla-x-kong-the-new-empire"data-title="Godzilla X Kong: The New Empire">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010959.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Godzilla X Kong: The New Empire" data-ot-ignore />

                            <div class="overlay">
                                <h3>Godzilla X Kong: The New Empire</h3>
                                <p><span class="classification c-8p fixed white" >8+</span></p>

                                <p class="synopsis">The epic battle continues!  Legendary Pictures’ cinematic Monsterverse follows up the explosive showdown of “Godzilla vs. Kong” with an all-new adventure that pits the almighty Kong and the fearsome Godzilla against a colossal undiscovered threat hidden within our world, challenging their very existence—and our own. “Godzilla x Kong: The New Empire” delves further into the histories of these Titans and their origins, as well as the mysteries of Skull Island and beyond, while uncovering the mythic battle that helped forge these extraordinary beings and tied them to humankind forever.</p>
                                <a  class="action primary outline " href="/movies/godzilla-x-kong-the-new-empire">More Info</a>
                                <a  class="action secondary " href="/movies/godzilla-x-kong-the-new-empire#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="civil-war"data-identifier="civil-war"data-title="Civil War">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010919.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Civil War" data-ot-ignore />

                            <div class="overlay">
                                <h3>Civil War</h3>
                                <p><span class="classification c-16p fixed white" >16+</span></p>

                                <p class="synopsis">An adrenaline-fueled thrill ride through a near-future fractured America balanced on the razor&#39;s edge.</p>
                                <a  class="action primary outline " href="/movies/civil-war">More Info</a>
                                <a  class="action secondary " href="/movies/civil-war#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="kung-fu-panda-4"data-identifier="kung-fu-panda-4"data-title="Kung Fu Panda 4">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010904.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Kung Fu Panda 4" data-ot-ignore />

                            <div class="overlay">
                                <h3>Kung Fu Panda 4</h3>
                                <p><span class="classification c-g fixed white" >G</span></p>

                                <p class="synopsis">This spring, for the first time in almost a decade, comedy icon Jack Black returns to his role as Po, the world’s most unlikely kung fu master, with a hilarious, butt-kicking new chapter in DreamWorks Animation’s beloved action-comedy franchise: Kung Fu Panda 4.</p>
                                <a  class="action primary outline " href="/movies/kung-fu-panda-4">More Info</a>
                                <a  class="action secondary " href="/movies/kung-fu-panda-4#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="3almashi-arabic"data-identifier="3almashi-arabic"data-title="3almashi">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00010871.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="3almashi" data-ot-ignore />

                            <div class="overlay">
                                <h3>3almashi</h3>
                                <p><span class="classification c-g fixed white" >G</span></p>

                                <p class="synopsis">In this comedic tale, Hadi Hadi Abd al-Hadi, a quintessentially lazy thirty-year-old who lives with his equally inactive father and grandfather, finds his life upended when diagnosed with a rare condition that necessitates constant movement to avoid deadly blood clots. Forced to abandon his sedentary lifestyle, Hadi embarks on a humorous journey of non-stop walking, running, and creatively staying active, with only one precious hour of rest per day. This drastic change thrusts him into hilarious scenarios as he tries to balance work, a budding love interest, and his health. Through his comedic struggles, Hadi discovers a new zest for life, learning that purpose and fulfillment can emerge from the most unexpected circumstances, transforming his once-lazy existence into one filled with meaning and action.</p>
                                <a  class="action primary outline " href="/movies/3almashi-arabic">More Info</a>
                                <a  class="action secondary " href="/movies/3almashi-arabic#showtimes">Book</a>
                            </div>
                        </article>
                        <article  class="movie-summary" data-slug="winnie-the-pooh-blood-and-honey-2"data-identifier="winnie-the-pooh-blood-and-honey-2"data-title="Winnie The Pooh: Blood &amp; Honey 2">
                                <img class="lazy poster" src="/assets/images/placeholder-poster-480x686.jpg" data-src="https://assets.voxcinemas.com/posters/P_HO00011002.jpg"data-broken="/assets/images/broken-poster-480x686.jpg" alt="Winnie The Pooh: Blood &amp; Honey 2" data-ot-ignore />

                            <div class="overlay">
                                <h3>Winnie The Pooh: Blood &amp; Honey 2</h3>
                                <p><span class="classification c-18p fixed white" >18+</span></p>

                                <p class="synopsis">Deep within the 100-Acre-Wood, a destructive rage grows as Winnie-the-Pooh, Piglet, Owl, and Tigger find their home and their lives endangered after Christopher Robin revealed their existence. Not wanting to live in the shadows any longer, the group decides to take the fight to the town of Ashdown, home of Christopher Robin, leaving a bloody trail of death and mayhem in their wake. Winnie and his savage friends will show everyone that they are deadlier, stronger, and smarter than anyone could ever imagine and get their revenge on Christopher Robin, once and for all.&quot;</p>
                                <a  class="action primary outline " href="/movies/winnie-the-pooh-blood-and-honey-2">More Info</a>
                                <a  class="action secondary " href="/movies/winnie-the-pooh-blood-and-honey-2#showtimes">Book</a>
                            </div>
                        </article>
                </div>

                <p class="align-center">
                    <a  class="action primary " href="/movies/whatson">View All</a>
                </p>

                <hr class="dashed" />

            </section>

            <section>

                <h2 class="highlight">Try a VOX experience</h2>

                    <article  class="experience">
                        <a href="/ways-to-watch/imax">
                            <img class="lazy" src="/assets/images/placeholder-experience-panel-300x150.jpg" alt="IMAX"  data-src="/assets/images/experience/panel-imx-300x150.jpg" data-broken="/assets/images/broken-experience-panel-300x150.jpg" data-ot-ignore />
                        </a>
                    </article>
                    <article  class="experience">
                        <a href="/ways-to-watch/max">
                            <img class="lazy" src="/assets/images/placeholder-experience-panel-300x150.jpg" alt="MAX"  data-src="/assets/images/experience/panel-mx-300x150.jpg" data-broken="/assets/images/broken-experience-panel-300x150.jpg" data-ot-ignore />
                        </a>
                    </article>
                    <article  class="experience">
                        <a href="/ways-to-watch/gold">
                            <img class="lazy" src="/assets/images/placeholder-experience-panel-300x150.jpg" alt="GOLD"  data-src="/assets/images/experience/panel-gd-300x150.jpg" data-broken="/assets/images/broken-experience-panel-300x150.jpg" data-ot-ignore />
                        </a>
                    </article>
                    <article  class="experience">
                        <a href="/ways-to-watch/4dx">
                            <img class="lazy" src="/assets/images/placeholder-experience-panel-300x150.jpg" alt="4DX"  data-src="/assets/images/experience/panel-fx-300x150.jpg" data-broken="/assets/images/broken-experience-panel-300x150.jpg" data-ot-ignore />
                        </a>
                    </article>
                    <article  class="experience">
                        <a href="/ways-to-watch/kids">
                            <img class="lazy" src="/assets/images/placeholder-experience-panel-300x150.jpg" alt="Kids"  data-src="/assets/images/experience/panel-kd-300x150.jpg" data-broken="/assets/images/broken-experience-panel-300x150.jpg" data-ot-ignore />
                        </a>
                    </article>
            </section>


        
    
            </main>

            <footer role="contentinfo">
                <section class="tertiary">
                    <article>
                        <a class="brand vox" href="/">VOX Cinemas</a>

                            <div class="follow-us">
                                <h5>Stay in touch</h5>
                                <ul  class="social-networks follow" >
        <li><a  class="facebook" href="https://www.facebook.com/voxcinemasegypt" title="Follow us on Facebook" >Facebook</a></li>
        <li><a  class="twitter" href="https://www.twitter.com/voxcinemasegypt" title="Follow us on Twitter" >Twitter</a></li>
        <li><a  class="instagram" href="https://www.instagram.com/voxcinemasegypt" title="Follow us on Instagram" >Instagram</a></li>
        <li><a  class="youtube" href="https://www.youtube.com/user/voxcinemas" title="Follow us on YouTube" >YouTube</a></li>
</ul>
                            </div>
                    </article>

                        <nav role="navigation">
                            <h5>About</h5>
                            <ul>
                                    <li class=""><a class="" href="/about"  data-google-category="aboutus">About Us</a></li>
                                    <li class=""><a class="" href="/faq"  data-google-category="faq">FAQ</a></li>
                                    <li class=""><a class="" href="/contact-us"  data-google-category="contactus">Contact Us</a></li>
                                    <li class=""><a class="" href="/careers"  data-google-category="careers">Careers</a></li>
                                    <li class=""><a class="" href="/Anti-Fraud-Disclaimer"  data-google-category="antifrauddisclaimer">Anti-Fraud Disclaimer</a></li>
                                    <li class=""><a class="" href="/vox-cinemas-app"  data-google-category="voxcinemasapp">VOX Cinemas App</a></li>
                                    <li class=""><a class="" href="https://www.majidalfuttaim.com/en/responsible-disclosure-policy"  data-google-category="responsibledisclosurepolicy">Responsible Disclosure Policy</a></li>
                            </ul>
                        </nav>

                        <nav role="navigation">
                            <h5>Help & Support</h5>
                            <ul>
                                    <li class=""><a class="" href="/refunds"  data-google-category="refunds">Refunds</a></li>
                                    <li class=""><a class="" href="/privacy"  data-google-category="privacypolicy">Privacy Policy</a></li>
                                    <li class=""><a class="" href="/terms-and-conditions"  data-google-category="termsandconditions">Terms And Conditions</a></li>
                                    <li class=""><a class="" href="/terms-of-use"  data-google-category="termsofuse">Terms of Use</a></li>
                                    <li class=""><a class="" href="/health-and-safety"  data-google-category="healthandsafety">Health &amp; Safety</a></li>
                                    <li class=""><a class="onetrust-cookie-dialog" href=""  data-google-category="cookiesettings">Cookie Settings</a></li>
                                    <li class=""><a class="" href="/privacy-center"  data-google-category="privacycenter">Privacy Center</a></li>
                            </ul>
                        </nav>

                        <nav role="navigation">
                            <h5>Explore Our Site</h5>
                            <ul>
                                    <li class=""><a class="" href="/movies/whatson"  data-google-category="whatson">What&#39;s On</a></li>
                                    <li class=""><a class="" href="/movies/comingsoon"  data-google-category="comingsoon">Coming Soon</a></li>
                                    <li class=""><a class="" href="/food-and-drinks"  data-google-category="foodmenus">Food Menus</a></li>
                                    <li class=""><a class="" href="/order-food-and-drinks-online"  data-google-category="preorderonline">Pre-Order Online</a></li>
                            </ul>
                        </nav>
                </section>
                <section>
                    <article class="applications">
                        <h5>Download our mobile app</h5>

                        <a class="application-store ios" href="https://itunes.apple.com/app/id669495038?mt&#x3D;8">Download on the AppStore</a>
                        <a class="application-store android" href="https://play.google.com/store/apps/details?id&#x3D;com.voxcinemas.voxcinemasdev">Get it on Google Play</a>
                    </article>
                    <article>
                        <p class="copyright">© 2024 VOX Cinemas. All rights protected.</p>
                    </article>
                </section>
            </footer>
            <footer class="maf" role="contentinfo">
                <section>
                    <article>
                        <a class="brand maf" href="https://www.majidalfuttaim.com/">Majid Al Futtaim</a>
                    </article>
                </section>
            </footer>
        </div>

            
<script src="/assets/javascript/blazy-a0c9cbc93805daa024557d780bea4982.js" data-ot-ignore></script>

            
<script src="/assets/javascript/polyfills-2edc28010d42cef43486c94b209ed42f.js" data-ot-ignore></script>

            <!--[if lte IE 9]>
<script src="/assets/javascript/placeholders-fa9f73dc713436a6f10eb45239b88c93.js" data-ot-ignore></script>
<![endif]-->
            
<script src="/assets/javascript/international-telephone-2b0a86ffd640de5583829bbdb5fbf4c5.js" data-ot-ignore></script>

            
<script src="/assets/javascript/pannellum-c019a15aeea8d7a271e5f51a5c4f2a06.js" data-ot-ignore></script>

            
<script src="/assets/javascript/popper-c83bef750c114db6b5b060461dafe931.js" data-ot-ignore></script>

            
<script src="/assets/javascript/tippy-ab54205981204e42978ff0258241ffdd.js" data-ot-ignore></script>

            
<script src="/assets/javascript/core-eb8849916ed864b7bddb40309a27a69d.js" data-ot-ignore></script>

            
<script src="/assets/javascript/accordion-9a2ebf4d792b05a6214290b4a0ae31b8.js" data-ot-ignore></script>

            
<script src="/assets/javascript/blocker-94c037f7c30cbca60003b930cb33c2a8.js" data-ot-ignore></script>

            
<script src="/assets/javascript/card-scroller-088af40bdc100e328a2e3e1c799ce840.js" data-ot-ignore></script>

            
<script src="/assets/javascript/carousel-3e870a0b62a9864b08abdd7fea60a908.js" data-ot-ignore></script>

            
<script src="/assets/javascript/chatfood-aab821ee4b10f7a99a4ea584fa6a32e5.js" data-ot-ignore></script>

            
<script src="/assets/javascript/flyout-e115799c28ffcea7e667a0e87503d028.js" data-ot-ignore></script>

            
<script src="/assets/javascript/footer-navigation-69dcb9c33baf7df79f528d9fc5eb1318.js" data-ot-ignore></script>

            
<script src="/assets/javascript/forms-24f7bf0657e506c1e01a522e0955ef4e.js" data-ot-ignore></script>

            
<script src="/assets/javascript/navigation-5ff6943106a23a9848cd4e46b437bcfb.js" data-ot-ignore></script>

            
<script src="/assets/javascript/pagination-111ed9befeef47f5afe1e0e1cfe34db3.js" data-ot-ignore></script>

            
<script src="/assets/javascript/progress-c9f7d5e7af2c21d4cb97c5873dc06cc8.js" data-ot-ignore></script>

            
<script src="/assets/javascript/quick-filter-befd00928defb76da33913012e7de2b7.js" data-ot-ignore></script>

            
<script src="/assets/javascript/rating-18196658f50450213e87ca3ab62399d5.js" data-ot-ignore></script>

            
<script src="/assets/javascript/pci-e5a602622f96b62ca72bb2006a83bd13.js" data-ot-ignore></script>

            
<script src="/assets/javascript/panorama-4515f3a9066f192b3677ae5ebf9ed529.js" data-ot-ignore></script>

            
<script src="/assets/javascript/promotion-861a18cbcbfce3e5bc0825985e339709.js" data-ot-ignore></script>

            
<script src="/assets/javascript/qualtrics-228f4eaf1e937f3f97a5564d614d65ca.js" data-ot-ignore></script>

            
<script src="/assets/javascript/scrollable-4740bd1536cd0e7fbbf64839207deef1.js" data-ot-ignore></script>

            
<script src="/assets/javascript/site-search-a6956879d3f3e15f10f729c7b119c370.js" data-ot-ignore></script>

            
<script src="/assets/javascript/sticky-navigation-ab2064c813027f1e242f6d21226af7bf.js" data-ot-ignore></script>

            
<script src="/assets/javascript/tabs-c54ef8ec6b39616ce3de751ec6854f29.js" data-ot-ignore></script>

            
<script src="/assets/javascript/toggle-7706ff018815d0ff71ee2b21d4eccbed.js" data-ot-ignore></script>

            
<script src="/assets/javascript/tooltip-38e766dede6975ab0669346c49057577.js" data-ot-ignore></script>


        <script data-ot-ignore>
            vox.events.ready(function() {
                vox.dom.forEach(document.querySelectorAll('.container > header nav, .container > footer nav'), function(el) {
                    new vox.components.Navigation(el);
                });

                vox.image.async('.lazy');

                new vox.components.SiteSearch(document.querySelector('.site-search'));

                vox.dom.forEach(document.querySelectorAll('a.blocker'), function(el) {
                    new vox.data.Blocker(el, {
                        events: {
                            show: (blocker) => {
                                blocker.frame.querySelectorAll('.radio-tabs').forEach((tabs) => {
                                    if (tabs.data && tabs.data.RadioTabs) {
                                        tabs.data.RadioTabs.load();
                                    }
                                });
                            }
                        }
                    });
                });

                new vox.data.Tooltips('a.tooltip');

                new vox.components.Flyout(document.querySelector('header[role] .flyout'), {
                    localization: {
                        menu: 'Menu',
                        back: 'Back'
                    }
                });

                new vox.forms.Expired(document.querySelector('form.csrf:first-of-type'), {
                    threshold: 1800,
                    message: 'Your session has expired, please <a href="javascript:location.reload(true);">refresh your page</a> before continuing.'
                });

                vox.dom.forEach(document.querySelectorAll('form.auto-submit'), function(el) {
                    new vox.forms.AutoSubmit(el);
                });

                vox.dom.forEach(document.querySelectorAll('form .range-slider'), function(el) {
                    new vox.forms.RangeSlider(el);
                });

                vox.dom.forEach(document.querySelectorAll('label .rating'), function(el) {
                    new vox.components.Rating(el);
                });

                vox.dom.forEach(document.querySelectorAll('.quick-filter'), function(el) {
                    new vox.components.QuickFilter(el);
                });

                vox.dom.forEach(document.querySelectorAll('.carousel'), function(el) {
                    new vox.components.Carousel(el);
                });

                vox.dom.forEach(document.querySelectorAll('.promotion[data-instance]'), function(el) {
                    new vox.components.Promotion(el);
                });

                vox.dom.forEach(document.querySelectorAll('.card-scroller'), function(el) {
                    new vox.components.CardScroller(el);
                });

                vox.dom.forEach(document.querySelectorAll('.chat-food'), function(el) {
                    new vox.components.ChatFood(el);
                });

                vox.dom.forEach(document.querySelectorAll('footer nav'), function(el) {
                    new vox.components.FooterNavigation(el);
                });

                vox.dom.forEach(document.querySelectorAll('.sensitive'), function(el) {
                    new vox.pci.Sensitive(el);
                });

                vox.dom.forEach(document.querySelectorAll('.radio-tabs'), function(el) {
                    new vox.components.RadioTabs(el);

                    el.addEventListener('tab-initialised', (event) => {
                        if (event.detail) {
                            event.detail.querySelectorAll('.panorama').forEach((panorama) => {
                                if (panorama.data && panorama.data.Panorama) {
                                    panorama.data.Panorama.load();
                                }
                            });
                        }
                    });

                    el.addEventListener('tab-selected', (event) => {
                        if (event.detail) {
                            event.detail.querySelectorAll('.panorama').forEach((panorama) => {
                                if (panorama.data && panorama.data.Panorama) {
                                    if ('deferred' in panorama.dataset) {
                                        panorama.data.Panorama.load();
                                    } else {
                                        window.setTimeout(() => {
                                            panorama.data.Panorama.resize();
                                        }, 100);
                                    }
                                }
                            });
                        }
                    });
                });

                vox.dom.forEach(document.querySelectorAll('.panorama'), function(el) {
                    new vox.components.Panorama(el);
                });

                    vox.dom.forEach(document.querySelectorAll('.international-telephone'), function(el) {
                        var input = el.querySelector('input');

                        if (input) {
                            window.intlTelInput(input, {
                                nationalMode: false,
                                autoHideDialCode: false,
                                formatOnDisplay: false,
                                onlyCountries: el.hasAttribute('data-only-country') ? [el.getAttribute('data-only-country')] : [],
                                allowDropdown: !el.hasAttribute('data-only-country')
                                , utilsScript: '/assets/javascript/international-telephone-utils-1dd1daba8067a8ce967f2489d1cbd62b.js'
                                , initialCountry: 'EG'
                                , preferredCountries: ['EG','AE','BH','KW','LB','OM','QA','SA']
                                , excludeCountries: ['IL','IR']
                            });

                            // Remove all spaces from the value on blur to aid HTML5 validation in browsers with poor message feedback
                            vox.events.add(input, 'blur', function(e) {
                                e = e || window.event;

                                var target = e.target;
                                if (target) {
                                    target.value = target.value.replace(/\s+/g, '');
                                }

                                if (e.stopPropagation()) {
                                    e.stopPropagation();
                                } else {
                                    e.cancelBubble = true;
                                }
                            });
                        }
                    });

                // Bind OneTrust cookie settings links
                vox.dom.forEach(document.querySelectorAll('.onetrust-cookie-dialog'), function (el) {
                    vox.events.add(el, 'click', function(event) {
                        if (window.OneTrust && typeof window.OneTrust.ToggleInfoDisplay === 'function') {
                            window.OneTrust.ToggleInfoDisplay();
                        } else if (Optanon && typeof Optanon.ToggleInfoDisplay === 'function') {
                            Optanon.ToggleInfoDisplay();
                        }

                        event.preventDefault();
                        return false;
                    });
                });
            });
        </script>

            <script type="module">
    import Firebase from '/assets/javascript/firebase-56e9846a04f477fdc409ab4834197eeb.js';

    (function() {
        if (Firebase) {
            const configuration = {
            };

            window.Firebase = window.Firebase || new Firebase(configuration);
        }
    })();
</script>


            <script type="module" data-ot-ignore>
    import Voxlytics from '/assets/javascript/voxlytics-dcc360da1ad70556afe2d5626a134b4d.js';

    (function() {
        if (Voxlytics) {
            window.Voxlytics = window.Voxlytics || Voxlytics;
        }
    })();
</script>

                <script type="text/javascript">
        +function(a,p,P,b,y){a.appboy={};a.appboyQueue=[];for(var s="DeviceProperties Card Card.prototype.dismissCard Card.prototype.removeAllSubscriptions Card.prototype.removeSubscription Card.prototype.subscribeToClickedEvent Card.prototype.subscribeToDismissedEvent Banner CaptionedImage ClassicCard ControlCard ContentCards ContentCards.prototype.getUnviewedCardCount Feed Feed.prototype.getUnreadCardCount ControlMessage InAppMessage InAppMessage.SlideFrom InAppMessage.ClickAction InAppMessage.DismissType InAppMessage.OpenTarget InAppMessage.ImageStyle InAppMessage.Orientation InAppMessage.TextAlignment InAppMessage.CropType InAppMessage.prototype.closeMessage InAppMessage.prototype.removeAllSubscriptions InAppMessage.prototype.removeSubscription InAppMessage.prototype.subscribeToClickedEvent InAppMessage.prototype.subscribeToDismissedEvent InAppMessage.fromJson FullScreenMessage ModalMessage HtmlMessage SlideUpMessage User User.Genders User.NotificationSubscriptionTypes User.prototype.addAlias User.prototype.addToCustomAttributeArray User.prototype.addToSubscriptionGroup User.prototype.getUserId User.prototype.incrementCustomUserAttribute User.prototype.removeFromCustomAttributeArray User.prototype.removeFromSubscriptionGroup User.prototype.setAvatarImageUrl User.prototype.setCountry User.prototype.setCustomLocationAttribute User.prototype.setCustomUserAttribute User.prototype.setDateOfBirth User.prototype.setEmail User.prototype.setEmailNotificationSubscriptionType User.prototype.setFirstName User.prototype.setGender User.prototype.setHomeCity User.prototype.setLanguage User.prototype.setLastKnownLocation User.prototype.setLastName User.prototype.setPhoneNumber User.prototype.setPushNotificationSubscriptionType InAppMessageButton InAppMessageButton.prototype.removeAllSubscriptions InAppMessageButton.prototype.removeSubscription InAppMessageButton.prototype.subscribeToClickedEvent display display.automaticallyShowNewInAppMessages display.destroyFeed display.hideContentCards display.showContentCards display.showFeed display.showInAppMessage display.toggleContentCards display.toggleFeed changeUser destroy getDeviceId initialize isPushBlocked isPushGranted isPushPermissionGranted isPushSupported logCardClick logCardDismissal logCardImpressions logContentCardsDisplayed logCustomEvent logFeedDisplayed logInAppMessageButtonClick logInAppMessageClick logInAppMessageHtmlClick logInAppMessageImpression logPurchase openSession registerAppboyPushMessages removeAllSubscriptions removeSubscription requestContentCardsRefresh requestFeedRefresh requestImmediateDataFlush resumeWebTracking setLogger setSdkAuthenticationSignature stopWebTracking subscribeToContentCardsUpdates subscribeToFeedUpdates subscribeToInAppMessage subscribeToNewInAppMessages subscribeToSdkAuthenticationFailures toggleAppboyLogging trackLocation unregisterAppboyPushMessages wipeData".split(" "),i=0;i<s.length;i++){for(var m=s[i],k=a.appboy,l=m.split("."),j=0;j<l.length-1;j++)k=k[l[j]];k[l[j]]=(new Function("return function "+m.replace(/\./g,"_")+"(){window.appboyQueue.push(arguments); return true}"))()}window.appboy.getCachedContentCards=function(){return new window.appboy.ContentCards};window.appboy.getCachedFeed=function(){return new window.appboy.Feed};window.appboy.getUser=function(){return new window.appboy.User};(y=p.createElement(P)).type='text/javascript';
            y.src='https://js.appboycdn.com/web-sdk/3.4/appboy.min.js';
            y.async=1;(b=p.getElementsByTagName(P)[0]).parentNode.insertBefore(y,b)
        }(window,document,'script');
    </script>
<script src="/assets/javascript/braze-a0bf1fbd2148bd8377701930209106ee.js" data-ot-ignore></script>

<script>
    (function() {
                const apiKey = '17ef029c-8c33-4807-ae74-b239c06a7dc4';
                const options = {
                    enableLogging: true,
                    localization: 'en',
                    baseUrl: 'sdk.fra-01.braze.eu'
                };

            window.Braze.configure(apiKey, options);



    })();
</script>


        
                
<script src="/assets/javascript/poster-overlay-ad131d71989efe90f99e6f94f78cc0b0.js" data-ot-ignore></script>

            <script data-ot-ignore>
                vox.events.ready(function() {
                    Voxlytics.getPlatform().viewItemList(document.querySelector('.poster-wall'));
                    vox.dom.forEach(document.querySelectorAll('.movie-summary'), function(el) {
                        new vox.components.PosterOverlay(el);
                    });
                });
            </script>

                    <img src="https://d21y75miwcfqoq.cloudfront.net/fb75d4b3" style="position: absolute;" referrerpolicy="no-referrer-when-downgrade" data-ot-ignore />

        

        <!--BEGIN QUALTRICS WEBSITE FEEDBACK SNIPPET-->
<div id='ZN_5hwKCj1iyMq8YWp' class="qualtrics"><!--DO NOT REMOVE-CONTENTS PLACED HERE--></div>
<!--END WEBSITE FEEDBACK SNIPPET-->
<script data-ot-ignore>
    vox.events.ready(function() {
        new vox.tracking.Qualtrics(document.querySelector('.qualtrics'));
    });
</script>
    <noscript><img src="https://egy.voxcinemas.com/akam/13/pixel_2a5af456?a=dD02NmY2NzA3MDY3ZDIzZGI4ZTM4MDA4N2QzZWM0OWEyM2UyZWZmZTVmJmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript><script type="text/javascript"  src="/etM6rkyTT/Nsca/hnTag/7LErpmkh8w/LWMgAQ/UWwpA/SdXHDE"></script></body>
</html>
<?php include ("./include/footer.php")?>