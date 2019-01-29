@extends('layout')
@section('rootContent')

    <task>Go to Store</task>
    <task>Go to School</task>
    <task>Go to Tina</task>
    <task>Go to Mall</task>
    <task>Go to Bank</task>

    <div id="components-demo">
        <button-counter></button-counter>
    </div>
@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {

            },

            methods: {

            }
        });

    </script>

@endsection
