<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('apply_start')->comment('報名開始時間');
            $table->timestamp('apply_end')->comment('報名結束時間');
            $table->enum('type', ['A', 'B'])->comment('規則類型');
            $table->tinyInteger('num')->comment('共有幾家');
            $table->json('num_content')->comment('定義每一家開始與結束上傳時間，以及可否遲交');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['type', 'apply_start', 'apply_end']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novels');
    }
}
