<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin.
 *
 * @mixin \Eloquent
 *
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Admin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Admin whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Admin whereDescription($value)
 */
class Admin extends Model
{
    protected $table = 'faculties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];
}
