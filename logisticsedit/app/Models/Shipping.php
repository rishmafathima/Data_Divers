<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'tb_shipping';

    protected $primaryKey = 'shp_id';

    protected $fillable = [
        'shp_oid',
        'shp_date',
        'shp_status'
    ];

    public $timestamps = false;
}