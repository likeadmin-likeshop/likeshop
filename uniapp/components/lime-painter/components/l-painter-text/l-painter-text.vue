<template>
	<text style="opacity: 0;"><slot/></text>
</template>

<script>
	import {parent, children} from '../common/relation';
	export default {
		name: 'lime-painter-text',
		mixins:[children('painter')],
		props: {
			css: [String, Object],
			text: [String, Number],
			replace: Object,
		},
		data() {
			return {
				type: 'text',
				el: {
					css: {},
					text: null
				},
			}
		}
	}
</script>

<style>
</style>
