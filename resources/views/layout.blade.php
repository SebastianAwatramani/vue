

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Testing</title>
    <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}">

</head>
<body>

<div id="root">
    @yield('rootContent')
</div>

<script src="{{ URL::asset('js/vue.js') }}"></script>
<script src="{{ URL::asset('js/localVue.js') }}"></script>

@yield('script')



</body>
</html>
