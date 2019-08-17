<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('new_id');
            $table->tinyInteger('admin_id');
            $table->integer('cat_id');
            $table->string('new_title')->unique();
            $table->string('new_slug');
            $table->string('new_description')->nullable();
            $table->longText('new_content');
            $table->string('new_image')->nullable();
            $table->integer('new_view')->default(0)->comment('Số lượt xem');
            $table->integer('new_as_draft')->default(0)->comment('Bài viết lưu nháp');
            $table->integer('new_total_rating')->default(0)->comment('Tổng số đánh giá');
            $table->integer('new_total_number_rating')->default(0)->comment('Tổng số điểm đánh giá');
            $table->tinyInteger('new_publish')->default(1)->index()->comment('Trạng thái bài viết');
            $table->text('new_meta_description')->nullable();
            $table->text('new_meta_keywords')->nullable();
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
        Schema::dropIfExists('news');
    }
}
