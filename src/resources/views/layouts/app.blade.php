<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="header__ttl">
                <a href="/" class="header__logo">
                    <h1>
                        <img src="{{ asset('storage/img/logo.svg') }}" alt="COACHTECH Logo">
                    </h1>
                </a>
            </div>
        </div>
        <div class="header__bottom">
        </div>
        @endif
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>