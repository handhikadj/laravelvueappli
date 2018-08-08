<template>
	<transition leave-active-class="animated fadeOut">
		<div class="showboxdelete" id="showboxdelete" key="1">
			<div class="loaderdelete" key="2">
				<svg class="circular2" viewBox="25 25 50 50">
					<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
				</svg>
			</div>
		</div>
	</transition>
</template>

<script>
	export default {

		name: 'LoaderComponent',

		data () {
			return {

			}
		}
	}
</script>

<style lang="css" scoped>
</style>