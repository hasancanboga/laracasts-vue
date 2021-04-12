new Vue({
	el: '#app',
	data() {
		return {
			skills: []
		}
	},
	mounted() {
		// Make an ajax request to our server for render - /skills

		axios.get('skills').then(response => this.skills = response.data)
	}


})