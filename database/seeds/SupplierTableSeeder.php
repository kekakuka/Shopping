<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $supplier=new \App\Supplier(['EmailAddress'=>'rockli@unitec.ac.nz','Address'=>'49 Queen street',
           'MobilePhoneNumber'=>'0251111111','LastName'=>'Rock','FirstName'=>'Li'
       ]);
       $supplier->save();
        $supplier=new \App\Supplier(['EmailAddress'=>'JameGreen@baidu.com','Address'=>'27 Bold Avenue',
            'MobilePhoneNumber'=>'0251111112','LastName'=>'Jame','FirstName'=>'Green'
       ]);
        $supplier->save();
        $supplier=new \App\Supplier(['EmailAddress'=>'AnnyK@qq.com','Address'=>'31 Mt albert',
        'MobilePhoneNumber'=>'0251111113','LastName'=>'Anny','FirstName'=>'Kate'
       ]);
        $supplier->save();
        $supplier=new \App\Supplier(['EmailAddress'=>'JackM@sina.com','Address'=>'22 Mandival Avenue',
        'MobilePhoneNumber'=>'0251111114','LastName'=>'Jack','FirstName'=>'Micheal'
       ]);
        $supplier->save();
        $supplier=new \App\Supplier(['EmailAddress'=>'OwenM@yahoo.com','Address'=>'22 Flatbush Avenue',
            'MobilePhoneNumber'=>'0251111115','LastName'=>'Mick','FirstName'=>'Owen'
        ]);
        $supplier->save();

    }

}
