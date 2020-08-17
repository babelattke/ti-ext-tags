<?php

namespace Yak0d3\Allergenics\Models;

use Model;

/**
 * MenuAllergenic Model
 */
class MenuAllergenic extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'yak0d3_allergenics_menu_allergenics';

    /**
     * @var array fillable fields
     */
    protected $fillable = [];

    public $timestamps = TRUE;

    /**
     * @var array Relations
     */
    public $relation = [
        'hasOne' => [],
        'hasMany' => [],
        'belongsTo' => [],
        'belongsToMany' => [],
        'morphTo' => [],
        'morphOne' => [],
        'morphMany' => [],
    ];
}
