<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('css/auth.css')}}" />
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" />
    <title>{{ config('app.name') }} {{ '| ' . $title ?? ''}}</title>
    <link rel="shortcut icon" href="{{asset('images/orange.png')}}" />
</head>