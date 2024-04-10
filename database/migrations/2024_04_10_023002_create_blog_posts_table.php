<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blog_posts',
            function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('body');
                $table->string('source');
                $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
