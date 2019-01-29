@extends('layout')
@section('rootContent')
    <h1 v-text="new Date()"></h1>
    <h1>@{{ message }}</h1>
    <h1>@{{ message.split('').reverse().join('') }}</h1>
    <h1>@{{ reversedMessage }}</h1>


    <h1>Using v-for to print all tasks from the data object</h1>
    <ul>
        <li v-for="task in tasks">@{{ task.description }}<input type="checkbox" v-model:checked="task.completed"></li>

    </ul>

    <h1>Using v-for and v-if to print the completed tasks from the data object</h1>
    <ul>
        <li v-for="task in tasks" v-text="task.description" v-if="task.completed"></li>


    </ul>

    <h1>But a better way to do it is to use a computed property</h1>
    <h2>Incomplete Tasks</h2>
    <ul>
        <li v-for="task in incompleteTasks" v-text="task.description"></li>
    </ul>

@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {
                message: "Hello World",
                tasks: [ //array of objects [{}]
                    {description: 'Go to the store', completed: true},
                    {description: 'Finish Screencase', completed: false},
                    {description: 'Go to the Mall', completed: false},
                    {description: 'Eat Tina\'s ass', completed: false},
                    {description: 'Watch screencasts', completed: true},

                ]
            },

            methods: { //Not using this.  Using v-model instead
                toggleComplete(task) {
                    task.completed ? task.completed = false : task.completed = true;
                }
            },

            computed: {
                // Computed tasks are cached, methods run every time
                reversedMessage() {
                    return this.message.split('').reverse().join('');
                },
                incompleteTasks() {
                     return this.tasks.filter(task => ! task.completed);
                }

            }


        });

    </script>

@endsection
