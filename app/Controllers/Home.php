<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('public/home', [
            'title' => 'Chugoku Paints Indonesia',
            'metaDescription' => 'Marine paints, heavy duty coatings, underwater coating, flooring systems, and industrial protection solutions.'
        ]);
    }

    public function page(string $page)
    {
        $allowed = ['about', 'products', 'solutions', 'projects', 'sustainability', 'news', 'contact'];

        if (! in_array($page, $allowed, true)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('public/pages/' . $page, [
            'title' => ucfirst($page) . ' - Chugoku Paints Indonesia'
        ]);
    }
}
