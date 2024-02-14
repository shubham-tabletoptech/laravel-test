<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Document extends Model
{
    use HasFactory;

    protected $fillable = ['resume_id', 'image', 'document'];
 
    public function Resume(): BelongsTo
    {
        return $this->belongsTo(Resume::class);
    }
}
