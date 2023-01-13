<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function platform() {
        return $this->belongsTo(Platform::class);
    }

    public function submittedBy () {
        return $this->belongsTo(User::class, 'submitted_by');
    }

    public function topics() {
        return $this->belongsToMany(Topic::class);
    }

    public function authors() {
        return $this->belongsToMany(Author::class);
    }

    public function series() {
        return $this->belongsToMany(Series::class);
    }

    public function difficultyLevel($value) {
        if($value == 0){
            return 'Beginner';
        } elseif($value == 1) {
            return 'Intermediate';
        } else {
            return 'Advanced';
        }
    }
}
