<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'slug', 'category', 'location', 'project_year',
        'title_id', 'title_en',
        'summary_id', 'summary_en',
        'description_id', 'description_en',
        'image', 'is_featured', 'status', 'sort_order',
    ];

    public function publishedFeatured(int $limit = 6): array
    {
        return $this->where('status', 'published')
            ->where('is_featured', 1)
            ->orderBy('sort_order', 'ASC')
            ->limit($limit)
            ->findAll();
    }

    public function publishedAll(): array
    {
        return $this->where('status', 'published')
            ->orderBy('sort_order', 'ASC')
            ->findAll();
    }
}
