@extends('layout')
@section('rootContent')
    <ul>
        <li v-for="name in names" v-text="name"></li>
    </ul>

    <input type="text" v-model="newName">
    {{--Can also use @ instead of v-on:click --}}
    <button @click="addName">Add Name</button>
    <button v-on:dblclick="addName">Add Name</button>
@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {
                newName: '',
                names: ['Joe', 'Mary', 'Jane']
            },

            methods: {
                addName() {
                    this.names.push(this.newName);
                    this.newName = '';
                }
            }


        });

    </script>

@endsection
