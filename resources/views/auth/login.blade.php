<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('vendor/ses-ui/css/ses-ui.css') }}">
    <script src="{{ asset('vendor/ses-ui/js/ses-ui.js') }}" defer></script>

</head>

<body>

    <div class="container form-mobile-login" id="container">
        <div class="form-container sign-up">

            <x-form-ses type="forgot" route="{{ route('password.email') }}" :errors="$errors" />

        </div>
        <div class="form-container sign-in">

            <x-form-ses type="login" route="{{ route('login') }}" :errors="$errors" />

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">

                    <x-form-logo-ses type="reset" />

                </div>
                <div class="toggle-panel toggle-right">

                    <x-form-logo-ses type="login" />

                </div>
            </div>
        </div>
    </div>

</body>

</html>
