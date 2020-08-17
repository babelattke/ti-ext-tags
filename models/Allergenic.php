<?php

namespace Yak0d3\Allergenics\Models;

use Model;

/**
 * Allergenic Model
 */
class Allergenic extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'yak0d3_allergenics_allergenics';

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
        'belongsToMany' => [
            'menus' => ['Admin\Models\Menus_model', 'table' => 'yak0d3_allergenics_menu_allergenics'],
        ],
        'morphTo' => [],
        'morphOne' => [],
        'morphMany' => [],
    ];

    /**
     * Get the icon select list options.
     *
     * @return array
     */
    public function getIconOptions()
    {
        return [
            'white meat' => ['white meat'],
            'fish' => ['fish'],
        ];
    }

    /**
     * Get the required attributes.
     *
     * @return array
     */
    public function isAttributeRequired()
    {
        return [
            'name',
        ];
    }
}
