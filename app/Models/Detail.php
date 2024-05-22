<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'img',
        'drone_id',

    ];

    public function links() : HasMany
    {
        return $this->hasMany(LinkToDetail::class);
    }

    public function order_lines() : HasMany
    {
        return $this->hasMany(OrderLine::class);
    }

    public function drone() : BelongsTo
    {
        return $this->belongsTo(Drone::class);
    }

}
