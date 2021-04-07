<!DOCTYPE html>
<html lang="en"  style='background-color: #222; color: white;'>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<!-- <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>  -->
	<script src="https://unpkg.com/vue@2.6.12"></script> 

</head>
<body style='padding-top: 40px;'>

	<div id='root' class='container'>

		<modal v-if="showModal" @close="showModal = false">
			<p>Lorem ipsum</p>
		</modal>
		<button class='button' @click='showModal = true'>Show Modal</button> 
		<!-- close is a custom event here. triggered by $emit()ing. -->
	</div>

	<script src='main.js'></script>

</body>
</html>