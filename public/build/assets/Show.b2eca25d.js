import{_ as c}from"./AppLayout.2a18c010.js";import p from"./DeleteUserForm.c2d81f8e.js";import l from"./LogoutOtherBrowserSessionsForm.e0b24afe.js";import{S as s}from"./SectionBorder.75b6406e.js";import f from"./TwoFactorAuthenticationForm.bcdba56c.js";import u from"./UpdatePasswordForm.ec89ca9f.js";import d from"./UpdateProfileInformationForm.7a364bb0.js";import{o,c as _,w as n,a as i,d as r,b as t,e as a,F as h}from"./app.92ec4b42.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./Modal.5ae960ed.js";import"./SectionTitle.09cf7dd7.js";import"./DangerButton.d3d57f96.js";import"./DialogModal.3d19f3f6.js";import"./TextInput.7f9f3fb1.js";import"./SecondaryButton.ab913cb6.js";import"./ActionMessage.b905df4f.js";import"./PrimaryButton.d7b32ce4.js";import"./InputLabel.67f17edd.js";import"./FormSection.9f0ffe6d.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),_(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(d,{user:e.$page.props.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};