<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/js/app.js','resources/css/app.css'])

    </head>
    <body >
    test
    <div id="app">
    <example-component :brands="'my send variabledadsa3'"></example-component>
    </div>
    </body>
</html>
<script>
    import ExampleComponent from "../js/components/ExampleComponent";
    export default {
        data:function (){
            return {
            }
        },
        components: {ExampleComponent}
    }
</script>
