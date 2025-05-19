<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterForm extends Model
{
    protected $fillable = [
        'email',
        'name',
        'subscribed',
    ];

    protected $casts = [
        'subscribed' => 'boolean',
    ];

    public function scopeSubscribed($query)
    {
        return $query->where('subscribed', true);
    }

    public function scopeUnsubscribed($query)
    {
        return $query->where('subscribed', false);
    }
}
