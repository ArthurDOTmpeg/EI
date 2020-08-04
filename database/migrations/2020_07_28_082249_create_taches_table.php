<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 30);
            $table->string('description', 255)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('project_id');            
            $table->enum('etat', ['ATTENTE', 'EN_COURS', 'TERMINE', 'ANNULE', 'VALIDE']);
            $table->unsignedBigInteger('tache_id')->nullable();
            $table->date('started_at');
            $table->date('finished_at');
            $table->timestamps();
            
        });
        
        //Foreign Keys
        
        Schema::table('taches', function (Blueprint $table)
        {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
            
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('tache_id')
                ->references('id')
                ->on('taches')
                ->onDelete('set null')
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
        Schema::dropIfExists('taches');
    }
}
