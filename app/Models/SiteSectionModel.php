<?php

namespace App\Models;

use CodeIgniter\Model;

class SiteSectionModel extends Model
{
    protected $table = 'site_sections';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'section_key', 'group_key', 'image',
        'title_id', 'title_en',
        'subtitle_id', 'subtitle_en',
        'body_id', 'body_en',
        'button_label_id', 'button_label_en', 'button_url',
        'status', 'sort_order',
    ];

    public function activeByGroup(string $group = 'home'): array
    {
        $rows = $this->where('group_key', $group)
            ->where('status', 'active')
            ->orderBy('sort_order', 'ASC')
            ->findAll();

        $mapped = [];
        foreach ($rows as $row) {
            $mapped[$row['section_key']] = $row;
        }

        return $mapped;
    }
}
