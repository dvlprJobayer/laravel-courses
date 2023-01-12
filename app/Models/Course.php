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

    public function duration($value) {
        if($value == 0){
            $time = rand(1, 5);
            return $time . ' hours';
        } elseif($value == 1) {
            $time = rand(5, 10);
            return $time . ' hours';
        } else {
            return '10+ hours';
        }
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
