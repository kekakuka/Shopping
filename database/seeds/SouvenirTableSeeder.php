<?php

use Illuminate\Database\Seeder;

class SouvenirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $souvenir = new \App\Souvenir(['Name' => 'Milk Wax', 'Description' => 'This is a Milk Wax',
            'Price' =>44, 'supplier_id' =>1, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L30.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Series Jewelries', 'Description' => 'This is a Series of Jewelries',
            'Price' =>2599, 'supplier_id' =>4, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L33.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Crystal', 'Description' => 'This is a Crystal',
            'Price' =>322, 'supplier_id' =>2, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L36.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Roma Cross', 'Description' => 'This is a Roma Cross',
            'Price' =>288, 'supplier_id' =>2, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L37.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Cat Necklace', 'Description' => 'This is a Cat Necklace',
            'Price' =>248, 'supplier_id' =>4, 'category_id' =>3, 'PathOfFile' => '/Public/Images/SouvenirImages/E30.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Qipao China', 'Description' => 'This is a Qipao China',
            'Price' =>98, 'supplier_id' =>1, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C32.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Stone Carving', 'Description' => 'This is a Stone Carving',
            'Price' =>399, 'supplier_id' =>3, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L02.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Jade Bowl', 'Description' => 'This is a Jade Bowl',
            'Price' =>588, 'supplier_id' =>3, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C16.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Qing Necklace', 'Description' => 'This is a Qing Necklace',
            'Price' =>238, 'supplier_id' =>3, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C30.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Indian Ring', 'Description' => 'This is a Indian Ring',
            'Price' =>139, 'supplier_id' =>2, 'category_id' =>4, 'PathOfFile' => '/Public/Images/SouvenirImages/I30.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Indian Pot', 'Description' => 'This is a Indian Pot',
            'Price' => 399 , 'supplier_id' =>3, 'category_id' =>4, 'PathOfFile' => '/Public/Images/SouvenirImages/I31.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Flower Necklace', 'Description' => 'This is a Flower Necklace',
            'Price' =>38, 'supplier_id' =>2, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L34.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Landscape Fan', 'Description' => 'This is a Landscape Fan',
            'Price' =>78, 'supplier_id' =>3, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C13.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Testacean Bowl', 'Description' => 'This is a Testacean Bowl',
            'Price' =>49, 'supplier_id' =>1, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M09.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Indian Necklace', 'Description' => 'This is an Indian Necklace',
            'Price' =>2999, 'supplier_id' =>4, 'category_id' =>4, 'PathOfFile' => '/Public/Images/SouvenirImages/I09.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Dragon', 'Description' => 'This is a Wooden Dragon',
            'Price' =>238, 'supplier_id' =>2, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C05.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Sancai Horse', 'Description' => 'This is a Sancai horse from Tang Dynasty',
            'Price' =>4888, 'supplier_id' =>2, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C15.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Bone China', 'Description' => 'This is a Bone China',
            'Price' =>498, 'supplier_id' =>4, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C17.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Song teapot', 'Description' => 'This is a teapot from Sang Dynasty',
            'Price' =>7898, 'supplier_id' =>1, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C18.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Dragon Bottle', 'Description' => 'This is a Dragon Bottle',
            'Price' =>2238, 'supplier_id' =>2, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C19.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Opera Dolls', 'Description' => 'This is a pair of Opera Dolls',
            'Price' =>38, 'supplier_id' =>3, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C20.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Monkey King', 'Description' => 'This is a Monkey King doll',
            'Price' =>48, 'supplier_id' =>4, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C21.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Dony Model', 'Description' => 'This is a Dony Model',
            'Price' =>79, 'supplier_id' =>5, 'category_id' =>6, 'PathOfFile' => '/Public/Images/SouvenirImages/J01.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Solong Model', 'Description' => 'This is a Solong Model',
            'Price' =>78, 'supplier_id' =>2, 'category_id' =>6, 'PathOfFile' => '/Public/Images/SouvenirImages/J03.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Roman Building', 'Description' => 'This is Roma Building model',
            'Price' =>199, 'supplier_id' =>2, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L01.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Carving Women', 'Description' => 'This is a Stone Carving Women',
            'Price' =>99, 'supplier_id' =>4, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L05.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Sketch', 'Description' => 'This is a great painters work which is a sketch of Audrey Hepburn',
            'Price' =>30, 'supplier_id' =>2, 'category_id' =>5, 'PathOfFile' => '/Public/Images/SouvenirImages/L06.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Silver Hook', 'Description' => 'This is a Silver Hooked pendant',
            'Price' =>99, 'supplier_id' =>1, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M01.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Kiwi Bird', 'Description' => 'This is a Kiwi Bird pendant and a pair of earrings',
            'Price' =>189, 'supplier_id' =>2, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M02.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Totem', 'Description' => 'This is a Maoris unique Maori wooden totem',
            'Price' =>79, 'supplier_id' =>3, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M03.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Face', 'Description' => 'This is a Maori Wooden Face',
            'Price' =>39, 'supplier_id' =>1, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M20.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Box', 'Description' => 'This is a Maori Wooden Box',
            'Price' =>9, 'supplier_id' =>2, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M21.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Mask', 'Description' => 'This is a Maoris unique Wooden Mask',
            'Price' =>19, 'supplier_id' =>3, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M22.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Mask', 'Description' => 'This is Maori Mask',
            'Price' =>29, 'supplier_id' =>4, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M23.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wooden Totem2', 'Description' => 'This is anther Maoris unique Maori wooden totem',
            'Price' =>79, 'supplier_id' =>4, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M04.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Wool doll', 'Description' => 'There are three Wool dolls',
            'Price' =>39, 'supplier_id' =>1, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M05.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Spiral Jade', 'Description' => 'This is a Spiral Jade pendant',
            'Price' =>249, 'supplier_id' =>2, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M06.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Spiral Ring', 'Description' => 'his is a silver Spiral Ring',
            'Price' =>69, 'supplier_id' =>3, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M07.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Maori Woman', 'Description' => 'This is a picture of a Maori Women',
            'Price' =>239, 'supplier_id' =>4, 'category_id' =>1, 'PathOfFile' => '/Public/Images/SouvenirImages/M08.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir(['Name' => 'Opera Doll', 'Description' => 'This is a Opera Doll',
            'Price' =>48, 'supplier_id' =>3, 'category_id' =>2, 'PathOfFile' => '/Public/Images/SouvenirImages/C35.jpg']);
        $souvenir->save();
        $souvenir = new \App\Souvenir([ 'Name' => 'Silver Face','Description' => 'This is a Silver Face pendant','Price' => 89,'supplier_id' => 2,'category_id' => 1,'PathOfFile' => '/Public/Images/SouvenirImages/M10.jpg']);$souvenir->save();
                    $souvenir = new \App\Souvenir([ 'Name' => 'Spiral Pendant','Description' => 'This is a colorful Spiral pendant','Price' => 279,'supplier_id' => 3,'category_id' => 1,'PathOfFile' => '/Public/Images/SouvenirImages/M11.jpg']);$souvenir->save();
                      $souvenir =new \App\Souvenir([ 'Name' => 'Red Jade','Description' => 'This is a Red Spiral Jade pendant','Price' => 99,'supplier_id' => 1,'category_id' => 1,'PathOfFile' => '/Public/Images/SouvenirImages/M13.jpg']);$souvenir->save();
                        $souvenir = new \App\Souvenir([ 'Name' => 'Paper Bridge','Description' => 'This is a Paper Bridge','Price' => 58,'supplier_id' => 3,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C02.jpg']);$souvenir->save();
                            $souvenir = new \App\Souvenir([ 'Name' => 'Wooden Moer','Description' => 'This is a Wooden Moer for smoke','Price' => 38,'supplier_id' => 3,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C06.jpg']);$souvenir->save();
                             $souvenir =new \App\Souvenir([ 'Name' => 'Bronze Soldier','Description' => 'There are two Bronze Soldiers','Price' => 498,'supplier_id' => 4,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C07.jpg']);$souvenir->save();
                              $souvenir = new \App\Souvenir([ 'Name' => 'Blossom Fan','Description' => 'This is a Blossom Fan','Price' => 68,'supplier_id' => 1,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C08.jpg']);$souvenir->save();

                               $souvenir = new \App\Souvenir([ 'Name' => 'Porcelain Bowl','Description' => 'This is expensive Porcelain Bowl','Price' => 1999,'supplier_id' => 2,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C09.jpg']);$souvenir->save();
                                $souvenir =new \App\Souvenir([ 'Name' => 'Wooden Chess','Description' => 'This is a Wooden Chess','Price' => 198,'supplier_id' => 3,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C10.jpg']);$souvenir->save();
                                 $souvenir =new \App\Souvenir([ 'Name' => 'Silk Fan','Description' => 'This is a Silk Fan','Price' => 98,'supplier_id' => 4,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C11.jpg']);$souvenir->save();
                                  $souvenir = new \App\Souvenir([ 'Name' => 'Pearl Necklace','Description' => 'This is a real Pearl Necklace','Price' => 298,'supplier_id' => 2,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C12.jpg']);$souvenir->save();
                               $souvenir = new \App\Souvenir([ 'Name' => 'Wooden Book','Description' => 'This is a silver wooden book','Price' => 49,'supplier_id' => 4,'category_id' => 1,'PathOfFile' => '/Public/Images/SouvenirImages/M12.jpg']);$souvenir->save();
                $souvenir = new \App\Souvenir([ 'Name' => 'Egyptian Cat','Description' => 'This is a Egyptian Cat','Price' => 198,'supplier_id' => 4,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E12.jpg']);$souvenir->save();
                                    $souvenir = new \App\Souvenir([ 'Name' => 'Chinese Doll','Description' => 'This is a Chinese Doll','Price' => 38,'supplier_id' => 2,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C14.jpg']);$souvenir->save();
                                        $souvenir =new \App\Souvenir([ 'Name' => 'Sand Bag','Description' => 'This is a Sand Bag','Price' => 79,'supplier_id' => 2,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E01.jpg']);$souvenir->save();
                                            $souvenir = new \App\Souvenir([ 'Name' => 'Bronze Pot','Description' => 'This is a Bronze Pot','Price' => 69,'supplier_id' => 3,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E02.jpg']);$souvenir->save();

                                                $souvenir = new \App\Souvenir([ 'Name' => 'Bronze Sphinx','Description' => 'This is a Bronze Sphinx','Price' => 399,'supplier_id' => 2,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E03.jpg']);$souvenir->save();
                                        $souvenir = new \App\Souvenir([ 'Name' => 'Eye Ring','Description' => 'This is a silver Eye Ring','Price' => 49,'supplier_id' => 1,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E04.jpg']);$souvenir->save();
                                      $souvenir = new \App\Souvenir([ 'Name' => 'Silver Azir','Description' => 'This is a Silver Azir who is the king of sand','Price' => 399,'supplier_id' => 4,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E05.jpg']);$souvenir->save();
                             $souvenir = new \App\Souvenir([ 'Name' => 'Wooden Jade','Description' => 'This is a Wooden Jade pendant','Price' => 99,'supplier_id' => 1,'category_id' => 1,'PathOfFile' => '/Public/Images/SouvenirImages/M16.jpg']);$souvenir->save();
                $souvenir = new \App\Souvenir([ 'Name' => 'Pyramid','Description' => 'This is a magical Pyramid','Price' => 1399,'supplier_id' => 2,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E06.jpg']);$souvenir->save();
                                $souvenir = new \App\Souvenir([ 'Name' => 'Chopsticks','Description' => 'There are two pairs of Chopsticks','Price' => 48,'supplier_id' => 2,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C01.jpg']);$souvenir->save();
                $souvenir = new \App\Souvenir([ 'Name' => 'Egyptian Cat','Description' => 'This is a pair Egyptian Cats','Price' => 399,'supplier_id' => 2,'category_id' => 3,'PathOfFile' => '/Public/Images/SouvenirImages/E07.jpg']);$souvenir->save();
                                   $souvenir = new \App\Souvenir([ 'Name' => 'Bronze Elephant','Description' => 'This is a Bronze Elephant','Price' => 299,'supplier_id' => 2,'category_id' => 4,'PathOfFile' => '/Public/Images/SouvenirImages/I01.jpg']);$souvenir->save();
                                 $souvenir = new \App\Souvenir([ 'Name' => 'Bronze Tower','Description' => 'This is a Bronze Tower','Price' => 199,'supplier_id' => 1,'category_id' => 4,'PathOfFile' => '/Public/Images/SouvenirImages/I02.jpg']);$souvenir->save();
                                     $souvenir = new \App\Souvenir([ 'Name' => 'Wooden Pot','Description' => 'This is a Wooden Pot','Price' => 39,'supplier_id' => 3,'category_id' => 4,'PathOfFile' => '/Public/Images/SouvenirImages/I03.jpg']);$souvenir->save();
                             $souvenir = new \App\Souvenir([ 'Name' => 'Dragon Jade','Description' => 'This is a Dragon Jade pendant','Price' => 898,'supplier_id' => 1,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C04.jpg']);$souvenir->save();

                 $souvenir = new \App\Souvenir([ 'Name' => 'Wooden Box','Description' => 'This is a Wooden Box','Price' => 89,'supplier_id' => 4,'category_id' => 4,'PathOfFile' => '/Public/Images/SouvenirImages/I12.jpg']);$souvenir->save();
                           $souvenir = new \App\Souvenir([ 'Name' => 'China Doll','Description' => 'This is a China Doll','Price' => 78,'supplier_id' => 2,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C34.jpg']);$souvenir->save();
                           $souvenir = new \App\Souvenir([ 'Name' => 'Butterfly','Description' => 'This is a butterfly','Price' => 148,'supplier_id' => 3,'category_id' => 4,'PathOfFile' => '/Public/Images/SouvenirImages/E32.jpg']);$souvenir->save();
                         $souvenir = new \App\Souvenir([ 'Name' => 'Song China','Description' => 'This is a Song China','Price' => 1498,'supplier_id' => 4,'category_id' => 2,'PathOfFile' => '/Public/Images/SouvenirImages/C33.jpg']);$souvenir->save();
            $souvenir = new \App\Souvenir([ 'Name' => 'Roma Helmet','Description' => 'This is a Roma Helmet','Price' => 79,'supplier_id' => 3,'category_id' => 5,'PathOfFile' => '/Public/Images/SouvenirImages/L31.jpg']);$souvenir->save();
                                 $souvenir = new \App\Souvenir([ 'Name' => 'Silver House','Description' => 'This is a silver house','Price' => 29,'supplier_id' => 5,'category_id' => 5,'PathOfFile' => '/Public/Images/SouvenirImages/L32.jpg']);$souvenir->save();
                                   $souvenir = new \App\Souvenir([ 'Name' => 'Stone Woman','Description' => 'This is a Stone Woman','Price' => 256,'supplier_id' => 3,'category_id' => 5,'PathOfFile' => '/Public/Images/SouvenirImages/L35.jpg']);$souvenir->save();
        $souvenir = new \App\Souvenir([ 'Name' => 'Crystal Heart','Description' => 'This is a Crystal Heart','Price' => 22,'supplier_id' => 5,'category_id' => 5,'PathOfFile' => '/Public/Images/SouvenirImages/L38.jpg']);$souvenir->save();
    }
}
