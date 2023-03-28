<?php

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
            Schema::table('posts', function (Blueprint $table) {
                $table->string('name',100)->after('id');
                $table->string('role',100)->after('name');
                $table->string('about',100)->after('role');
                $table->string('address')->after('about');
                $table->string('phone')->after('address');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('role');
            $table->dropColumn('about');
            $table->dropColumn('address');
            $table->dropColumn('phone');
        });
    }
};
