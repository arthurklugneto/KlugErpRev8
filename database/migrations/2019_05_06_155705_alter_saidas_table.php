<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('saidas', function (Blueprint $table) {
            $table->integer('vendedor_id')->unsigned()->nullable();
            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            
            $table->decimal('valorComissao', 10, 2)->dafult(0.0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
