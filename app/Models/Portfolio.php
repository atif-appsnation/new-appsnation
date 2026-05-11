<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'portfolios';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "uploads";
        $destination_path = "/portfolio";

        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});
    
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    }
     public function setBackImageAttribute($value)
{
    $attribute_name = "back_image";
    $disk = "uploads";
    $destination_path = "/portfolio/back-images";

    if ($value == null) {
        // delete old image from disk
        \Storage::disk($disk)->delete($this->{$attribute_name});

        // set null in database
        $this->attributes[$attribute_name] = null;
        return;
    }

    // upload new image
    $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
}
    public function setIconAttribute($value)
    {
        $attribute_name = "icon";
        $disk = "uploads";
        $destination_path = "/portfolio";
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});
    
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    }
    
}
