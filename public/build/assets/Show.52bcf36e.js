import{_ as i}from"./AppLayout.870d0dc8.js";import o from"./DeleteTeamForm.66217e49.js";import{S as r}from"./SectionBorder.75d14eb8.js";import l from"./TeamMemberManager.5d8903e4.js";import n from"./UpdateTeamNameForm.f7221500.js";import{o as m,c,w as s,a,b as t,d as p,F as d,e as f}from"./app.920f3548.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./Modal.261e8353.js";import"./SectionTitle.8fa0c0e1.js";import"./ConfirmationModal.1ef4e8c5.js";import"./DangerButton.c3cc51e0.js";import"./SecondaryButton.0a02e6be.js";import"./ActionMessage.2b987582.js";import"./DialogModal.e33a265e.js";import"./FormSection.47287635.js";import"./TextInput.213a688d.js";import"./InputLabel.dba9ed30.js";import"./PrimaryButton.f30f9e0b.js";const u=a("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Team Settings ",-1),x={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},D={__name:"Show",props:{team:Object,availableRoles:Array,permissions:Object},setup(e){return(b,h)=>(m(),c(i,{title:"Team Settings"},{header:s(()=>[u]),default:s(()=>[a("div",null,[a("div",x,[t(n,{team:e.team,permissions:e.permissions},null,8,["team","permissions"]),t(l,{class:"mt-10 sm:mt-0",team:e.team,"available-roles":e.availableRoles,"user-permissions":e.permissions},null,8,["team","available-roles","user-permissions"]),e.permissions.canDeleteTeam&&!e.team.personal_team?(m(),p(d,{key:0},[t(r),t(o,{class:"mt-10 sm:mt-0",team:e.team},null,8,["team"])],64)):f("",!0)])])]),_:1}))}};export{D as default};
