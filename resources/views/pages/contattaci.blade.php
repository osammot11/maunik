@extends('layouts.app')

@section('content')
    <main>
        <section>
            <h1>Contatti</h1>
            <p class="top-margin-large">Per informazioni su iscrizioni, gare e aspetti organizzativi puoi scrivere allo staff del Maunìk Trail.</p>
            <a href="mailto:info@mauniktrail.it" class="btn top-margin-xl mobile-fullwidth">Scrivici</a>
        </section>

        <section class="grid-2">
            <div class="card">
                <h2>Email</h2>
                <p class="top-margin-large"><a class="hyperlink" href="mailto:info@mauniktrail.it">info@mauniktrail.it</a></p>
            </div>
            <div class="card">
                <h2>Luogo evento</h2>
                <p class="top-margin-large">Val Grivò, tra Faedis e Attimis (UD).</p>
            </div>
        </section>
    </main>
@endsection
