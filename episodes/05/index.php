<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<!-- <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>  -->
	<script src="https://unpkg.com/vue@2.6.12"></script>

	<style>
		.is-loading {
			background: red;
		}
	</style>

</head>

<body style='background-color: #222; color: white'>

	<div id='root'>
		<!-- Attribute and class binding -->

		<button @click='' :title='title'> Hover Over Me</button>
		<!--  @click is same as v-on:click, :title is same as v-bind:title -->
		<br>
		<button v-bind:class="{ 'is-loading': isLoading }" @click='toggleClass'>Toggle Me</button>
		<br>
		<button :disabled="disabled" @click='toggleDisabled'>Disable Me</button>

	</div>

	<script>
		var app = new Vue({
			el: '#root',
			data() {
				return {
					title: 'Now the title is being set through JavaScript',
					isLoading: false,
					disabled: false,
				}
			},
			methods: {
				toggleClass() {
					this.isLoading = true
				},
				toggleDisabled() {
					this.disabled = true
				},
			},
			mounted() {

			}
		})
	</script>

</body>

</html>