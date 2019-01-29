@extends('layout')

@section('rootContent')
    <ul>
        <li v-for="name in names" v-text="name"></li>
    </ul>

    <input type="text">
    <button v-on:click="">Add Name</button>

@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {
                names: ['Joe', 'Mary', 'Jane']
            }

            
        });

    </script>

@endsection
