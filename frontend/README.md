# VueJs

> how to make a powerful frontend with data-binding

You can find the VueJs doc [here](https://vuejs.org/v2/guide/)
And the style guide [here](https://vuejs.org/v2/style-guide/)

## Project setup
```
npm install
```

## Compiles and hot-reloads for development
```
npm run serve
```

## Compiles and minifies for production
```
npm run build
```

## Structure : 

- src
    - assets : images, fonts...
    - components : VueJs global components (not specific to any page)
    - router : our routes
    - App.vue : the main component wrapping our VueJS App
    - main.js : VueJs init

- index.html : html page with an #app div that wraps our VueJs instance
- package.json : project dependencies, install others with *npm install --save myDependency*

## How it works

VueJs works with components that are structured like this :

```vue
<template>
    <!-- the html template of our component-->
    <!-- there is always only one div at the component root -->
    <div class="my-component">
        <!-- we use our component's variables like that -->
        <!-- It can be a variable from the props, from data or a computed property -->
        <h1>{{ title }}</h1>
        
        <p>{{ message }}</p>
      
        <!-- If we want to loop through arrays, we use the v-for directive -->
        <div v-for="item in items" class="item">
            <!-- We now get the current item of our loop and all its properties if it's an object -->
            <!-- if we want to use a property is an html attribute, we put ':' just before -->
            <span :id="item.id">{{ item.name }}</span>
            
            <!-- We can display or hide things with v-if ou v-show (v-show doesn't remove the tag but acts like 'display:hidden' on the element -->
            <div v-if="item.displayed">
                <p>I am displaying this text if the value is true</p>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: 'hello',
        data() {
            return {
                //the reactive variables of our component
                title: 'Welcome !',
                items: [
                    {
                        id: 0,
                        name: "item1",
                        displayed: true
                    },
                    {
                        id: 1,
                        name: "item2",
                        displayed: false
                    }
                ],
                number: 2
            }
        },
        props: {
            //here we put variables that are passed by the parent
            //in this way we can use our component multiple times on our page but change the message displayed
            message: {}
        },
        computed: {
            //here we put all the variables that compute or filter data
            //we have access to our component's variable with the `this`keyword
            numberTimesFour() {
                return this.number * 4;
            }
        },
        methods: {
            //our component's methods
            incrementNumber() {
                this.number++;
            }
        },
        mounted() {
            //function called when the component is loaded and mounted on our page
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

    .item {
        color:red;
    }

</style>
```