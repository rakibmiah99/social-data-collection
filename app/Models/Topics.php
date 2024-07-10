<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function topic_data(){
        return $this->hasMany(TopicData::class, 'topic_id', 'id');
    }
}
