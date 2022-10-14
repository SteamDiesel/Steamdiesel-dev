<template>
	<div v-html="markdown"></div>
</template>

<script>
import { marked } from "marked";
export default {
	props: {
		content: String,
	},
	computed: {
		markdown() {
			// let clean = DOMPurify.sanitize();
			return marked(this.content);
		},
	},
};
</script>

<style scoped>
div :deep(h1) {
	font-size: 1.875rem;
	font-weight: 700;
	margin-bottom: 0.5rem;
	margin-block-start: 0.67em;
	margin-block-end: 0.67em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(h2) {
	font-size: 1.5rem;
	font-weight: 700;
	margin-bottom: 0.5rem;
	margin-block-start: 0.83em;
	margin-block-end: 0.83em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(h3) {
	font-size: 1.25rem;
	font-weight: 700;
	margin-bottom: 0.5rem;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(h4) {
	font-size: 1.125rem;
	font-weight: 700;
	margin-bottom: 0.5rem;
	margin-block-start: 1.33em;
	margin-block-end: 1.33em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(h5) {
	font-size: 1.125rem;
	font-weight: 600;
	margin-bottom: 0.5rem;
	margin-block-start: 1.67em;
	margin-block-end: 1.67em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(h6) {
	font-size: 1rem;
	font-weight: 600;
	margin-bottom: 0.5rem;
	margin-block-start: 1.67em;
	margin-block-end: 1.67em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(a) {
	color: rgb(37 99 235);
}
div :deep(p) {
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
div :deep(ul) {
	display: block;
	list-style-type: disc;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	padding-inline-start: 40px;
}
div :deep(dl, ol, ul) {
	margin-top: 0;
	margin-bottom: 1rem;
}
div :deep(ol) {
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	list-style-type: decimal;
	padding-inline-start: 40px;
}
div :deep(ol ol) {
	margin-block-start: 0px;
	margin-block-end: 0px;
	list-style-type: lower-alpha;
}
div :deep(li) {
	display: list-item;
	text-align: -webkit-match-parent;
}
div :deep(ul ul) {
	list-style-type: circle;
	margin-block-start: 0px;
	margin-block-end: 0px;
}
div :deep(pre) {
	border: 1px solid #dee2e6;
	padding-top: 10px;
	padding-right: 10px;
	padding-left: 10px;
	padding-bottom: 1px;
	margin-bottom: 20px;
	background: #f8f8f8;
	display: block;
	font-size: 87.5%;
	color: #212529;
}
div :deep(table) {
	width: 100%;
	margin-bottom: 1rem;
	color: #212529;

	border-collapse: collapse;
	border: 1px solid #dee2e6;
	text-indent: initial;
	border-spacing: 2px;
}
div :deep(thead) {
	display: table-header-group;
	vertical-align: middle;
	border-color: inherit;
}
div :deep(tr) {
	display: table-row;
	vertical-align: inherit;
	border-color: inherit;
}
div :deep(th) {
	border: 1px solid #dee2e6;
	padding: 0.75rem;
	border-bottom-width: 2px;
	vertical-align: bottom;
	border-bottom: 2px solid #dee2e6;
	text-align: -webkit-match-parent;
	font-weight: bold;
	display: table-cell;
}
div :deep(tbody) {
	display: table-row-group;
	vertical-align: middle;
	border-color: inherit;
}
div :deep(tr) {
	display: table-row;
	vertical-align: inherit;
	border-color: inherit;
}
div :deep(td) {
	border: 1px solid #dee2e6;
	padding: 0.75rem;
	vertical-align: top;
	display: table-cell;
	vertical-align: inherit;
}
</style>
