<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected array $allowedLang = ['id', 'en'];

    public function redirectDefault()
    {
        return redirect()->to(base_url('id'));
    }

    public function index(string $lang = 'id')
    {
        $lang = $this->normalizeLang($lang);

        return view('public/home', [
            'lang' => $lang,
            'title' => $lang === 'id'
                ? 'Chugoku Paints Indonesia'
                : 'Chugoku Paints Indonesia',
        ]);
    }

    public function page(string $lang, string $page)
    {
        $lang = $this->normalizeLang($lang);

        $allowedPages = [
            'about',
            'products',
            'solutions',
            'projects',
            'sustainability',
            'news',
            'contact',
        ];

        if (! in_array($page, $allowedPages, true)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('public/pages/' . $page, [
            'lang' => $lang,
            'page' => $page,
            'title' => ucfirst($page) . ' - Chugoku Paints Indonesia',
        ]);
    }

    private function normalizeLang(string $lang): string
    {
        return in_array($lang, $this->allowedLang, true) ? $lang : 'id';
    }
}
