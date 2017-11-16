<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    use Notifiable;

    protected $table = 'product_detail';

    protected $fillable = [
        'productID','productname','descipsion','price','saleprice','quantuminstock','categoryID','ownerID','dateofbirth','dateofend','isActive'
    ];

    protected $primaryKey = 'id';

}
