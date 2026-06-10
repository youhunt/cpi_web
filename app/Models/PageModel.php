<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'slug', 'template',
        'title_id', 'title_en',
        'excerpt_id', 'excerpt_en',
        'content_id', 'content_en',
        'meta_title_id', 'meta_title_en',
        'meta_description_id', 'meta_description_en',
        'status', 'sort_order', 'published_at',
    ];

    public function findPublishedBySlug(string $slug): ?array
    {
        return $this->where('slug', $slug)
            ->where('status', 'published')
            ->first();
    }
}
