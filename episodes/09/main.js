Vue.component('message', {
	name: 'message',
	props: ['title', 'body'],
	template: `
	<article class="message" v-show="isVisible">
		<div class="message-header">
			{{ title}}
			<button class="delete" aria-label="delete" @click='isVisible = false'></button>
		</div>
		<div class="message-body">
			{{ body }}
		</div>
	</article>
	`,

	data(){
		return {
			isVisible: true
		}
	},
	methods: {
		
	}
})

new Vue({
	el: '#root'
})