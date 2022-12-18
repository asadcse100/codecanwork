<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ env('APP_URL') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Zero Plus | zeroplus.world') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('templete') }}/src/assets/img/favicon.ico" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet"type="text/css" />
    <script src="{{ asset('templete') }}/layouts/vertical-dark-menu/loader.js"></script>

     <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('templete') }}/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">
</head>
