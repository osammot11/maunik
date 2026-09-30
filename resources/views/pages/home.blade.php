@extends('layouts.app')

@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SportsEvent",
        "name": "Maunìk Trail 2026",
        "startDate": "2026-04-19T08:30:00+02:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "url": "https://www.mauniktrail.it/",
        "image": "https://static.wixstatic.com/media/7f418a_af22e500d2214084bc087d3ab8a8f556~mv2.jpg",
        "description": "Corsa in montagna nella Val Grivò: 23 km con 1.200 metri D+ oppure staffetta 12 km + 11 km.",
        "location": {
            "@@type": "Place",
            "name": "Val Grivò",
            "address": {
                "@@type": "PostalAddress",
                "addressLocality": "Faedis e Attimis",
                "addressRegion": "Friuli-Venezia Giulia",
                "addressCountry": "IT"
            }
        },
        "organizer": {
            "@@type": "Organization",
            "name": "A.S.D. Maunìk",
            "url": "https://www.mauniktrail.it/"
        }
    }
    </script>
@endpush

@section('content')
    <div class="home-hero maunik-hero">
        <section class="hero-height light-color maunik-hero__content">
            <p class="hero-kicker">Faedis · Attimis · Friuli-Venezia Giulia</p>
            <h1 class="hero-title top-margin-mid">CORRI DENTRO<br>IL <span>MAUNÌK</span></h1>
            <p class="hero-copy top-margin-large">Boschi, castelli, creste e borghi. Una gara selvaggia nella Val Grivò, a soli 13 km da Udine.</p>
            <div class="hero-actions top-margin-xl">
                <a href="/iscrizione" class="btn">Iscriviti ora</a>
                <a href="#gare" class="btn btn-outline">Scopri le gare</a>
            </div>
        </section>

        <div class="race-strip" aria-label="Dati dell'evento">
            <div><strong>19.04.2026</strong><span>Quarta edizione</span></div>
            <div><strong>23 KM</strong><span>1.200 metri D+</span></div>
            <div><strong>2 FRAZIONI</strong><span>12 km + 11 km</span></div>
            <div><strong>#GOMAUNIKERS</strong><span>Val Grivò</span></div>
        </div>
    </div>

    <main>
        <section class="grid-2 intro-section maunik-intro">
            <div>
                <p class="section-kicker">Una valle. Novanta chilometri di sentieri.</p>
                <h2>Non è solo una gara.<br>È la Val Grivò che ti viene incontro.</h2>
                <p class="top-margin-large">Il Maunìk Trail nasce nel 2022 per far scoprire il patrimonio naturale di Faedis e Attimis: boschi, prati, montagne, fiumi, castelli e piccoli borghi affacciati sul Friuli.</p>
                <p class="top-margin-large">Un percorso compatto e sorprendente, disegnato per chi cerca tecnica, velocità e quella sensazione rara di essere davvero dentro la montagna.</p>
            </div>
            <div class="maunik-poster-card" aria-label="Maunìk Trail 2026, 19 aprile, Val Grivò">
                <div class="poster-visual">
                    <img src="/images/maunik/logo.avif" alt="Logo Maunìk Trail" loading="lazy" decoding="async">
                    <p>19 · 04 · 2026</p>
                    <strong>WILD<br>BY<br>NATURE.</strong>
                    <span>FAEDIS · ATTIMIS</span>
                </div>
                <div class="poster-caption">
                    <span class="numero">{{ $totalIscritti }}</span>
                    <span>Maunikers già iscritti</span>
                </div>
            </div>
        </section>

        <section id="gare" class="race-section">
            <div class="section-heading">
                <div>
                    <p class="section-kicker">Scegli come viverlo</p>
                    <h2>Due gare, un solo Maunìk.</h2>
                </div>
                <p>Solo o in squadra: scegli il formato e porta in Val Grivò la tua voglia di correre.</p>
            </div>

            <div class="grid-2 top-margin-xl">
                <article class="race-card race-card--solo">
                    <span class="route-badge">Gara individuale</span>
                    <div class="race-card__body">
                        <p class="race-card__number">23K</p>
                        <h3>Maunìk Trail</h3>
                        <p>Un anello completo nella parte più selvaggia della valle: 23 km e 1.200 metri di dislivello positivo.</p>
                        <a href="/iscrizione?percorso=Maunik%20Trail%2023K" class="btn top-margin-large">Corri la 23K</a>
                    </div>
                </article>

                <article class="race-card race-card--relay">
                    <span class="route-badge">Gara a coppie</span>
                    <div class="race-card__body">
                        <p class="race-card__number">12+11K</p>
                        <h3>Staffetta Maunìk</h3>
                        <p>Dividetevi la fatica, condividete l'arrivo: due frazioni diverse per vivere il tracciato in squadra.</p>
                        <a href="/iscrizione?percorso=Staffetta%20Maunik" class="btn top-margin-large">Crea la staffetta</a>
                    </div>
                </article>
            </div>
        </section>

        <section class="maunik-manifesto">
            <p class="section-kicker">Il fenomeno che dà il nome alla gara</p>
            <h2>Una nuvola bianca scavalca la Bocchetta di Sant'Antonio. Qui la chiamano Maunìk.</h2>
            <p class="top-margin-large">L'aria fredda e umida sale dalla valle slovena, si adagia sui prati sopra Canebola e poi scompare scendendo verso la pianura. Se la incontri in gara, sei esattamente dove dovresti essere.</p>
            <a href="/iscrizione" class="btn btn-2 top-margin-xl">Preparati a tutto</a>
        </section>

        <section id="programma">
            <div class="section-heading">
                <div>
                    <p class="section-kicker">Tutto quello che serve</p>
                    <h2>Il weekend dei Maunikers</h2>
                </div>
                <p>Una proposta pensata non solo per correre, ma per vivere il territorio prima e dopo la gara.</p>
            </div>
            <div class="grid-3 top-margin-xl">
                <div class="card program-card">
                    <span class="card-index">01</span>
                    <h3>Trail</h3>
                    <ul class="program-list">
                        <li><strong>Tecnica</strong> Sentieri, creste e discese veloci.</li>
                        <li><strong>Natura</strong> Boschi, prati e corsi d'acqua.</li>
                        <li><strong>Sfida</strong> Nibex Sprint Race e Lurbel Cup.</li>
                    </ul>
                </div>
                <div class="card program-card">
                    <span class="card-index">02</span>
                    <h3>Village</h3>
                    <ul class="program-list">
                        <li><strong>Energia</strong> Partenza, arrivo e festa insieme.</li>
                        <li><strong>Servizi</strong> Tutto il supporto per gli atleti.</li>
                        <li><strong>Territorio</strong> Sapori e comunità della Val Grivò.</li>
                    </ul>
                </div>
                <div class="card program-card">
                    <span class="card-index">03</span>
                    <h3>Esplora</h3>
                    <ul class="program-list">
                        <li><strong>Castelli</strong> Storia lungo il percorso.</li>
                        <li><strong>Borghi</strong> Canebola, Porzûs e le valli.</li>
                        <li><strong>Training</strong> Traccia GPX e ricognizioni.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="quick-links">
            <a href="/regolamento"><span>Regolamento</span><strong>→</strong></a>
            <a href="/#programma"><span>Programma</span><strong>→</strong></a>
            <a href="/contatti"><span>Contatti</span><strong>→</strong></a>
        </section>

        <section class="faq-section">
            <p class="section-kicker">Prima di partire</p>
            <h2>Domande frequenti</h2>
            <div class="faq-accordion top-margin-xl">
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false"><span>Quando e dove si svolge il Maunìk Trail?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>La quarta edizione è in programma domenica 19 aprile 2026 nella Val Grivò, tra i comuni di Faedis e Attimis (UD).</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false"><span>Quali gare posso scegliere?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Puoi correre il Maunìk Trail individuale da 23 km e 1.200 D+ oppure la staffetta in due frazioni da 12 km e 11 km.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false"><span>Come posso iscrivermi?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Scegli la gara e completa l'iscrizione online. Riceverai la conferma e il biglietto direttamente via email.</p></div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="/accordion.js"></script>
@endpush
