<?php
namespace App\Transformers;

class ServerTansform extends BaseTransformer
{
    public function transform($item)
    {
        return [
            'title' => $item['name'],
            'link_id' => $item['id']
        ];
    }
}