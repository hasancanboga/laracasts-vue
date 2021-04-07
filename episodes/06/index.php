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
		<!-- Computed Properties -->

		<h3>
			{{ reversedMessage }}
		</h3>

		<br>

		<h2>All Tasks</h2>

		<ul>
			<li v-for="task in tasks"> {{task.description}} </li>	
		</ul>

		<h2>Completed Tasks</h2>  <!-- using v-for and v-if (Wrong way) -->
		<ul>
			<template v-for="task in tasks">
				<li v-if="task.completed"> {{task.description}}  <button @click="task.completed = false">mark incomplete</button></li>	
			</template>
		</ul>

		<h2>Incomplete Tasks</h2>  <!-- using computed properties (correct way) -->
		<ul>
			<li v-for="task in incompleteTasks"> {{task.description}}  <button @click="completeTask(task)">mark complete</button></li>	
		</ul>


	</div>

	<script>
		
		new Vue({
			el: '#root',
			data() {
				return {
					message: 'Hello World',
					tasks: [
					{ description: 'Go to the store', completed: true},
					{ description: 'Finish screencast', completed: false},
					{ description: 'Make donation', completed: false},
					{ description: 'Clear inbox', completed: false},
					{ description: 'Make dinner', completed: false},
					{ description: 'Clean room', completed: true},
					]
				}
			}, 
			methods: {
				completeTask(task){
					task.completed = true
				}
			},
			computed:{
				reversedMessage(){
					return this.message.split('').reverse().join('')
				},
				incompleteTasks(){
					// return this.tasks.filter(task => !task.completed); // ES6 Syntax

					return this.tasks.filter(function(task){
						return !task.completed;
					}); // ES5 Syntax
				}
				// NOW GO TO THE CONSOLE, and type this: app.tasks[0].completed = false
				// the first task should jump from completed to incomplete.
			},

			mounted(){

			}
		})

	</script>

</body>
</html>