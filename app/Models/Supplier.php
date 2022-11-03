<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Supplier extends Model
{
    use HasFactory;
    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'id_supplier' => [
                'format' => 'Sup?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
    protected $table='tbl_supplier';
    protected $fillable = [
        'id_supplier',
        'supplier_nama',
        'supplier_alamat',
        'supplier_phone',
        'supplier_status'
    ];
}

