@extends('layout')
@section('rootContent')
    {{--v-bind: bind the title attibute to whatever's in our data object called title--}}
    <button v-bind:title="title">Hover Over Me</button>
    {{--Same thing but with the : shorthand--}}
    <button :title="title">Hover Over Me</button>

    <br>
        {{--bind class name is-loading to data object isLoading . AKA use class is-loading if isLoading is true--}}
    <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Click me</button>

    <br>
    {{--Bind disabled attribute to data object isDisabled, and toggle disabled with toggleDisabled()--}}
    <button :disabled="isDisabled" @click="toggleDisabled">Disabled?</button>

@endsection

@section('script')

    <script>

        // Create a view instance, specify some data, BIND it to some element
        new Vue({
            el: '#root',
            data: {
                title: "Now the Title is being set through JS",
                isLoading: false,
                isDisabled: false
            },

            methods: {
                toggleClass() {
                    this.isLoading = true;
                },
                toggleDisabled() {
                    this.isDisabled = true;
                }
            }
        });

    </script>

@endsection
