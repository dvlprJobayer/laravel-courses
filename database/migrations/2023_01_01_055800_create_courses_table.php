<?php

use App\Models\Topic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('type')->default(0)->comment('0: Free, 1: Paid');
            $table->unsignedBigInteger('resources')->default(1)->comment('resources count');
            $table->unsignedBigInteger('year');
            $table->float('price')->default(0.00);
            $table->string('image');
            $table->text('content');
            $table->text('link');
            $table->unsignedBigInteger('submitted_by');
            $table->unsignedBigInteger('duration')->comment('0=1-5hr; 1=5-10hrs; 10+hrs');
            $table->unsignedBigInteger('difficulty_level')->comment('0=Beginner; 1=Intermediate; 2=Advanced');
            $table->foreignId('platform_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->foreign('submitted_by')->references('id')->on('users');
        });

        Schema::create('course_topic', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Topic::class)->constrained()->onDelete('cascade');

            $table->unique(['course_id', 'topic_id']);
            $table->timestamps();
        });

        Schema::create('course_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('series_id')->constrained()->onDelete('cascade');
            $table->unique(['course_id', 'series_id']);
            $table->timestamps();
        });

        Schema::create('author_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->unique(['course_id', 'author_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
