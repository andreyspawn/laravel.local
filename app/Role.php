<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function acl() {
        return $this->belongsToMany(
            Acl_Resources::class,
            'acl_roles',
            'role_id',
            'acl_id'
        );
    }

}
