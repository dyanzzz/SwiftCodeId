<?php namespace AyatMaulana\Swiftid\Models;

use Model;

/**
 * Model
 */
class HomeSlider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayatmaulana_swiftid_home_slider';
    
    public $attachOne = [
        'picture' => 'System\Models\File'
    ];
}