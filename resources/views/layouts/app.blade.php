<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Maunìk Trail' }}</title>
    <meta name="description" content="{{ $description ?? 'Maunìk Trail: corsa in montagna nella Val Grivò, tra Faedis e Attimis.' }}">
    @isset($canonical)
        <link rel="canonical" href="{{ $canonical }}">
    @endisset
    <link rel="icon" type="image/avif" href="/images/maunik/logo.avif">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Maunìk Trail' }}">
    <meta property="og:description" content="{{ $description ?? 'Maunìk Trail: corsa in montagna nella Val Grivò, tra Faedis e Attimis.' }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    <meta property="og:image" content="https://static.wixstatic.com/media/7f418a_af22e500d2214084bc087d3ab8a8f556~mv2.jpg">
    <meta property="og:locale" content="it_IT">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Maunìk Trail' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Maunìk Trail: corsa in montagna nella Val Grivò, tra Faedis e Attimis.' }}">
    <meta name="twitter:image" content="https://static.wixstatic.com/media/7f418a_af22e500d2214084bc087d3ab8a8f556~mv2.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style.css?v=62">
    <link rel="stylesheet" href="/iscritti-home.css?v=1.3">
    @stack('head')
</head>

<body class="maunik-theme {{ $bodyClass ?? '' }}">
    <div class="site-header">        
        @include('partials.navbar')
    </div>

    @yield('content')

    @include('partials.footer')
    @include('partials.cookie-banner')

    @stack('scripts')
</body>
</html>
