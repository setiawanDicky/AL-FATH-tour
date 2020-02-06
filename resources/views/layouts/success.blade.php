    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        @stack('prepend-style')
        @include('includes.app.style')
        @stack('addon-style')
    </head>
    <body>
        
        @include('includes.app.navbar-alternate')

        @yield('content')

        @include('includes.app.script')
        @stack('prepend-script')
        @stack('addon-script')
    </body>

    </html>