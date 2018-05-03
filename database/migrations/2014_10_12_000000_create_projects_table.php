<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {




        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('image')->nullable();;
            $table->string('title')->nullable();;
            $table->string('blurb')->nullable();;
            $table->string('category')->nullable();;
            $table->string('subcategory')->nullable();;
            $table->string('location')->nullable();;
            $table->string('duration')->nullable();;
            $table->string('goal')->nullable();;
            $table->string('video')->nullable();;
            $table->string('risks')->nullable();;
            $table->timestamps();
        });


        Schema::create('description', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('description')->nullable();;
            $table->string('image')->nullable();;
            $table->timestamps();
        });

        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('title')->nullable();;
            $table->string('update')->nullable();;
            $table->timestamps();
        });

        Schema::create('colaborators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('project_id');
            $table->string('collab_id')->nullable();
            
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('user_id');
            $table->string('comment')->nullable();;
        });

        Schema::create('backers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('user_id');
            $table->string('money')->nullable();;
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('updates');
        Schema::dropIfExists('colaborators');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('backers');
    }
}
