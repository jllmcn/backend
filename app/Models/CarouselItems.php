<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    use HasFactory;

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'CarouselItems';

        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'carousel_item_id';

    /**
     * The attribute that are mass asssignable.
     *
     * @var string
     */
    protected $fillable = [
        'carousel_name',
        'image_path',
        'description',
        'user_id',
    ];
}
