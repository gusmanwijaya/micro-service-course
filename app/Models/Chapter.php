<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = "chapters";
    protected $primaryKey = "id";
    protected $fillable = [
        'name', 'course_id'
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class)->orderBy('id', 'asc');
    }
}