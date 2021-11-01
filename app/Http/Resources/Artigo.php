<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class Artigo extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'conteudo' => $this->conteudo
        ];
    }
}
