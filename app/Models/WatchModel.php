<?php

namespace App\Models;

use CodeIgniter\Model;

class WatchModel extends Model
{
    protected $table      = 'watch';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'genre', 'studio', 'sampul'];

    public function getAnime($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
