<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        /**
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'content',
        'user_id',
    ];


    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /*
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
