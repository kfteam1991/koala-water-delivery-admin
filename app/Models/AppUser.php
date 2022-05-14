<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;

    protected $fillable = [
        "openid",
        "nickname",
        "avatar",
        "mobile",
        "address_id",
    ];
}
