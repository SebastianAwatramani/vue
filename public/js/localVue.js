Vue.component('task', {
    template: '<li><slot></slot></li>',
//For regular view instances, you can set data equal to an object, but for componenets you can't do that because it's not linked to any single instance.
    //So instead make data equal to a function that returns an object
    data: function() {
        return {
            message: 'foobar'
        };
    }
});

// Define a new component called button-counter
Vue.component('button-counter', {
    data: function () {
        return {
            count: 0,
            message: 'foobar'
        }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
})
