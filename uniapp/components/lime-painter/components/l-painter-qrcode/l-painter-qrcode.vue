<template>
	<view></view>
</template>

<script>
	import {parent, children} from '../common/relation';
	export default {
		name: 'lime-painter-qrcode',
		mixins:[children('painter')],
		props: {
			css: [String, Object],
			text: String
		},
		data() {
			return {
				type: 'qrcode',
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
