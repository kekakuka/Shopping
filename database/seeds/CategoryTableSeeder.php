<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new \App\Category(['Name'=>'Maori Gift','Description'=>'The gifts from New Zealand']);
        $category->save();
        $category=new \App\Category(['Name'=>'Chinese Gift','Description'=>'The gifts from China']);
        $category->save();
        $category=new \App\Category(['Name'=>'Egyptian Gift','Description'=>'The gifts from Egypt']);
        $category->save();
        $category=new \App\Category(['Name'=>'Indian Gift','Description'=>'The gifts from India']);
        $category->save();
        $category=new \App\Category(['Name'=>'Roman Gift','Description'=>'The gifts from Roma']);
        $category->save();
        $category=new \App\Category(['Name'=>'Japanese Gift','Description'=>'The gifts from Japan']);
        $category->save();
    }
}
