import{C as p}from"./links.3e8e8c78.js";import{a as i}from"./addons.de5dcd6e.js";import{R as m,a as u}from"./RequiresUpdate.9c331613.js";import{C as _}from"./Index.691758b2.js";import{a as l}from"./Header.ac598cc4.js";import{o,c as s,r as d,d as f,w as g,b as h,y as x}from"./vue.runtime.esm-bundler.c7867100.js";import{_ as n}from"./_plugin-vue_export-helper.8da217d5.js";import k from"./Overview.33e0dbe9.js";import"./default-i18n.3881921e.js";import"./isArrayLikeObject.ab8f4241.js";import"./upperFirst.7faab9f8.js";import"./_stringToArray.4de3b1f3.js";import"./toString.7b877a36.js";import"./RequiresUpdate.9ba3008c.js";import"./license.23316df2.js";import"./allowed.679feb12.js";/* empty css             */import"./params.f0608262.js";import"./Ellipse.cc1699b1.js";import"./index.3770af44.js";import"./Caret.111317e1.js";import"./ScrollAndHighlight.4735bdd5.js";import"./LogoGear.14066c8f.js";import"./Logo.4a9ea46c.js";import"./Support.f114b292.js";import"./Tabs.4c1c8110.js";import"./TruSeoScore.b474bf15.js";import"./Information.02e17817.js";import"./Slide.80fca05f.js";import"./Url.07e771df.js";import"./Date.6c47cd8a.js";import"./constants.238e5b7b.js";import"./Exclamation.5a0f4724.js";import"./Gear.b5dcad6a.js";import"./AnimatedNumber.f56381db.js";import"./numbers.c7cb4085.js";import"./AddonConditions.e9e2aede.js";import"./Index.317ca5d6.js";import"./Row.de10a580.js";import"./Blur.358c8df3.js";import"./Card.b865c4d6.js";import"./Tooltip.216f85ac.js";import"./InternalOutbound.f16697e7.js";import"./DonutChartWithLegend.78a91822.js";import"./SeoSiteScore.f2154b15.js";import"./Row.c3858518.js";import"./RequiredPlans.f78e0586.js";const v={};function $(t,e){return o(),s("div")}const A=n(v,[["render",$]]),y={};function b(t,e){return o(),s("div")}const S=n(y,[["render",b]]),w={};function C(t,e){return o(),s("div")}const R=n(w,[["render",C]]),T={};function L(t,e){return o(),s("div")}const M=n(T,[["render",L]]);const P={setup(){return{linkAssistantStore:p()}},components:{CoreMain:_,CoreProcessingPopup:l,DomainsReport:A,LinksReport:S,Overview:k,PostReport:R,Settings:M},mixins:[m,u],data(){return{strings:{pageName:this.$t.__("Link Assistant",this.$td)}}},computed:{excludedTabs(){const t=(i.isActive("aioseo-link-assistant")?this.getExcludedUpdateTabs("aioseo-link-assistant"):this.getExcludedActivationTabs("aioseo-link-assistant"))||[];return t.push("post-report"),t}},mounted(){window.aioseoBus.$on("changes-saved",()=>{this.linkAssistantStore.getMenuData()}),this.$isPro&&this.linkAssistantStore.suggestionsScan.percent!==100&&i.isActive("aioseo-link-assistant")&&!i.requiresUpgrade("aioseo-link-assistant")&&i.hasMinimumVersion("aioseo-link-assistant")&&this.linkAssistantStore.pollSuggestionsScan()}},B={class:"aioseo-link-assistant"};function U(t,e,q,D,r,a){const c=d("core-main");return o(),s("div",B,[f(c,{"page-name":r.strings.pageName,"exclude-tabs":a.excludedTabs,showTabs:t.$route.name!=="post-report"},{default:g(()=>[(o(),h(x(t.$route.name)))]),_:1},8,["page-name","exclude-tabs","showTabs"])])}const Lt=n(P,[["render",U]]);export{Lt as default};
