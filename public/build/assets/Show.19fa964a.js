import{_ as i}from"./AppLayout.7f518708.js";import o from"./DeleteTeamForm.67288587.js";import{S as r}from"./SectionBorder.46ea7b7b.js";import l from"./TeamMemberManager.a311880e.js";import n from"./UpdateTeamNameForm.368d9677.js";import{o as m,c,w as s,a,b as t,d as p,F as d,e as f}from"./app.69ebcaa6.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./Modal.259f68f4.js";import"./SectionTitle.f4a18e11.js";import"./ConfirmationModal.5327154d.js";import"./DangerButton.a8bf67c7.js";import"./SecondaryButton.8727709a.js";import"./ActionMessage.e831c402.js";import"./DialogModal.eeb2d938.js";import"./FormSection.0fd9e06f.js";import"./TextInput.d4580988.js";import"./InputLabel.3ffb985c.js";import"./PrimaryButton.1cd250a3.js";const u=a("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Team Settings ",-1),x={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},D={__name:"Show",props:{team:Object,availableRoles:Array,permissions:Object},setup(e){return(b,h)=>(m(),c(i,{title:"Team Settings"},{header:s(()=>[u]),default:s(()=>[a("div",null,[a("div",x,[t(n,{team:e.team,permissions:e.permissions},null,8,["team","permissions"]),t(l,{class:"mt-10 sm:mt-0",team:e.team,"available-roles":e.availableRoles,"user-permissions":e.permissions},null,8,["team","available-roles","user-permissions"]),e.permissions.canDeleteTeam&&!e.team.personal_team?(m(),p(d,{key:0},[t(r),t(o,{class:"mt-10 sm:mt-0",team:e.team},null,8,["team"])],64)):f("",!0)])])]),_:1}))}};export{D as default};
