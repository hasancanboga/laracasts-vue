<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<!-- <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>  -->
	<script src="https://unpkg.com/vue@2.6.12"></script>

</head>

<body style='background-color: #222; color: white'>

	<div id='root'>
		<!-- Basic Data binding, Lists, Event Listeners -->

		<ul>
			<li v-for='name in names' v-text='name'></li>
		</ul>

		<input id='i1' type="text" v-model='newName'>
		<button @click="addName">Add Name</button>

	</div>

	<script>
		new Vue({
			el: '#root',
			data() {
				return {
					newName: '',
					names: ['Joe', 'Mary', 'Jane', 'Jack']
				}
			},
			methods: {
				addName() {
					this.names.push(this.newName)
					this.newName = ''
				}
			},
			mounted() {

			}
		})
	</script>

</body>

</html>