Vue.component('task', {
    template: '<li><slot></slot></li>',
//For regular view instances, you can set data equal to an object, but for componenets you can't do that because it's not linked to any single instance.
    //So instead make data equal to a function that returns an object
    data: function () {
        return {
            message: 'foobar'
        };
    }
});

Vue.component('task-list', {
    //This needs to be wrapped in a div
    //When you have a template in a component, it always needs to have a single root element
    //NOTE THAT THIS IS BUILDING OFF OF THE TASK COMPONENT.  IT'S NOT COMPOSED OF LIS, IT'S COMPOSED OF TASKS
    template: '<ul><task v-for="task in tasks">Description: {{task.description}}</task></ul>',
    data() {
        return {
            tasks: [
                {description: 'Go to the store', completed: true},
                {description: 'Finish Screencase', completed: false},
                {description: 'Go to the Mall', completed: false},
                {description: 'Eat Tina\'s ass', completed: false},
                {description: 'Watch screencasts', completed: true},
            ]
        }
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
