<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 30);
            $table->text('description')->nullable();
            $table->date('started_at');
            $table->unsignedBigInteger('tache_id');
            $table->timestamps();
        });
        
        //Foreign Key
        Schema::table('informations', function (Blueprint $table)
        {
            $table->foreign('tache_id')
                ->references('id')
                ->on('taches')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
