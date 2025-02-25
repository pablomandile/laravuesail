<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'greeting' => 'Gracias por usar esta API',
            'id' => $this->id,
            'title' => $this->content,
            'example' => 'Esta es un ejemplo de respuesta'
        ];
    }
}
