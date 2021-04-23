<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>

<body>
    <div id="app" class="container">
        {{-- @include ('projects.list') --}}
        <form action="projects" method='POST'>

            <div class="control">
                <label for="name" class='label'>Project Name:</label>
                <input type="text" id='name' name="name" class="input" v-model="name">
            </div>
            <br>
            <div class="control">
                <label for="description" class='label'>Project Description:</label>
                <input type="text" id='description' name="description" class="input" v-model="description">
            </div>
            <br>
            <div class="control">
                <button class="button is-primary">Create</button>
            </div>

            <script src="https://unpkg.com/vue@2.6.12"></script>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="/js/app.js"></script>

        </form>

    </div>

</body>

</html>