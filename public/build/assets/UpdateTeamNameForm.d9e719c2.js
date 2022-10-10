import{u as f,o as p,c as _,J as v,w as t,b as m,f as n,g as o,n as g,a as s,t as i}from"./app.ee7bfee9.js";import{_ as b}from"./ActionMessage.b17efdbf.js";import{_ as h}from"./FormSection.e13e82ad.js";import{_ as w,a as T}from"./TextInput.9b027ca7.js";import{_ as c}from"./InputLabel.2128326b.js";import{_ as x}from"./PrimaryButton.0b6f9621.js";import"./SectionTitle.e69d5ead.js";import"./_plugin-vue_export-helper.cdc0426e.js";const N={class:"col-span-6"},S={class:"flex items-center mt-2"},y=["src","alt"],V={class:"ml-4 leading-tight"},$={class:"text-gray-700 text-sm"},k={class:"col-span-6 sm:col-span-4"},q={__name:"UpdateTeamNameForm",props:{team:Object,permissions:Object},setup(e){const r=e,a=f({name:r.team.name}),d=()=>{a.put(route("teams.update",r.team),{errorBag:"updateTeamName",preserveScroll:!0})};return(B,l)=>(p(),_(h,{onSubmitted:d},v({title:t(()=>[n(" Team Name ")]),description:t(()=>[n(" The team's name and owner information. ")]),form:t(()=>[s("div",N,[m(c,{value:"Team Owner"}),s("div",S,[s("img",{class:"w-12 h-12 rounded-full object-cover",src:e.team.owner.profile_photo_url,alt:e.team.owner.name},null,8,y),s("div",V,[s("div",null,i(e.team.owner.name),1),s("div",$,i(e.team.owner.email),1)])])]),s("div",k,[m(c,{for:"name",value:"Team Name"}),m(w,{id:"name",modelValue:o(a).name,"onUpdate:modelValue":l[0]||(l[0]=u=>o(a).name=u),type:"text",class:"mt-1 block w-full",disabled:!e.permissions.canUpdateTeam},null,8,["modelValue","disabled"]),m(T,{message:o(a).errors.name,class:"mt-2"},null,8,["message"])])]),_:2},[e.permissions.canUpdateTeam?{name:"actions",fn:t(()=>[m(b,{on:o(a).recentlySuccessful,class:"mr-3"},{default:t(()=>[n(" Saved. ")]),_:1},8,["on"]),m(x,{class:g({"opacity-25":o(a).processing}),disabled:o(a).processing},{default:t(()=>[n(" Save ")]),_:1},8,["class","disabled"])]),key:"0"}:void 0]),1024))}};export{q as default};
