<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static int $ROLE_USER = 1;
    public static int $ROLE_ADMIN = 2;
    public static int $ROLE_SUPER_ADMIN = 3;
}
