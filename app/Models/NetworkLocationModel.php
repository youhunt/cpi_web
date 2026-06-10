<?php

namespace App\Models;

use CodeIgniter\Model;

class NetworkLocationModel extends Model
{
    protected $table = 'network_locations';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = [
        'name', 'type', 'province', 'city', 'address',
        'latitude', 'longitude',
        'description_id', 'description_en',
        'status', 'sort_order',
    ];

    public function activeAll(): array
    {
        return $this->where('status', 'active')
            ->orderBy('sort_order', 'ASC')
            ->findAll();
    }
}
