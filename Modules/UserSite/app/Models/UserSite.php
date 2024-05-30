<?php

namespace Modules\UserSite\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserSite\Database\Factories\UserSiteFactory;

class UserSite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): UserSiteFactory
    {
        //return UserSiteFactory::new();
    }
}
