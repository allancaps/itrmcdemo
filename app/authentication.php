<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class authentication extends Model
{
    protected $table='authentication';

    protected $primaryKey='user_id';

    protected $connection='sqlsrv';
}
