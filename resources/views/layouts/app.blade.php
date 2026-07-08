<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Francigena Ultra Marathon' }}</title>
    <meta name="description" content="{{ $description ?? 'Walking Francigena Ultra Marathon: cammino non competitivo da Siena ad Acquapendente, con tratte dai 15 ai 130 km.' }}">
    @isset($canonical)
        <link rel="canonical" href="{{ $canonical }}">
    @endisset
    <link rel="icon" type="image/jpeg" href="/images/francigena/logo-francigena.jpg">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Francigena Ultra Marathon' }}">
    <meta property="og:description" content="{{ $description ?? 'Walking Francigena Ultra Marathon: cammino non competitivo da Siena ad Acquapendente, con tratte dai 15 ai 130 km.' }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    <meta property="og:image" content="https://www.francigenaultramarathon.com/wp-content/uploads/2026/03/Bozza-aggiornamento-sito-WFU-2025-13-2048x1151.png">
    <meta property="og:locale" content="it_IT">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Francigena Ultra Marathon' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Walking Francigena Ultra Marathon: cammino non competitivo da Siena ad Acquapendente, con tratte dai 15 ai 130 km.' }}">
    <meta name="twitter:image" content="https://www.francigenaultramarathon.com/wp-content/uploads/2026/03/Bozza-aggiornamento-sito-WFU-2025-13-2048x1151.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style.css?v=62">
    <link rel="stylesheet" href="/iscritti-home.css?v=1.3">
    @stack('head')
</head>

<body class="has-topbar sgranar-theme {{ $bodyClass ?? '' }}">
    <div class="site-header">        
        @include('partials.navbar')
    </div>

    @yield('content')

    @include('partials.footer')
    @include('partials.cookie-banner')

    @stack('scripts')
</body>
</html>
