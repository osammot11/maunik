@extends('layouts.app')

@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "Walking Francigena Ultra Marathon",
        "url": "https://www.francigenaultramarathon.com/",
        "inLanguage": "it"
    }
    </script>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SportsEvent",
        "name": "Walking Francigena Ultra Marathon 2026",
        "startDate": "2026-10-10T09:00:00+02:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "url": "https://www.francigenaultramarathon.com/",
        "image": "https://www.francigenaultramarathon.com/wp-content/uploads/2026/03/Bozza-aggiornamento-sito-WFU-2025-13-2048x1151.png",
        "description": "Cammino non competitivo lungo la Via Francigena, da Siena ad Acquapendente, con tratte dai 15 ai 130 km.",
        "location": {
            "@@type": "Place",
            "name": "Via Francigena, da Siena ad Acquapendente",
            "address": {
                "@@type": "PostalAddress",
                "addressLocality": "Siena",
                "addressRegion": "Toscana e Lazio",
                "addressCountry": "IT"
            }
        },
        "organizer": {
            "@@type": "Organization",
            "name": "A.S.D. GTS Outdoor",
            "url": "https://www.francigenaultramarathon.com/"
        }
    }
    </script>
@endpush

@section('content')
    <div class="home-hero">
        <section class="hero-height center-text light-color center-items">
            <h3 class="primary-color">10/11 ottobre 2026</h3>
            <h1 class="top-margin-large hero-title">FRANCIGENA ULTRA MARATHON</h1>
            <p class="top-margin-large hero-copy">L’esperienza oltre il cammino, da Siena ad Acquapendente.<br>Scegli la tua tratta, dai 15 ai 130 km.</p>
            <a href="/iscrizione" class="btn top-margin-xl">Iscriviti</a>
        </section>

        <section>
            <div class="countdown" id="countdown" aria-label="Conto alla rovescia per la Francigena Ultra Marathon 2026">
                <div class="time-box">
                    <h2 id="days">00</h2>
                    <small>Giorni</small>
                </div>
                <div class="time-box">
                    <h2 id="hours">00</h2>
                    <small>Ore</small>
                </div>
                <div class="time-box">
                    <h2 id="minutes">00</h2>
                    <small>Minuti</small>
                </div>
                <div class="time-box">
                    <h2 id="seconds">00</h2>
                    <small>Secondi</small>
                </div>
            </div>
        </section>
    </div>

    <main>
        <section class="grid-2 intro-section">
            <div>
                <h2>Il tuo cammino. La tua storia.</h2>
                <p class="top-margin-large">
                    La Walking Francigena Ultra Marathon unisce il piacere del cammino a lungo raggio con la scoperta di territori ricchi di storia e bellezza lungo la Via Francigena.
                </p>
                <p class="top-margin-large">
                    Un evento non competitivo, aperto a camminatori con esperienze diverse: dalla tratta breve alla grande sfida, da Siena ad Acquapendente.
                </p>
            </div>
            <div class="card">
                <div class="hero-top">
                    <img src="/images/francigena/logo-francigena.jpg" alt="Logo Walking Francigena Ultra Marathon" class="pellegrino" id="pellegrino">

                    <div class="titolo-box center-text" id="titoloBox">
                        <div class="numero iscritti-title">{{ $totalIscritti }}</div>
                        <div class="label iscritti-subtitle">iscritti</div>
                    </div>
                </div>
                <p class="iscritti-paragraph top-margin-large center-text">
                    Centinaia di persone scelgono ogni anno di mettersi in cammino. Se vuoi esserci, <a class="main-text-color" href="/iscrizione">iscriviti</a>.
                </p>
            </div>
        </section>

        <section id="percorsi">
            <h2 class="center-text">Scegli la tua tratta</h2>
            <div class="grid-3 top-margin-xl">
                <div class="card route-card stack-mid">
                    <span class="route-badge route-rosa">130 km</span>
                    <h3>Grande Sfida</h3>
                    <p>Da Siena ad Acquapendente, giorno e notte: la proposta per chi vuole misurarsi con l’intero orizzonte della Via Francigena.</p>
                    <a href="/iscrizione?percorso=Grande%20Sfida%20130%20km" class="btn mobile-fullwidth">Iscriviti</a>
                </div>

                <div class="card route-card stack-mid">
                    <span class="route-badge route-bianca">Intermedio</span>
                    <h3>Tratte Intermedie</h3>
                    <p>Percorsi pensati per vivere distanza, borghi e paesaggio con una sfida importante ma accessibile a camminatori allenati.</p>
                    <a href="/iscrizione?percorso=Tratte%20intermedie" class="btn mobile-fullwidth">Iscriviti</a>
                </div>

                <div class="card route-card stack-mid">
                    <span class="route-badge route-gialla">15 km+</span>
                    <h3>Tratte Brevi</h3>
                    <p>Il modo più semplice per entrare nell’esperienza WFU: cammino, socialità e scoperta della Francigena a passo sostenibile.</p>
                    <a href="/iscrizione?percorso=Tratte%20brevi" class="btn mobile-fullwidth">Iscriviti</a>
                </div>
            </div>
        </section>

        <section class="sgranar-band">
            <div>
                <h2>Dieci anni di passi, sfide ed emozioni</h2>
                <p class="top-margin-large">
                    Una manifestazione che attraversa territori, borghi e paesaggi mozzafiato, portando camminatori e comunità dentro una storia da vivere e raccontare.
                </p>
            </div>
            <a href="/iscrizione" class="btn btn-2 top-margin-large mobile-fullwidth">Accetto la sfida</a>
        </section>

        <section id="programma">
            <h2 class="center-text">L’esperienza WFU</h2>
            <div class="grid-3 top-margin-xl">
                <div class="card program-card">
                    <h3>Sport</h3>
                    <ul class="program-list">
                        <li><strong>Cammino</strong> Tratte di diversa distanza, dai 15 ai 130 km.</li>
                        <li><strong>Ritmo</strong> Una sfida personale, non competitiva.</li>
                        <li><strong>Resistenza</strong> Percorsi per livelli facile, intermedio ed esperto.</li>
                    </ul>
                </div>

                <div class="card program-card">
                    <h3>Natura</h3>
                    <ul class="program-list">
                        <li><strong>Paesaggio</strong> Colline, strade bianche e orizzonti della Francigena.</li>
                        <li><strong>Attraversamento</strong> Un itinerario tra Toscana e Lazio.</li>
                        <li><strong>Passo lento</strong> Il territorio vissuto metro dopo metro.</li>
                    </ul>
                </div>

                <div class="card program-card">
                    <h3>Cultura</h3>
                    <ul class="program-list">
                        <li><strong>Borghi</strong> Luoghi e comunità lungo il cammino.</li>
                        <li><strong>Storia</strong> Uno degli itinerari più suggestivi d’Europa.</li>
                        <li><strong>Racconto</strong> Un capitolo personale da portare a casa.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="grid-2 top-margin-xl visual-section">
                <img src="/images/francigena/salto.jpg" alt="Camminatori lungo la Via Francigena" loading="lazy" decoding="async">
                <div>
                    <h2>In cammino da Siena ad Acquapendente</h2>
                    <p class="top-margin-large">Un percorso che attraversa il giorno, la notte e il paesaggio: la Francigena diventa esperienza fisica, memoria e incontro.</p>
                    <a href="/iscrizione" class="btn top-margin-xl mobile-fullwidth">Partecipa</a>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <h2>Domande frequenti</h2>

            <div class="faq-accordion top-margin-xl">
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Quando si svolge la Francigena Ultra Marathon 2026?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="top-margin-large">La demo è impostata sul weekend del 10/11 ottobre 2026, con partenza del countdown al 10 ottobre alle 09:00.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Quali tratte posso scegliere?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="top-margin-large">Per questa demo sono disponibili tre macro-scelte: Grande Sfida 130 km, Tratte intermedie e Tratte brevi.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Dove si sviluppa il percorso?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="top-margin-large">Il racconto della demo segue l’asse della Via Francigena da Siena ad Acquapendente, tra Toscana e Lazio.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Come acquisto i biglietti?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="top-margin-large">Puoi acquistare il tuo biglietto online dalla pagina <a href="/iscrizione" class="hyperlink">Iscrizione</a>.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="/homepage-countdown.js?v=2.0"></script>
    <script>
        const pellegrino = document.getElementById('pellegrino');
        const titoloBox = document.getElementById('titoloBox');

        function syncPellegrinoHeight() {
            if (!pellegrino || !titoloBox) return;
            const h = titoloBox.getBoundingClientRect().height;
            pellegrino.style.height = `${h}px`;
        }

        syncPellegrinoHeight();

        const ro = new ResizeObserver(syncPellegrinoHeight);
        ro.observe(titoloBox);

        window.addEventListener('load', syncPellegrinoHeight);
        window.addEventListener('resize', syncPellegrinoHeight);
    </script>
    <script src="/accordion.js"></script>
@endpush
