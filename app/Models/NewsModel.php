<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'slug',
        'title_id', 'title_en',
        'summary_id', 'summary_en',
        'content_id', 'content_en',
        'image', 'status', 'published_at',
    ];

    public function latestPublished(int $limit = 3): array
    {
        return $this->where('status', 'published')
            ->orderBy('published_at', 'DESC')
            ->limit($limit)
            ->findAll();
    }
}
