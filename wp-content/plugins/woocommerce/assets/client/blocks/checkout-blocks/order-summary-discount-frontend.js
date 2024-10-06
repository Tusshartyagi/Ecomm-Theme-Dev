(self.webpackChunkwebpackWcBlocksFrontendJsonp=self.webpackChunkwebpackWcBlocksFrontendJsonp||[]).push([[2996],{4845:(e,t,o)=>{"use strict";o.d(t,{A:()=>p});var n=o(1609),a=o(8165),s=o(6087),r=o(851),c=o(4040),l=o.n(c),i=(o(2080),o(8730));const p=(0,s.forwardRef)(((e,t)=>{"showSpinner"in e&&l()("showSpinner prop",{version:"8.9.0",alternative:"Render a spinner in the button children instead.",plugin:"WooCommerce"});const{className:o,showSpinner:s=!1,children:c,variant:p="contained",removeTextWrap:d=!1,...u}=e,m=(0,r.A)("wc-block-components-button","wp-element-button",o,p,{"wc-block-components-button--loading":s});if("href"in e)return(0,n.createElement)(a.$,{render:(0,n.createElement)("a",{ref:t,href:e.href},s&&(0,n.createElement)(i.A,null),(0,n.createElement)("span",{className:"wc-block-components-button__text"},c)),className:m,...u});const g=d?e.children:(0,n.createElement)("span",{className:"wc-block-components-button__text"},e.children);return(0,n.createElement)(a.$,{ref:t,className:m,...u},s&&(0,n.createElement)(i.A,null),g)}))},4597:(e,t,o)=>{"use strict";o.d(t,{l:()=>V});var n=o(1609),a=o(4656),s=o(6087),r=o(7723),c=o(8537),l=o(851),i=o(332),p=o(3993),d=o(7143),u=o(7594);o(1707);const m=({id:e,className:t,label:o,onChange:c,options:m,value:g,required:h=!1,errorId:_,autoComplete:v="off",errorMessage:E=(0,r.__)("Please select a valid option","woocommerce")})=>{const b=(0,s.useRef)(null),f=(0,s.useId)(),k=e||"control-"+f,C=_||k,{setValidationErrors:w,clearValidationError:y}=(0,d.useDispatch)(u.VALIDATION_STORE_KEY),{error:A,validationErrorId:R}=(0,d.useSelect)((e=>{const t=e(u.VALIDATION_STORE_KEY);return{error:t.getValidationError(C),validationErrorId:t.getValidationErrorId(C)}}));return(0,s.useEffect)((()=>(!h||g?y(C):w({[C]:{message:E,hidden:!0}}),()=>{y(C)})),[y,g,C,E,h,w]),(0,n.createElement)("div",{id:k,className:(0,l.A)("wc-block-components-combobox",t,{"is-active":g,"has-error":(null==A?void 0:A.message)&&!(null!=A&&A.hidden)}),ref:b},(0,n.createElement)(i.A,{className:"wc-block-components-combobox-control",label:o,onChange:c,onFilterValueChange:e=>{if(e.length){const t=(0,p.isObject)(b.current)?b.current.ownerDocument.activeElement:void 0;if(t&&(0,p.isObject)(b.current)&&b.current.contains(t))return;const o=e.toLocaleUpperCase(),n=m.find((e=>e.value.toLocaleUpperCase()===o));if(n)return void c(n.value);const a=m.find((e=>e.label.toLocaleUpperCase().startsWith(o)));a&&c(a.value)}},options:m,value:g||"",allowReset:!1,autoComplete:v,"aria-invalid":(null==A?void 0:A.message)&&!(null!=A&&A.hidden),"aria-errormessage":R}),(0,n.createElement)(a.ValidationInputError,{propertyName:C}))};o(2931);const g=({className:e,countries:t,id:o,label:a,onChange:i,value:p="",autoComplete:d="off",required:u=!1,errorId:g,errorMessage:h=(0,r.__)("Please select a country","woocommerce")})=>{const _=(0,s.useMemo)((()=>Object.entries(t).map((([e,t])=>({value:e,label:(0,c.decodeEntities)(t)})))),[t]);return(0,n.createElement)("div",{className:(0,l.A)(e,"wc-block-components-country-input")},(0,n.createElement)(m,{id:o,label:a,onChange:i,options:_,value:p,errorId:g,errorMessage:h,required:u,autoComplete:d}))};var h=o(812);const _=e=>(0,n.createElement)(g,{countries:h.AG,...e}),v=e=>(0,n.createElement)(g,{countries:h.G3,...e});o(8824);const E=(e,t)=>{const o=t.find((t=>t.label.toLocaleUpperCase()===e.toLocaleUpperCase()||t.value.toLocaleUpperCase()===e.toLocaleUpperCase()));return o?o.value:""},b=({className:e,id:t,states:o,country:i,label:p,onChange:d,autoComplete:u="off",value:g="",required:h=!1,errorId:_=""})=>{const v=o[i],b=(0,s.useMemo)((()=>v?Object.keys(v).map((e=>({value:e,label:(0,c.decodeEntities)(v[e])}))):[]),[v]),f=(0,s.useCallback)((e=>{const t=b.length>0?E(e,b):e;t!==g&&d(t)}),[d,b,g]),k=(0,s.useRef)(g);return(0,s.useEffect)((()=>{k.current!==g&&(k.current=g)}),[g]),(0,s.useEffect)((()=>{if(b.length>0&&k.current){const e=E(k.current,b);e!==k.current&&f(e)}}),[b,f]),b.length>0?(0,n.createElement)(m,{className:(0,l.A)(e,"wc-block-components-state-input"),id:t,label:p,onChange:f,options:b,value:g,errorMessage:(0,r.__)("Please select a state.","woocommerce"),errorId:_,required:h,autoComplete:u}):(0,n.createElement)(a.ValidatedTextInput,{className:e,id:t,label:p,onChange:f,autoComplete:u,value:g,required:h})},f=e=>(0,n.createElement)(b,{states:h.uz,...e}),k=e=>(0,n.createElement)(b,{states:h.SL,...e});var C=o(9491),w=o(1573),y=o(923),A=o.n(y),R=o(8585);var N=o(1e3),S=o(3832);const I=({field:e,props:t,onChange:o,value:c})=>{var l;const i=null!==(l=null==e?void 0:e.required)&&void 0!==l&&l,[p,d]=(0,s.useState)((()=>Boolean(c)||i));return(0,n.createElement)(s.Fragment,null,p?(0,n.createElement)(a.ValidatedTextInput,{...t,type:e.type,label:i?e.label:e.optionalLabel,className:`wc-block-components-address-form__${e.key}`,value:c,onChange:t=>o(e.key,t)}):(0,n.createElement)("button",{className:"wc-block-components-address-form__address_2-toggle",onClick:()=>d(!0)},(0,r.sprintf)(
// translators: %s: address 2 field label.
// translators: %s: address 2 field label.
(0,r.__)("+ Add %s","woocommerce"),e.label.toLowerCase())))},O=(e,t,o)=>({id:`${t}-${null==e?void 0:e.key}`.replaceAll("/","-"),errorId:`${o}_${null==e?void 0:e.key}`,label:null!=e&&e.required?null==e?void 0:e.label:null==e?void 0:e.optionalLabel,autoCapitalize:null==e?void 0:e.autocapitalize,autoComplete:null==e?void 0:e.autocomplete,errorMessage:null==e?void 0:e.errorMessage,required:null==e?void 0:e.required,className:`wc-block-components-address-form__${null==e?void 0:e.key}`.replaceAll("/","-"),...null==e?void 0:e.attributes}),T=(e,t,o)=>({field:t.find((t=>t.key===e)),value:(0,p.objectHasProp)(o,e)?o[e]:void 0}),x=({formId:e,address1:t,address2:o,addressType:s,onChange:r})=>{var c,l,i,p;const d=t?O(t.field,e,s):void 0,u=o?O(o.field,e,s):void 0;return(0,n.createElement)(n.Fragment,null,t&&(0,n.createElement)(a.ValidatedTextInput,{...d,type:null===(c=t.field)||void 0===c?void 0:c.type,label:null===(l=t.field)||void 0===l?void 0:l.label,className:`wc-block-components-address-form__${null===(i=t.field)||void 0===i?void 0:i.key}`,value:t.value,onChange:e=>{var o;return r(null===(o=t.field)||void 0===o?void 0:o.key,e)}}),(null==o?void 0:o.field)&&!(null!=o&&null!==(p=o.field)&&void 0!==p&&p.hidden)&&(0,n.createElement)(I,{field:o.field,props:u,onChange:r,value:null==o?void 0:o.value}))},L=({id:e="",fields:t,fieldConfig:o={},onChange:c,addressType:i="shipping",values:g,children:h})=>{const E=(0,C.useInstanceId)(L),b=(0,w.c)(t),y=(0,w.c)(o),I=(0,w.c)((0,p.objectHasProp)(g,"country")?g.country:""),V=(0,s.useMemo)((()=>{const e=(0,R.A)(b,y,I);return{fields:e,addressType:i,required:e.filter((e=>e.required)),hidden:e.filter((e=>e.hidden))}}),[b,y,I,i]),D=(0,s.useRef)({});return(0,s.useEffect)((()=>{const e={...g,...Object.fromEntries(V.hidden.map((e=>[e.key,""])))};A()(g,e)||c(e)}),[c,V,g]),(0,s.useEffect)((()=>{"shipping"===i&&(0,p.objectHasProp)(g,"country")&&(e=>{const t="shipping_country",o=(0,d.select)(u.VALIDATION_STORE_KEY).getValidationError(t);!e.country&&(e.city||e.state||e.postcode)&&(o?(0,d.dispatch)(u.VALIDATION_STORE_KEY).showValidationError(t):(0,d.dispatch)(u.VALIDATION_STORE_KEY).setValidationErrors({[t]:{message:(0,r.__)("Please select your country","woocommerce"),hidden:!1}})),o&&e.country&&(0,d.dispatch)(u.VALIDATION_STORE_KEY).clearValidationError(t)})(g)}),[g,i]),(0,s.useEffect)((()=>{var e,t;null===(e=D.current)||void 0===e||null===(t=e.postcode)||void 0===t||t.revalidate()}),[I]),e=e||`${E}`,(0,n.createElement)("div",{id:e,className:"wc-block-components-address-form"},V.fields.map((t=>{if(t.hidden)return null;const o=O(t,e,i);if("email"===t.key&&(o.id="email",o.errorId="billing_email"),"checkbox"===t.type)return(0,n.createElement)(a.CheckboxControl,{key:t.key,checked:Boolean(g[t.key]),onChange:e=>{c({...g,[t.key]:e})},...o});if("address_1"===t.key){const o=T("address_1",V.fields,g),a=T("address_2",V.fields,g);return(0,n.createElement)(x,{address1:o,address2:a,addressType:i,formId:e,key:t.key,onChange:(e,t)=>{c({...g,[e]:t})}})}if("address_2"===t.key)return null;if("country"===t.key&&(0,p.objectHasProp)(g,"country")){const e="shipping"===i?v:_;return(0,n.createElement)(e,{key:t.key,...o,value:g.country,onChange:e=>{c({...g,country:e,state:"",postcode:""})}})}if("state"===t.key&&(0,p.objectHasProp)(g,"state")){const e="shipping"===i?k:f;return(0,n.createElement)(e,{key:t.key,...o,country:g.country,value:g.state,onChange:e=>c({...g,state:e})})}return"select"===t.type?void 0===t.options?null:(0,n.createElement)(m,{key:t.key,...o,className:(0,l.A)("wc-block-components-select-input",`wc-block-components-select-input-${t.key}`.replaceAll("/","-")),value:g[t.key],onChange:e=>{c({...g,[t.key]:e})},options:t.options}):(0,n.createElement)(a.ValidatedTextInput,{key:t.key,ref:e=>D.current[t.key]=e,...o,type:t.type,value:g[t.key],onChange:e=>c({...g,[t.key]:e}),customFormatter:e=>"postcode"===t.key?e.trimStart().toUpperCase():e,customValidation:e=>((e,t,o)=>!((e.required||e.value)&&("postcode"===t&&o&&!(0,N.isPostcode)({postcode:e.value,country:o})?(e.setCustomValidity((0,r.__)("Please enter a valid postcode","woocommerce")),1):"email"===t&&!(0,S.isEmail)(e.value)&&(e.setCustomValidity((0,r.__)("Please enter a valid email address","woocommerce")),1))))(e,t.key,(0,p.objectHasProp)(g,"country")?g.country:"")})})),h)},V=L},8067:(e,t,o)=>{"use strict";o.d(t,{A:()=>C});var n=o(1609),a=o(851),s=o(7723),r=o(8537),c=o(4656),l=o(6087),i=o(4958),p=o(1359),d=o.n(p);const u=["a","b","em","i","strong","p","br"],m=["target","href","rel","name","download"],g=(e,t)=>{const o=(null==t?void 0:t.tags)||u,n=(null==t?void 0:t.attr)||m;return d().sanitize(e,{ALLOWED_TAGS:o,ALLOWED_ATTR:n})};var h=o(7143),_=o(7594),v=o(9095),E=o(8529),b=o(5703);const f=e=>{const t=(0,b.getSetting)("displayCartPricesIncludingTax",!1)?parseInt(e.price,10)+parseInt(e.taxes,10):parseInt(e.price,10);let o=(0,n.createElement)(n.Fragment,null,Number.isFinite(t)&&(0,n.createElement)(c.FormattedMonetaryAmount,{currency:(0,E.getCurrencyFromPriceResponse)(e),value:t}),Number.isFinite(t)&&e.delivery_time?" — ":null,(0,r.decodeEntities)(e.delivery_time));return 0===t&&(o=(0,n.createElement)("span",{className:"wc-block-components-shipping-rates-control__package__description--free"},(0,s.__)("Free","woocommerce"))),{label:(0,r.decodeEntities)(e.name),value:e.rate_id,description:o}},k=({className:e="",noResultsMessage:t,onSelectRate:o,rates:a,renderOption:s=f,selectedRate:r,disabled:i=!1,highlightChecked:p=!1})=>{const d=(null==r?void 0:r.rate_id)||"",u=(0,v.Z)(d),[m,g]=(0,l.useState)((()=>d||(a.length>0?a[0].rate_id:void 0)));return(0,l.useEffect)((()=>{d&&d!==u&&d!==m&&g(d)}),[d,m,u]),(0,l.useEffect)((()=>{!m&&a.length>0&&(g(a[0].rate_id),o(a[0].rate_id))}),[o,a,m]),(0,l.useEffect)((()=>{m&&o(m)}),[o,m]),0===a.length?t:(0,n.createElement)(c.RadioControl,{className:e,onChange:e=>{g(e),o(e)},highlightChecked:p,disabled:i,selected:m,options:a.map(s)})};o(2867);const C=({packageId:e,className:t="",noResultsMessage:o,renderOption:p,packageData:d,collapsible:u,showItems:m,highlightChecked:v=!1})=>{var E;const{selectShippingRate:b,isSelectingRate:f}=(0,i.m)(),C=(0,h.useSelect)((e=>{var t,o,n;return null===(t=e(_.CART_STORE_KEY))||void 0===t||null===(o=t.getCartData())||void 0===o||null===(n=o.shippingRates)||void 0===n?void 0:n.length}))>1||document.querySelectorAll(".wc-block-components-shipping-rates-control__package").length>1,w=null!=m?m:C,y=null!=u?u:C,A=(0,n.createElement)(n.Fragment,null,(y||w)&&(0,n.createElement)("div",{className:"wc-block-components-shipping-rates-control__package-title",dangerouslySetInnerHTML:{__html:g(d.name)}}),w&&(0,n.createElement)("ul",{className:"wc-block-components-shipping-rates-control__package-items"},Object.values(d.items).map((e=>{const t=(0,r.decodeEntities)(e.name),o=e.quantity;return(0,n.createElement)("li",{key:e.key,className:"wc-block-components-shipping-rates-control__package-item"},(0,n.createElement)(c.Label,{label:o>1?`${t} × ${o}`:`${t}`,screenReaderLabel:(0,s.sprintf)(/* translators: %1$s name of the product (ie: Sunglasses), %2$d number of units in the current cart package */ /* translators: %1$s name of the product (ie: Sunglasses), %2$d number of units in the current cart package */
(0,s._n)("%1$s (%2$d unit)","%1$s (%2$d units)",o,"woocommerce"),t,o)}))})))),R=(0,l.useCallback)((t=>{b(t,e)}),[e,b]),N={className:t,noResultsMessage:o,rates:d.shipping_rates,onSelectRate:R,selectedRate:d.shipping_rates.find((e=>e.selected)),renderOption:p,disabled:f,highlightChecked:v},S=(0,l.useMemo)((()=>{var e;return null==d||null===(e=d.shipping_rates)||void 0===e?void 0:e.findIndex((e=>null==e?void 0:e.selected))}),[null==d?void 0:d.shipping_rates]);return y?(0,n.createElement)(c.Panel,{className:(0,a.A)("wc-block-components-shipping-rates-control__package",t,{"wc-block-components-shipping-rates-control__package--disabled":f}),initialOpen:!1,title:A},(0,n.createElement)(k,{...N})):(0,n.createElement)("div",{className:(0,a.A)("wc-block-components-shipping-rates-control__package",t,{"wc-block-components-shipping-rates-control__package--disabled":f,"wc-block-components-shipping-rates-control__package--first-selected":!f&&0===S,"wc-block-components-shipping-rates-control__package--last-selected":!f&&S===(null==d||null===(E=d.shipping_rates)||void 0===E?void 0:E.length)-1})},A,(0,n.createElement)(k,{...N}))}},8460:(e,t,o)=>{"use strict";o.d(t,{A:()=>v});var n=o(1609),a=o(7723),s=o(6087),r=o(5416),c=o(1e3),l=o(8531),i=o(8605),p=o(2663),d=o(4958),u=o(6988),m=o(3993),g=o(8067),h=o(195);const _=({packages:e,showItems:t,collapsible:o,noResultsMessage:a,renderOption:s,context:r=""})=>e.length?(0,n.createElement)(n.Fragment,null,e.map((({package_id:e,...c})=>(0,n.createElement)(g.A,{highlightChecked:"woocommerce/cart"!==r,key:e,packageId:e,packageData:c,collapsible:o,showItems:t,noResultsMessage:a,renderOption:s})))):null,v=({shippingRates:e,isLoadingRates:t,className:o,collapsible:v,showItems:E,noResultsMessage:b,renderOption:f,context:k})=>{(0,s.useEffect)((()=>{var o,n;t||(o=(0,l.T4)(e),n=(0,l.Lb)(e),1===o?(0,h.speak)((0,a.sprintf)(/* translators: %d number of shipping options found. */ /* translators: %d number of shipping options found. */
(0,a._n)("%d shipping option was found.","%d shipping options were found.",n,"woocommerce"),n)):(0,h.speak)((0,a.sprintf)(/* translators: %d number of shipping packages packages. */ /* translators: %d number of shipping packages packages. */
(0,a._n)("Shipping option searched for %d package.","Shipping options searched for %d packages.",o,"woocommerce"),o)+" "+(0,a.sprintf)(/* translators: %d number of shipping options available. */ /* translators: %d number of shipping options available. */
(0,a._n)("%d shipping option was found","%d shipping options were found",n,"woocommerce"),n)))}),[t,e]);const{extensions:C,receiveCart:w,...y}=(0,i.V)(),A={className:o,collapsible:v,showItems:E,noResultsMessage:b,renderOption:f,extensions:C,cart:y,components:{ShippingRatesControlPackage:g.A},context:k},{isEditor:R}=(0,p.m)(),{hasSelectedLocalPickup:N,selectedRates:S}=(0,d.m)(),I=(0,m.isObject)(S)?Object.values(S):[],O=I.every((e=>e===I[0]));return(0,n.createElement)(r.A,{isLoading:t,screenReaderLabel:(0,a.__)("Loading shipping rates…","woocommerce"),showSpinner:!0},N&&"woocommerce/cart"===k&&e.length>1&&!O&&!R&&(0,n.createElement)(u.A,{className:"wc-block-components-notice",isDismissible:!1,status:"warning"},(0,a.__)("Multiple shipments must have the same pickup location","woocommerce")),(0,n.createElement)(c.ExperimentalOrderShippingPackages.Slot,{...A}),(0,n.createElement)(c.ExperimentalOrderShippingPackages,null,(0,n.createElement)(_,{packages:e,noResultsMessage:b,renderOption:f})))}},6716:(e,t,o)=>{"use strict";o.d(t,{_i:()=>u,n$:()=>_,Ay:()=>f,w7:()=>q});var n=o(1609),a=o(7723),s=o(6087),r=o(4845),c=o(5416),l=o(9491),i=o(4656),p=o(7143),d=o(7594);o(3048);const u=(0,l.withInstanceId)((({instanceId:e,isLoading:t=!1,onSubmit:o,displayCouponForm:l=!1})=>{const[u,m]=(0,s.useState)(""),[g,h]=(0,s.useState)(l),_=`wc-block-components-totals-coupon__input-${e}`,{validationErrorId:v}=(0,p.useSelect)((e=>({validationErrorId:e(d.VALIDATION_STORE_KEY).getValidationErrorId(_)})));return(0,n.createElement)(i.Panel,{className:"wc-block-components-totals-coupon",initialOpen:g,hasBorder:!1,title:(0,a.__)("Add a coupon","woocommerce"),state:[g,h]},(0,n.createElement)(c.A,{screenReaderLabel:(0,a.__)("Applying coupon…","woocommerce"),isLoading:t,showSpinner:!1},(0,n.createElement)("div",{className:"wc-block-components-totals-coupon__content"},(0,n.createElement)("form",{className:"wc-block-components-totals-coupon__form",id:"wc-block-components-totals-coupon__form"},(0,n.createElement)(i.ValidatedTextInput,{id:_,errorId:"coupon",className:"wc-block-components-totals-coupon__input",label:(0,a.__)("Enter code","woocommerce"),value:u,ariaDescribedBy:v,onChange:e=>{m(e)},focusOnMount:!0,validateOnMount:!1,showError:!1}),(0,n.createElement)(r.A,{className:"wc-block-components-totals-coupon__button",disabled:t||!u,showSpinner:t,onClick:e=>{var t;e.preventDefault(),void 0!==o?null===(t=o(u))||void 0===t||t.then((e=>{e&&(m(""),h(!1))})):(m(""),h(!0))},type:"submit"},(0,a.__)("Apply","woocommerce"))),(0,n.createElement)(i.ValidationInputError,{propertyName:"coupon",elementId:_}))))}));var m=o(1e3),g=o(5703);o(265);const h={context:"summary"},_=({cartCoupons:e=[],currency:t,isRemovingCoupon:o,removeCoupon:s,values:r})=>{const{total_discount:l,total_discount_tax:p}=r,d=parseInt(l,10);if(!d&&0===e.length)return null;const u=parseInt(p,10),_=(0,g.getSetting)("displayCartPricesIncludingTax",!1)?d+u:d,v=(0,m.applyCheckoutFilter)({arg:h,filterName:"coupons",defaultValue:e});return(0,n.createElement)(i.TotalsItem,{className:"wc-block-components-totals-discount",currency:t,description:0!==v.length&&(0,n.createElement)(c.A,{screenReaderLabel:(0,a.__)("Removing coupon…","woocommerce"),isLoading:o,showSpinner:!1},(0,n.createElement)("ul",{className:"wc-block-components-totals-discount__coupon-list"},v.map((e=>(0,n.createElement)(i.RemovableChip,{key:"coupon-"+e.code,className:"wc-block-components-totals-discount__coupon-list-item",text:e.label,screenReaderText:(0,a.sprintf)(/* translators: %s Coupon code. */ /* translators: %s Coupon code. */
(0,a.__)("Coupon: %s","woocommerce"),e.label),disabled:o,onRemove:()=>{s(e.code)},radius:"large",ariaLabel:(0,a.sprintf)(/* translators: %s is a coupon code. */ /* translators: %s is a coupon code. */
(0,a.__)('Remove coupon "%s"',"woocommerce"),e.label)}))))),label:_?(0,a.__)("Discount","woocommerce"):(0,a.__)("Coupons","woocommerce"),value:_?-1*_:"-"})};var v=o(851),E=o(8605),b=o(8529);o(7919);const f=({currency:e,values:t,className:o})=>{const r=(0,g.getSetting)("taxesEnabled",!0)&&(0,g.getSetting)("displayCartPricesIncludingTax",!1),{total_price:c,total_tax:l,tax_lines:p}=t,{receiveCart:d,...u}=(0,E.V)(),h=(0,m.applyCheckoutFilter)({filterName:"totalLabel",defaultValue:(0,a.__)("Total","woocommerce"),extensions:u.extensions,arg:{cart:u}}),_=(0,m.applyCheckoutFilter)({filterName:"totalValue",defaultValue:"<price/>",extensions:u.extensions,arg:{cart:u},validation:m.productPriceValidation}),f=(0,n.createElement)(i.FormattedMonetaryAmount,{className:"wc-block-components-totals-footer-item-tax-value",currency:e,value:parseInt(c,10)}),k=(0,s.createInterpolateElement)(_,{price:f}),C=parseInt(l,10),w=p&&p.length>0?(0,a.sprintf)(/* translators: %s is a list of tax rates */ /* translators: %s is a list of tax rates */
(0,a.__)("Including %s","woocommerce"),p.map((({name:t,price:o})=>`${(0,b.formatPrice)(o,e)} ${t}`)).join(", ")):(0,a.__)("Including <TaxAmount/> in taxes","woocommerce");return(0,n.createElement)(i.TotalsItem,{className:(0,v.A)("wc-block-components-totals-footer-item",o),currency:e,label:h,value:k,description:r&&0!==C&&(0,n.createElement)("p",{className:"wc-block-components-totals-footer-item-tax"},(0,s.createInterpolateElement)(w,{TaxAmount:(0,n.createElement)(i.FormattedMonetaryAmount,{className:"wc-block-components-totals-footer-item-tax-value",currency:e,value:C})}))})};var k=o(8537);const C=({selectedShippingRates:e})=>(0,n.createElement)("div",{className:"wc-block-components-totals-item__description wc-block-components-totals-shipping__via"},(0,k.decodeEntities)(e.filter(((t,o)=>e.indexOf(t)===o)).join(", ")));var w=o(8531),y=o(5683),A=o(4107),R=o(7524),N=o(923),S=o.n(N);let I=null;o(7051);var O=o(4597);const T=({address:e,onUpdate:t,onCancel:o,addressFields:c})=>{const[l,i]=(0,s.useState)(e),{showAllValidationErrors:u}=(0,p.useDispatch)(d.VALIDATION_STORE_KEY),m=function(e){const t=(0,s.useRef)(null),o=(0,s.useRef)(null),n=(0,s.useRef)(e);return(0,s.useEffect)((()=>{n.current=e}),[e]),(0,s.useCallback)((e=>{if(e)t.current=e,o.current=e.ownerDocument.activeElement;else if(o.current){var a,s,r;const e=null===(a=t.current)||void 0===a?void 0:a.contains(null===(s=t.current)||void 0===s?void 0:s.ownerDocument.activeElement);var c;if(null!==(r=t.current)&&void 0!==r&&r.isConnected&&!e&&(null!==(c=I)&&void 0!==c||(I=o.current)),n.current)n.current();else{var l;const e=o.current;null===(l=null!=e&&e.isConnected?e:I)||void 0===l||l.focus()}I=null}}),[])}(),{hasValidationErrors:g,isCustomerDataUpdating:h}=(0,p.useSelect)((e=>({hasValidationErrors:e(d.VALIDATION_STORE_KEY).hasValidationErrors,isCustomerDataUpdating:e(d.CART_STORE_KEY).isCustomerDataUpdating()})));return(0,n.createElement)("form",{className:"wc-block-components-shipping-calculator-address",ref:m},(0,n.createElement)(O.l,{fields:c,onChange:i,values:l}),(0,n.createElement)(r.A,{className:"wc-block-components-shipping-calculator-address__button",disabled:h,onClick:n=>(n.preventDefault(),S()(l,e)?o():(u(),g()?void 0:t(l))),type:"submit"},(0,a.__)("Update","woocommerce")))},x=({onUpdate:e=(()=>{}),onCancel:t=(()=>{}),addressFields:o=["country","state","city","postcode"]})=>{const{shippingAddress:a}=(0,A.q)(),s="wc/cart/shipping-calculator";return(0,n.createElement)("div",{className:"wc-block-components-shipping-calculator"},(0,n.createElement)(i.StoreNoticesContainer,{context:s}),(0,n.createElement)(T,{address:a,addressFields:o,onCancel:t,onUpdate:t=>{(0,p.dispatch)(d.CART_STORE_KEY).updateCustomerData({shipping_address:t},!1).then((()=>{(0,R.jj)(s),e(t)})).catch((e=>{(0,d.processErrorResponse)(e,s)}))}}))};var L=o(8156);const V=({label:e=(0,a.__)("Calculate","woocommerce"),isShippingCalculatorOpen:t,setIsShippingCalculatorOpen:o})=>(0,n.createElement)("button",{className:"wc-block-components-totals-shipping__change-address__link",id:"wc-block-components-totals-shipping__change-address__link",onClick:e=>{e.preventDefault(),o(!t)},"aria-label":e,"aria-expanded":t},e),D=({showCalculator:e,isShippingCalculatorOpen:t,setIsShippingCalculatorOpen:o,isCheckout:s=!1})=>e?(0,n.createElement)(V,{label:(0,a.__)("Add an address for shipping options","woocommerce"),isShippingCalculatorOpen:t,setIsShippingCalculatorOpen:o}):(0,n.createElement)("em",null,s?(0,a.__)("No shipping options available","woocommerce"):(0,a.__)("Calculated during checkout","woocommerce"));var P=o(2663),F=o(3993);const M=()=>{const{pickupAddress:e}=(0,p.useSelect)((e=>{const t=e("wc/store/cart").getShippingRates().flatMap((e=>e.shipping_rates)).find((e=>e.selected&&(0,w.J_)(e)));if((0,F.isObject)(t)&&(0,F.objectHasProp)(t,"meta_data")){const e=t.meta_data.find((e=>"pickup_address"===e.key));if((0,F.isObject)(e)&&(0,F.objectHasProp)(e,"value")&&e.value)return{pickupAddress:e.value}}return(0,F.isObject)(t),{pickupAddress:void 0}}));return void 0===e?null:(0,n.createElement)("span",{className:"wc-block-components-shipping-address"},(0,a.sprintf)(/* translators: %s: shipping method name, e.g. "Amazon Locker" */ /* translators: %s: shipping method name, e.g. "Amazon Locker" */
(0,a.__)("Collection from %s","woocommerce"),e)+" ")},$=({formattedLocation:e})=>e?(0,n.createElement)("span",{className:"wc-block-components-shipping-address"},(0,a.sprintf)(/* translators: %s location. */ /* translators: %s location. */
(0,a.__)("Shipping to %s","woocommerce"),e)+" "):null,K=({showCalculator:e,isShippingCalculatorOpen:t,setIsShippingCalculatorOpen:o,shippingAddress:s})=>{const{isEditor:r}=(0,P.m)(),c=(0,p.useSelect)((e=>e(d.CHECKOUT_STORE_KEY).prefersCollection())),l=(0,g.getSetting)("activeShippingZones"),i=l.length>1&&l.some((e=>"Everywhere"===e.description||"Locations outside all other zones"===e.description)),u=!!(0,y.i0)(s);if(!u&&!r&&!i)return null;const m=u?(0,a.__)("Change address","woocommerce"):(0,a.__)("Calculate shipping for your location","woocommerce"),h=(0,y.i0)(s);return(0,n.createElement)(n.Fragment,null,c?(0,n.createElement)(M,null):(0,n.createElement)($,{formattedLocation:h}),e&&(0,n.createElement)(V,{label:m,isShippingCalculatorOpen:t,setIsShippingCalculatorOpen:o}))};var j=o(6988),Y=o(8460);const U=({hasRates:e,shippingRates:t,isLoadingRates:o,isAddressComplete:s})=>{const r=e?(0,a.__)("Shipping options","woocommerce"):(0,a.__)("Choose a shipping option","woocommerce");return(0,n.createElement)("fieldset",{className:"wc-block-components-totals-shipping__fieldset"},(0,n.createElement)("legend",{className:"screen-reader-text"},r),(0,n.createElement)(Y.A,{className:"wc-block-components-totals-shipping__options",noResultsMessage:(0,n.createElement)(n.Fragment,null,s&&(0,n.createElement)(j.A,{isDismissible:!1,className:"wc-block-components-shipping-rates-control__no-results-notice",status:"warning"},(0,a.__)("There are no shipping options available. Please check your shipping address.","woocommerce"))),shippingRates:t,isLoadingRates:o,context:"woocommerce/cart"}))};o(8399);const q=({currency:e,values:t,showCalculator:o=!0,showRateSelector:r=!0,isCheckout:c=!1,className:l})=>{const[u,m]=(0,s.useState)(!1),{shippingAddress:g,cartHasCalculatedShipping:h,shippingRates:_,isLoadingRates:b}=(0,E.V)(),f=(0,L.mH)(t),k=(0,L.HI)(_)||f>0,A=o&&u,R=(0,p.useSelect)((e=>e(d.CHECKOUT_STORE_KEY).prefersCollection())),N=_.flatMap((e=>e.shipping_rates.filter((e=>R&&(0,w.J_)(e)&&e.selected||!R&&e.selected)).flatMap((e=>e.name)))),S=(0,y.KY)(g),I=(0,L.R4)(k,R,_),O=0===f?(0,n.createElement)("strong",null,(0,a.__)("Free","woocommerce")):f;return(0,n.createElement)("div",{className:(0,v.A)("wc-block-components-totals-shipping",l)},(0,n.createElement)(i.TotalsItem,{label:(0,a.__)("Shipping","woocommerce"),value:!I&&h?O:(!S||c)&&(0,n.createElement)(D,{showCalculator:o,isCheckout:c,isShippingCalculatorOpen:u,setIsShippingCalculatorOpen:m}),description:!I&&h||S&&!c?(0,n.createElement)(n.Fragment,null,(0,n.createElement)(C,{selectedShippingRates:N}),(0,n.createElement)(K,{shippingAddress:g,showCalculator:o,isShippingCalculatorOpen:u,setIsShippingCalculatorOpen:m})):null,currency:e}),A&&(0,n.createElement)(x,{onUpdate:()=>{m(!1)},onCancel:()=>{m(!1)}}),r&&h&&!A&&(0,n.createElement)(U,{hasRates:k,shippingRates:_,isLoadingRates:b,isAddressComplete:S}))}},5416:(e,t,o)=>{"use strict";o.d(t,{A:()=>c});var n=o(1609),a=o(7723),s=o(851),r=o(4656);o(8375);const c=({children:e,className:t,screenReaderLabel:o,showSpinner:c=!1,isLoading:l=!0})=>(0,n.createElement)("div",{className:(0,s.A)(t,{"wc-block-components-loading-mask":l})},l&&c&&(0,n.createElement)(r.Spinner,null),(0,n.createElement)("div",{className:(0,s.A)({"wc-block-components-loading-mask__children":l}),"aria-hidden":l},e),l&&(0,n.createElement)("span",{className:"screen-reader-text"},o||(0,a.__)("Loading…","woocommerce")))},6988:(e,t,o)=>{"use strict";o.d(t,{A:()=>d});var n=o(1609),a=o(851),s=o(7723),r=o(7104),c=o(1208),l=(o(9345),o(9113)),i=o(4845),p=o(7666);const d=({className:e,status:t="default",children:o,spokenMessage:d=o,onRemove:u=(()=>{}),isDismissible:m=!0,politeness:g=(0,l.A)(t),summary:h})=>((0,p.$)(d,g),(0,n.createElement)("div",{className:(0,a.A)(e,"wc-block-components-notice-banner","is-"+t,{"is-dismissible":m})},(0,n.createElement)(r.A,{icon:(0,l.c)(t)}),(0,n.createElement)("div",{className:"wc-block-components-notice-banner__content"},h&&(0,n.createElement)("p",{className:"wc-block-components-notice-banner__summary"},h),o),!!m&&(0,n.createElement)(i.A,{className:"wc-block-components-notice-banner__dismiss","aria-label":(0,s.__)("Dismiss this notice","woocommerce"),onClick:e=>{"function"==typeof(null==e?void 0:e.preventDefault)&&e.preventDefault&&e.preventDefault(),u()},removeTextWrap:!0},(0,n.createElement)(r.A,{icon:c.A}))))},9113:(e,t,o)=>{"use strict";o.d(t,{A:()=>r,c:()=>c});var n=o(2900),a=o(2478),s=o(8306);const r=e=>{switch(e){case"success":case"warning":case"info":case"default":return"polite";default:return"assertive"}},c=e=>{switch(e){case"success":return n.A;case"warning":case"info":case"error":return a.A;default:return s.A}}},3551:(e,t,o)=>{"use strict";o.d(t,{k:()=>i});var n=o(7723),a=o(7143),s=o(7594),r=o(8537),c=o(1e3),l=o(8605);const i=(e="")=>{const{cartCoupons:t,cartIsLoading:o}=(0,l.V)(),{createErrorNotice:i}=(0,a.useDispatch)("core/notices"),{createNotice:p}=(0,a.useDispatch)("core/notices"),{setValidationErrors:d}=(0,a.useDispatch)(s.VALIDATION_STORE_KEY),{isApplyingCoupon:u,isRemovingCoupon:m}=(0,a.useSelect)((e=>{const t=e(s.CART_STORE_KEY);return{isApplyingCoupon:t.isApplyingCoupon(),isRemovingCoupon:t.isRemovingCoupon()}}),[i,p]),{applyCoupon:g,removeCoupon:h}=(0,a.useDispatch)(s.CART_STORE_KEY),_=(0,a.useSelect)((e=>e(s.CHECKOUT_STORE_KEY).getOrderId()));return{appliedCoupons:t,isLoading:o,applyCoupon:t=>g(t).then((()=>((0,c.applyCheckoutFilter)({filterName:"showApplyCouponNotice",defaultValue:!0,arg:{couponCode:t,context:e}})&&p("info",(0,n.sprintf)(/* translators: %s coupon code. */ /* translators: %s coupon code. */
(0,n.__)('Coupon code "%s" has been applied to your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e}),Promise.resolve(!0)))).catch((e=>{const t=(e=>{var t,o,n,a;return _&&_>0&&null!=e&&null!==(t=e.data)&&void 0!==t&&null!==(o=t.details)&&void 0!==o&&o.checkout?e.data.details.checkout:null!=e&&null!==(n=e.data)&&void 0!==n&&null!==(a=n.details)&&void 0!==a&&a.cart?e.data.details.cart:e.message})(e);return d({coupon:{message:(0,r.decodeEntities)(t),hidden:!1}}),Promise.resolve(!1)})),removeCoupon:t=>h(t).then((()=>((0,c.applyCheckoutFilter)({filterName:"showRemoveCouponNotice",defaultValue:!0,arg:{couponCode:t,context:e}})&&p("info",(0,n.sprintf)(/* translators: %s coupon code. */ /* translators: %s coupon code. */
(0,n.__)('Coupon code "%s" has been removed from your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e}),Promise.resolve(!0)))).catch((t=>(i(t.message,{id:"coupon-form",context:e}),Promise.resolve(!1)))),isApplyingCoupon:u,isRemovingCoupon:m}}},4107:(e,t,o)=>{"use strict";o.d(t,{q:()=>s});var n=o(7143),a=o(7594);const s=()=>{const{customerData:e,isInitialized:t}=(0,n.useSelect)((e=>{const t=e(a.CART_STORE_KEY);return{customerData:t.getCustomerData(),isInitialized:t.hasFinishedResolution("getCartData")}})),{setShippingAddress:o,setBillingAddress:s}=(0,n.useDispatch)(a.CART_STORE_KEY);return{isInitialized:t,billingAddress:e.billingAddress,shippingAddress:e.shippingAddress,setBillingAddress:s,setShippingAddress:o}}},1573:(e,t,o)=>{"use strict";o.d(t,{c:()=>r});var n=o(6087),a=o(923),s=o.n(a);function r(e){const t=(0,n.useRef)(e);return s()(e,t.current)||(t.current=e),t.current}},7666:(e,t,o)=>{"use strict";o.d(t,{$:()=>s});var n=o(6087),a=o(195);const s=(e,t)=>{const o="string"==typeof e?e:(0,n.renderToString)(e);(0,n.useEffect)((()=>{o&&(0,a.speak)(o,t)}),[o,t])}},1533:(e,t,o)=>{"use strict";o.r(t),o.d(t,{default:()=>d});var n=o(1609),a=o(6716),s=o(4656),r=o(8529),c=o(8605),l=o(3551),i=o(1e3);const p=()=>{const{extensions:e,receiveCart:t,...o}=(0,c.V)(),a={extensions:e,cart:o,context:"woocommerce/checkout"};return(0,n.createElement)(i.ExperimentalDiscountsMeta.Slot,{...a})},d=({className:e=""})=>{const{cartTotals:t,cartCoupons:o}=(0,c.V)(),{removeCoupon:i,isRemovingCoupon:d}=(0,l.k)("wc/checkout"),u=(0,r.getCurrencyFromPriceResponse)(t);return(0,n.createElement)(n.Fragment,null,(0,n.createElement)(s.TotalsWrapper,{className:e},(0,n.createElement)(a.n$,{cartCoupons:o,currency:u,isRemovingCoupon:d,removeCoupon:i,values:t})),(0,n.createElement)(p,null))}},8730:(e,t,o)=>{"use strict";o.d(t,{A:()=>a});var n=o(1609);o(7791);const a=()=>(0,n.createElement)("span",{className:"wc-block-components-spinner","aria-hidden":"true"})},2080:()=>{},7051:()=>{},2867:()=>{},3048:()=>{},265:()=>{},7919:()=>{},8399:()=>{},1707:()=>{},2931:()=>{},8375:()=>{},9345:()=>{},8824:()=>{},7791:()=>{}}]);