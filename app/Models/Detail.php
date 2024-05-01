<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Detail extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'model',
        'producer',
        'description',
        'min_price',
        'max_price',
        'need',
        'collected',
        'link_to_detail_id',


    ];

    public function link_to_detail()
    {
        return $this->hasMany(LinkToDetail::class);
    }

}
