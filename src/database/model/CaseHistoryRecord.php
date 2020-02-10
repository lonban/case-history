<?php

namespace Lonban\CaseHistory\Model;

use Illuminate\Database\Eloquent\Model;

class CaseHistoryRecord extends Model
{
    //
    protected $fillable = ['part','state','time','diet','remedy'];
}
