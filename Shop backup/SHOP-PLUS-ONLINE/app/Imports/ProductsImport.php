<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{

    public function model(array $row)
    {
        return new Product([
            'name'     => $row[0],
            'description'    => $row[1],
            'content'    => $row[2],
            'image'    => $row[3],
            'price'    => $row[4],
            'password' => \Hash::make('123456'),
        ]);
    }
}
