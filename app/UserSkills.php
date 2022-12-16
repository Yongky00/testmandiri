<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model
{
    protected $fillable = [

        'userSkillId', 'username', 'skillID', 'skillLevelID'

    ];
}
