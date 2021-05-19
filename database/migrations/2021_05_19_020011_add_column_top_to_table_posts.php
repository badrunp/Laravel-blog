<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTopToTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->boolean('is_tranding')->nullable()->default(0)->after('status');
            $table->boolean('is_top_views')->nullable()->default(0)->after('is_tranding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_posts', function (Blueprint $table) {
            $table->dropColumn('is_tranding');
            $table->dropColumn('is_top_views');
        });
    }
}
