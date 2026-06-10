<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'slug', 'category',
        'name_id', 'name_en',
        'summary_id', 'summary_en',
        'description_id', 'description_en',
        'image', 'brochure_file',
        'is_featured', 'status', 'sort_order',
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
