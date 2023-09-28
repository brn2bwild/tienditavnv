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
        Schema::table('reservacions', function (Blueprint $table) {
						$table->string('token_cancelacion')
						->after('n_personas');
				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservacions', function(Blueprint $table){
					$table->dropColumn('token_cancelacion');
				});
    }
};
