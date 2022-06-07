<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    public static int $PAYED = 1;
    public static int $PROCESSING = 2;
    public static int $WAITING_FOR_PAYMENT = 3;
    public static int $DELIVERED = 4;
}
