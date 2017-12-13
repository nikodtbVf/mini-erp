
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cotizador',function(Blueprint $table){
            $table->increments('id');
            $table->double('costo_total', 15, 2);
            $table->integer('barreno_id')->unsigned();
            $table->foreign('barreno_id')->references('id')->on('barrenos');
            $table->integer('medida_id')->unsigned();
            $table->foreign('medida_id')->references('id')->on('medidas');
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
        Schema::drop("cotizador");
    }
}
