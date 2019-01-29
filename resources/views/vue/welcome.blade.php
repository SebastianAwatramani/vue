@extends('layout')

@section('rootContent')
    <label for="input">Text</label>
    <input type="text" id="input" v-model="message">

    <p>The value of the input is: @{{ message }}</p>

@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {
                message: "Hello World"
            }
        });

    </script>

@endsection
