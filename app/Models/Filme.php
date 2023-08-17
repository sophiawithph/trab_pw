<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sinopse',
        'ano',
        'trailer',
        'image',
        'categoria'
    ];

    function getEmbed()
    {
        $url = $this->trailer;
        $videoId = $this->extractVideoId($url);
        return "https://www.youtube.com/embed/{$videoId}";
    }

    private function extractVideoId($url)
    {
        $urlParts = parse_url($url);
        if (isset($urlParts['path'])) {
            $pathParts = explode('/', $urlParts['path']);
            if (count($pathParts) > 1) {
                return $pathParts[1];
            }
        }
        return null;
    }
}
