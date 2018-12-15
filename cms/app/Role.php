<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users() {
        return $this->hasMany('CMS\User');
    }
}
