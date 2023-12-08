<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lukeraymonddowning\SelfHealingUrls\Concerns\HasSelfHealingUrls;

class Post extends Model
{
    use HasFactory, HasSelfHealingUrls;

    protected $fillable = ['title', 'content', 'slug'];
}
