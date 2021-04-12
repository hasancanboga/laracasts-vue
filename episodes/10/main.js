Vue.component('modal', {
	template: `
	<div class="modal is-active">
		<div class="modal-background"></div>
		<div class="modal-content">
			<div class="box">
				<slot></slot>
			</div>
		</div>
		<button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button> 
		<!-- This is a custom event, it's because the showModal is not in the scope of this component, 
		but its in the scope app. so we emit a custom 'close' notification to app.
		the modal catches it with @close on the main page. -->
	</div>
	`,

})

new Vue({
	el: '#root',
	data() {
		return {
			showModal: false,
		}
	},
	methods: {

	}
})