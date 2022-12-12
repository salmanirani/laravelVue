# laravelVue
laravel vue and send variable to component

Installing vue on laravel 9 and how to send variable to view component.

LARAVEL VUE
```
composer create-project laravel/laravel laravel-vue

composer require laravel/ui

php artisan ui vue

npm install && npm run dev
```

welcome.vue
 


```
<template>
<h1>My app</h1>
<!--    this is my first app-->
<!--    {{// userId}}-->
</template>
<script>
export default {
   // props: ['userId'],
   mounted () {
       // Do something useful with the data in the template
       // console.dir(this.userId)
   }
}
</script>

```


home.php



```
@vite(['resources/js/app.js','resources/css/app.css'])

<div id="app">
<example-component :brands="'my send variable2'"></example-component>
</div>
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
```


app.js:

```
import { createApp } from 'vue';
const app = createApp({});
import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);
app.mount('#app');


```
