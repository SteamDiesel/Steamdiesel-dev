import{_ as i}from"./AppLayout.48ec7666.js";import o from"./DeleteTeamForm.df969b4e.js";import{S as r}from"./SectionBorder.4dfebccb.js";import l from"./TeamMemberManager.26b96b97.js";import n from"./UpdateTeamNameForm.7a1607ec.js";import{o as m,c,w as s,a,b as t,d as p,F as d,e as f}from"./app.e9321fcd.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./Modal.fe332dab.js";import"./SectionTitle.ccce89b2.js";import"./ConfirmationModal.c3f8adf3.js";import"./DangerButton.920c8f6d.js";import"./SecondaryButton.ec478b96.js";import"./ActionMessage.c48f0b72.js";import"./DialogModal.66822a99.js";import"./FormSection.cdfe4bba.js";import"./TextInput.50fc3e8a.js";import"./InputLabel.956bf659.js";import"./PrimaryButton.364656b0.js";const u=a("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Team Settings ",-1),x={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},D={__name:"Show",props:{team:Object,availableRoles:Array,permissions:Object},setup(e){return(b,h)=>(m(),c(i,{title:"Team Settings"},{header:s(()=>[u]),default:s(()=>[a("div",null,[a("div",x,[t(n,{team:e.team,permissions:e.permissions},null,8,["team","permissions"]),t(l,{class:"mt-10 sm:mt-0",team:e.team,"available-roles":e.availableRoles,"user-permissions":e.permissions},null,8,["team","available-roles","user-permissions"]),e.permissions.canDeleteTeam&&!e.team.personal_team?(m(),p(d,{key:0},[t(r),t(o,{class:"mt-10 sm:mt-0",team:e.team},null,8,["team"])],64)):f("",!0)])])]),_:1}))}};export{D as default};
