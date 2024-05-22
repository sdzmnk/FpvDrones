<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderLine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'detail_id',
        'quantity_of_detail',
    ];

    public function order() : BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function detail() : BelongsTo
    {
        return $this->belongsTo(Detail::class);
    }
}
