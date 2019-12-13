<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            

            //aca declaro los atributos de la tabla
            $table->string('documento');
            $table->string('nombresYapellidos');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('barrio');
            $table->string('departamento');

            $table->string('cargo');
            $table->double('salario');
            $table->string('eps');
            $table->string('arl');
            $table->string('cajaDeCompensaciones');
            $table->string('fondoDePensiones');
            $table->date('fechaIngreso');
            $table->date('fechaRetiro');

            $table->string('nombreContacto');
            $table->string('parentesco');
            $table->string('telefonoContacto');

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
        Schema::dropIfExists('employees');
    }
}
