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
            'title' => 'Maunìk Trail 2026 | Trail Running nella Val Grivò',
            'description' => 'Maunìk Trail 2026: gara individuale 23 km 1.200 D+ e staffetta 12 km + 11 km tra Faedis e Attimis.',
            'canonical' => 'https://www.mauniktrail.it/',
            'bodyClass' => 'home-page',
        ],
        'contattaci' => [
            'view' => 'pages.contattaci',
            'title' => 'Contatti | Maunìk Trail 2026',
            'description' => 'Contatta lo staff Maunìk Trail per informazioni su iscrizioni, gare e organizzazione.',
            'canonical' => 'https://www.mauniktrail.it/contatti',
        ],
        'contatti' => [
            'view' => 'pages.contattaci',
            'title' => 'Contatti | Maunìk Trail 2026',
            'description' => 'Contatta lo staff Maunìk Trail per informazioni su iscrizioni, gare e organizzazione.',
            'canonical' => 'https://www.mauniktrail.it/contatti',
        ],
        'cookie-policy' => [
            'view' => 'pages.cookie-policy',
            'title' => 'Cookie Policy | Maunìk Trail',
            'description' => 'Informativa sull\'uso dei cookie tecnici e di preferenza del sito Maunìk Trail.',
            'canonical' => 'https://www.mauniktrail.it/cookie-policy',
        ],
        'partnership' => [
            'view' => 'pages.partnership',
            'title' => 'Partner | Maunìk Trail 2026',
            'description' => 'Partner, supporter e istituzioni del Maunìk Trail 2026.',
            'canonical' => 'https://www.mauniktrail.it/partnership',
        ],
        'privacy-policy' => [
            'view' => 'pages.privacy-policy',
            'title' => 'Privacy Policy | Maunìk Trail',
            'description' => 'Informativa privacy per iscrizioni e contatti del sito Maunìk Trail.',
            'canonical' => 'https://www.mauniktrail.it/privacy-policy',
        ],
        'regolamento' => [
            'view' => 'pages.regolamento',
            'title' => 'Regolamento | Maunìk Trail 2026',
            'description' => 'Regolamento sintetico del Maunìk Trail: partecipazione, biglietti, responsabilità e gare.',
            'canonical' => 'https://www.mauniktrail.it/regolamento',
        ],
        'termini-condizioni' => [
            'view' => 'pages.regolamento',
            'title' => 'Regolamento | Maunìk Trail 2026',
            'description' => 'Regolamento sintetico del Maunìk Trail: partecipazione, biglietti, responsabilità e gare.',
            'canonical' => 'https://www.mauniktrail.it/regolamento',
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
