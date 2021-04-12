<!DOCTYPE html>
<html lang="en" style='background-color: #222;'>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<!-- <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>  -->
	<script src="https://unpkg.com/vue@2.6.12"></script>

</head>

<body style='color: white; padding-top: 40px;'>

	<div id='root' class='container'>

		<modal>
			<!-- why use template instead of div: template element gets stripped so we wont see a 'div' inside a '<p>' when inspecting element.
				can do this in footer too if necessary -->
			<template slot='header'> asdasd</template>

			this content will appear where default slot is. no need to give it a name. header and footer slots are named.

			<div slot='footer'>
				<button class="button is-success">Save changes</button>
				<button class="button">Cancel</button>
			</div>

		</modal>

	</div>

	<script src='main.js'></script>

</body>

</html>