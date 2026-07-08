@extends('layouts.app')

@section('content')
    <main>
        <section>
            <h1>Contatti</h1>
            <p class="top-margin-large">Per informazioni su iscrizioni, tratte e aspetti organizzativi puoi scrivere allo staff della Walking Francigena Ultra Marathon.</p>
            <a href="mailto:info@francigenaultramarathon.com" class="btn top-margin-xl mobile-fullwidth">Scrivici</a>
        </section>

        <section class="grid-2">
            <div class="card">
                <h2>Email</h2>
                <p class="top-margin-large"><a class="hyperlink" href="mailto:info@francigenaultramarathon.com">info@francigenaultramarathon.com</a></p>
            </div>
            <div class="card">
                <h2>Luogo evento</h2>
                <p class="top-margin-large">Via Francigena, da Siena ad Acquapendente.</p>
            </div>
        </section>
    </main>
@endsection
