<?php


namespace Lovelaravel\Shoplaravel\Shops\Models;


use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_laravel_shops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_short',
        'company',
        'address',
        'zip_code',
        'city',
        'state',
        'country',
        'tax',
        'nb_registry_number', // national business registry number
    ];
}