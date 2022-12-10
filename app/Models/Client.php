<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'client_type_id',
        'address',
        'number',
        'city',
        'province',
        'cap',
        'p_iva',
        'reference',
        'contact'
    ];

    public function client_type()
    {
        return $this->belongsTo(ClientType::class);
    }
}
