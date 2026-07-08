<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Throwable;

class PageController extends Controller
{
    private const PAGES = [
        '' => [
            'view' => 'pages.home',
            'title' => 'Francigena Ultra Marathon 2026 | Tratte, Iscrizioni e Grande Sfida',
            'description' => 'Walking Francigena Ultra Marathon 2026: cammino non competitivo da Siena ad Acquapendente, con tratte dai 15 ai 130 km.',
            'canonical' => 'https://www.francigenaultramarathon.com/',
            'bodyClass' => 'home-page',
        ],
        'contattaci' => [
            'view' => 'pages.contattaci',
            'title' => 'Contatti | Francigena Ultra Marathon 2026',
            'description' => 'Contatta lo staff della Walking Francigena Ultra Marathon per informazioni su iscrizioni, tratte e organizzazione.',
            'canonical' => 'https://www.francigenaultramarathon.com/contatti',
        ],
        'contatti' => [
            'view' => 'pages.contattaci',
            'title' => 'Contatti | Francigena Ultra Marathon 2026',
            'description' => 'Contatta lo staff della Walking Francigena Ultra Marathon per informazioni su iscrizioni, tratte e organizzazione.',
            'canonical' => 'https://www.francigenaultramarathon.com/contatti',
        ],
        'cookie-policy' => [
            'view' => 'pages.cookie-policy',
            'title' => 'Cookie Policy | Francigena Ultra Marathon',
            'description' => 'Informativa sull\'uso dei cookie tecnici e di preferenza del sito Walking Francigena Ultra Marathon.',
            'canonical' => 'https://www.francigenaultramarathon.com/cookie-policy',
        ],
        'partnership' => [
            'view' => 'pages.partnership',
            'title' => 'Partner | Francigena Ultra Marathon 2026',
            'description' => 'Pagina partner della Walking Francigena Ultra Marathon 2026.',
            'canonical' => 'https://www.francigenaultramarathon.com/partnership',
        ],
        'privacy-policy' => [
            'view' => 'pages.privacy-policy',
            'title' => 'Privacy Policy | Francigena Ultra Marathon',
            'description' => 'Informativa privacy per iscrizioni e contatti del sito Walking Francigena Ultra Marathon.',
            'canonical' => 'https://www.francigenaultramarathon.com/privacy-policy',
        ],
        'regolamento' => [
            'view' => 'pages.regolamento',
            'title' => 'Regolamento | Francigena Ultra Marathon 2026',
            'description' => 'Regolamento sintetico della Walking Francigena Ultra Marathon: partecipazione, biglietti, responsabilità, tratte e indicazioni utili.',
            'canonical' => 'https://www.francigenaultramarathon.com/regolamento',
        ],
        'termini-condizioni' => [
            'view' => 'pages.regolamento',
            'title' => 'Regolamento | Francigena Ultra Marathon 2026',
            'description' => 'Regolamento sintetico della Walking Francigena Ultra Marathon: partecipazione, biglietti, responsabilità, tratte e indicazioni utili.',
            'canonical' => 'https://www.francigenaultramarathon.com/regolamento',
        ],
    ];

    private const HOME_ALIASES = [
        'come-arrivare',
        'gallery',
        'orario',
        'percorsi',
        'ricettivita',
        'styleguide',
    ];

    public function show(?string $slug = ''): Response
    {
        $slug = trim((string) $slug, '/');
        $slug = Str::replaceEnd('.php', '', $slug);

        if (in_array($slug, self::HOME_ALIASES, true)) {
            $slug = '';
        }

        abort_unless(array_key_exists($slug, self::PAGES), 404);

        $page = self::PAGES[$slug];
        $data = [
            'title' => $page['title'],
            'description' => $page['description'],
            'canonical' => $page['canonical'],
            'bodyClass' => $page['bodyClass'] ?? '',
        ];

        if ($page['view'] === 'pages.home') {
            try {
                $data['totalIscritti'] = Ticket::whereNotNull('unique_ticket_code')->count();
            } catch (Throwable $e) {
                $data['totalIscritti'] = 0;
            }
        }

        return response()->view($page['view'], $data);
    }
}
