<?php

use Illuminate\Database\Seeder;

class TP_USUARIO extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        App\TPU_USUARIO::create( [
        'TPU_COD'=>'1',
        'TPU_DESC'=>'TECNICO',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ] );

        App\TPU_USUARIO::create( [
        'TPU_COD'=>'2',
        'TPU_DESC'=>'DOCTOR',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ] );
    }
}
