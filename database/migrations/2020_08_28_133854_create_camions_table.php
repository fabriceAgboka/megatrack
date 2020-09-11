<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->string('numero');
            $table->double('lng',8)->default(0);
            $table->double('lat',9)->default(0);
            $table->integer('vitesse');

            $table->string('camera')->default('Vide');

            $table->integer('etat')->default(1);
            $table->timestamps();
        });
        \App\Camion::create([
            'matricule'=>'AB-2772',
            'numero'=>'90909090',
            'lat'=>6.17715,
            'lng'=>1.20664,
            'vitesse'=>20,
            'camera'=>'http://megatrack.fabriceagboka.com/',
        ]);
        \App\Camion::create([
            'matricule'=>'CAMION TEST',
            'numero'=>'90774454',
            'lat'=>6.17715,
            'lng'=>1.20664,
            'vitesse'=>20,
            'camera'=>'http://megatrack.fabriceagboka.com/',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camions');
    }
}
