<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // name と gender と hobby と introduction を追記
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // プロフィールの氏名を保存するカラム
            $table->string('gender'); // プロフィールの性別を保存するカラム
            $table->string('hobby'); // プロフィールの趣味を保存するカラム
            $table->string('introduction'); // プロフィールの自己紹介を保存するカラム
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
        Schema::dropIfExists('profiles');
    }
}
