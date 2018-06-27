<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonebookTable extends Migration
{

    private function getRecordsArray()
    {
        $record = [];

        $record[] = [
            'fio' => 'Иванов Иван Иванович',
            'phone' => '111111111'
        ];
        $record[] = [
            'fio' => 'Сергеев Сергей Сергеевич',
            'phone' => '222222222'
        ];
        $record[] = [
            'fio' => 'Алексеев Алексей Алексеевич',
            'phone' => '333333333'
        ];
        $record[] = [
            'fio' => 'Петров Петр Петрович',
            'phone' => '444444444'
        ];
        $record[] = [
            'fio' => 'Павлов Павел Павлович',
            'phone' => '555555555'
        ];

        return $record;
    }


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonebook', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fio');
            $table->string('phone', 20);
        });

        DB::table('phonebook')->delete();

        DB::table('phonebook')->insert(
            $this->getRecordsArray()
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phonebook');
    }
}
