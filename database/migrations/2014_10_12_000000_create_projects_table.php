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
            $table->string('image',100)->nullable();;
            $table->string('title',100)->nullable();;
            $table->string('blurb',500)->nullable();;
            $table->string('category',100)->nullable();;
            $table->string('subcategory',100)->nullable();;
            $table->string('location',100)->nullable();;
            $table->string('duration',100)->nullable();;
            $table->string('goal',100)->nullable();;
            $table->string('video',100)->nullable();;
            $table->string('risks',2000)->nullable();;
            $table->timestamps();
        });


        Schema::create('description', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('description',2000)->nullable();;
            $table->string('image',100)->nullable();;
            $table->timestamps();
        });

        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('title',100)->nullable();
            $table->string('update',2000)->nullable();
            $table->timestamps();
        });

        Schema::create('colaborators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('project_id');
            $table->string('collab_id')->nullable();
            $table->timestamps();
            
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('user_id');
            $table->string('comment',1000)->nullable();;
            $table->timestamps();
        });

        Schema::create('backers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->string('user_id');
            $table->string('money')->nullable();;
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
        Schema::dropIfExists('projects');
        Schema::dropIfExists('updates');
        Schema::dropIfExists('colaborators');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('backers');
    }
}
