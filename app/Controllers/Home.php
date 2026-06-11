<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\PageModel;
use App\Models\ProductModel;
use App\Models\ProjectModel;
use App\Models\SiteSectionModel;
use App\Models\NetworkLocationModel;

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

        $sectionModel = new SiteSectionModel();
        $productModel = new ProductModel();
        $projectModel = new ProjectModel();
        $newsModel = new NewsModel();
        $networkModel = new NetworkLocationModel();

        return view('public/home', [
            'lang' => $lang,
            'title' => 'Chugoku Paints Indonesia',
            'sections' => $sectionModel->activeByGroup('home'),
            'featuredProducts' => $productModel->publishedFeatured(6),
            'featuredProjects' => $projectModel->publishedFeatured(6),
            'latestNews' => $newsModel->latestPublished(3),
            'networkLocations' => $networkModel->activeAll(),
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

        $pageModel = new PageModel();
        $pageData = $pageModel->findPublishedBySlug($page);

        if (! $pageData) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('public/pages/dynamic', [
            'lang' => $lang,
            'page' => $page,
            'pageData' => $pageData,
            'title' => localized_field($pageData, 'meta_title', $lang, localized_field($pageData, 'title', $lang)) . ' - Chugoku Paints Indonesia',
            'metaDescription' => localized_field($pageData, 'meta_description', $lang, localized_field($pageData, 'excerpt', $lang)),
        ]);
    }

    public function meetingDemo()
    {
        return redirect()->to(base_url('id'));
    }

    private function normalizeLang(string $lang): string
    {
        return in_array($lang, $this->allowedLang, true) ? $lang : 'id';
    }
}
