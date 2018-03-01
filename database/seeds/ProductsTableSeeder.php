<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Браслет "Конопля"',
                'alias' => 'braslet-konoplya',
                'about' => '',
                'category_id' => '1',
                'price' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Triangle"',
                'alias' => 'braslet-triangle',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Boo!"',
                'alias' => 'braslet-boo',
                'about' => '',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Орнамент"',
                'alias' => 'braslet-ornament',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Веселка"',
                'alias' => 'braslet-veselka',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Born to Die"',
                'alias' => 'braslet-born-to-die',
                'about' => '',
                'category_id' => '1',
                'price' => '90',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Небо"',
                'alias' => 'braslet-nebo',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Все уруру"',
                'alias' => 'braslet-vse-ururu',
                'about' => '',
                'category_id' => '1',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Смайли"',
                'alias' => 'braslet-smayly',
                'about' => '',
                'category_id' => '1',
                'price' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Будь добрим"',
                'alias' => 'braslet-bud-dobrym',
                'about' => '',
                'category_id' => '1',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Cookie"',
                'alias' => 'braslet-cookie',
                'about' => '',
                'category_id' => '1',
                'price' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Звичайний"',
                'alias' => 'braslet-zvychaynyy',
                'about' => '',
                'category_id' => '1',
                'price' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Піца"',
                'alias' => 'braslet-piza',
                'about' => '',
                'category_id' => '1',
                'price' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслети "I love yoi"',
                'alias' => 'braslety-i-love-you',
                'about' => '',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Лисиця"',
                'alias' => 'braslet-lysytsya',
                'about' => '',
                'category_id' => '1',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Весняні квіти"',
                'alias' => 'braslet-vesnyani-kvity',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Патріотичний зі стрічок"',
                'alias' => 'braslet-patriotychnyy-zi-strichok',
                'about' => '',
                'category_id' => '1',
                'price' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Котик"',
                'alias' => 'braslet-kotyk',
                'about' => '',
                'category_id' => '1',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Ведмідь"',
                'alias' => 'braslet-vedmid',
                'about' => '',
                'category_id' => '1',
                'price' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "A Complaint Free World"',
                'alias' => 'braslet-a-complaint-free-world',
                'about' => '',
                'category_id' => '1',
                'price' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Asking Alexandria"',
                'alias' => 'braslet-asking-alexandria',
                'about' => '',
                'category_id' => '1',
                'price' => '120',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Джгут монаха"',
                'alias' => 'braslet-dzhhut-monakha',
                'about' => '',
                'category_id' => '1',
                'price' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Панда"',
                'alias' => 'braslet-panda',
                'about' => '',
                'category_id' => '1',
                'price' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Кити"',
                'alias' => 'braslet-kyty',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "З тризубцем"',
                'alias' => 'braslet-z-tryzubtsem',
                'about' => '',
                'category_id' => '1',
                'price' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Хрест Лади Богородиці" темний',
                'alias' => 'braslet-khrest-lady-bohorodytsi-temnyi',
                'about' => '',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Якорі"',
                'alias' => 'braslet-yakori',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Шамбала" рожевий',
                'alias' => 'braslet-shambala-rozhevyy',
                'about' => '',
                'category_id' => '1',
                'price' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Шамбала" жовтий',
                'alias' => 'braslet-shambala-zhovtyy',
                'about' => '',
                'category_id' => '1',
                'price' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Тедді"',
                'alias' => 'braslet-teddy',
                'about' => '',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Нічне місто"',
                'alias' => 'braslet-nichne-misto',
                'about' => '',
                'category_id' => '1',
                'price' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Хрест Лади Богородиці" світлий',
                'alias' => 'braslet-khrest-lady-bohorodytsi-svitlyy',
                'about' => '',
                'category_id' => '1',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Сердечка"',
                'alias' => 'braslet-serdechka',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Серця"',
                'alias' => 'braslet-sertsya',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Pacman"',
                'alias' => 'braslet-pacman',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Полуниці"',
                'alias' => 'braslet-polunytsi',
                'about' => '',
                'category_id' => '1',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Катюша"',
                'alias' => 'braslet-katyusha',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Анжеліка"',
                'alias' => 'braslet-anzhelika',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Бетмен"',
                'alias' => 'braslet-batman',
                'about' => '',
                'category_id' => '1',
                'price' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Золотий"',
                'alias' => 'braslet-zolotyy',
                'about' => '',
                'category_id' => '1',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Прапор України"',
                'alias' => 'braslet-prapor-ukrayiny',
                'about' => '',
                'category_id' => '1',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Браслет "Books"',
                'alias' => 'braslet-books',
                'about' => '',
                'category_id' => '1',
                'price' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Сережки "Серце"',
                'alias' => 'serezhky-sertse',
                'about' => '',
                'category_id' => '2',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Triangle"',
                'alias' => 'serezhky-triangle',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Сіней"',
                'alias' => 'serezhky-siney',
                'about' => '',
                'category_id' => '2',
                'price' => '117',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Квіточки"',
                'alias' => 'serezhky-kvitochky',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Джеміні"',
                'alias' => 'serezhky-gemini',
                'about' => '',
                'category_id' => '2',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Кавунчики"',
                'alias' => 'serezhky-kavunchyky',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Зелені"',
                'alias' => 'serezhky-zeleni',
                'about' => '',
                'category_id' => '2',
                'price' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Ажурні"',
                'alias' => 'serezhky-azurni',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Трикутники"',
                'alias' => 'serezhky-trikutnyky',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Сніговички"',
                'alias' => 'serezhky-snihovychky',
                'about' => '',
                'category_id' => '2',
                'price' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Індія"',
                'alias' => 'serezhky-india',
                'about' => '',
                'category_id' => '2',
                'price' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Черепки"',
                'alias' => 'serezhky-cherepky',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Ялиночки"',
                'alias' => 'serezhky-yalinochky',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Сови"',
                'alias' => 'serezhky-sovy',
                'about' => '',
                'category_id' => '2',
                'price' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Привиди"',
                'alias' => 'serezhky-pryvydy',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Карти"',
                'alias' => 'serezhky-karty',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Піано"',
                'alias' => 'serezhky-piano',
                'about' => '',
                'category_id' => '2',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Лисички"',
                'alias' => 'serezhky-lysychky',
                'about' => '',
                'category_id' => '2',
                'price' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Вишеньки"',
                'alias' => 'serezhky-vyshny',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Пазли"',
                'alias' => 'serezhky-pazly',
                'about' => '',
                'category_id' => '2',
                'price' => '85',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Вишеньки"',
                'alias' => 'serezhky-vyshenky',
                'about' => '',
                'category_id' => '2',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Сережки "Чорна кішка"',
                'alias' => 'serezhky-chorna-kyshka',
                'about' => '',
                'category_id' => '2',
                'price' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Брелок "З тризубцем"',
                'alias' => 'brelok-z-tryzubzem',
                'about' => '',
                'category_id' => '3',
                'price' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Брелок "З прапором"',
                'alias' => 'brelok-z-praporom',
                'about' => '',
                'category_id' => '3',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Брелок "Овен"',
                'alias' => 'brelok-oven',
                'about' => '',
                'category_id' => '3',
                'price' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Колечко "Геометрія"',
                'alias' => 'kolechko-geometria',
                'about' => '',
                'category_id' => '4',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Колечко "Звичайне"',
                'alias' => 'kolechko-zvychayne',
                'about' => '',
                'category_id' => '4',
                'price' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Колечко "Чарівна ніч"',
                'alias' => 'kolechko-charyvna-nich',
                'about' => '',
                'category_id' => '4',
                'price' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Кулон "Чокер Чарівна ніч"',
                'alias' => 'kulon-choker-charyvna-nich',
                'about' => '',
                'category_id' => '5',
                'price' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Кулон "Тату чокер"',
                'alias' => 'kulon-tatu-choker',
                'about' => '',
                'category_id' => '5',
                'price' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Кулон "Супермен"',
                'alias' => 'kulon-superman',
                'about' => '',
                'category_id' => '5',
                'price' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Брошка "Великобританія"',
                'alias' => 'broshka-velykobritaniia',
                'about' => '',
                'category_id' => '6',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Брошка "Гамбургер"',
                'alias' => 'broshka-gamburger',
                'about' => '',
                'category_id' => '6',
                'price' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Резинки "Свинка Пеппа"',
                'alias' => 'rezinki-svynka-peppa',
                'about' => '',
                'category_id' => '7',
                'price' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Комплект з бісеру "Triangle"',
                'alias' => 'komplekt-z-biseru-triangle',
                'about' => '',
                'category_id' => '8',
                'price' => '90',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Комплект з бісеру "Піано"',
                'alias' => 'komplekt-z-biseru-piano',
                'about' => '',
                'category_id' => '8',
                'price' => '85',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Комплект з бісеру "Сніговички"',
                'alias' => 'komplekt-z-biseru-snigovychky',
                'about' => '',
                'category_id' => '8',
                'price' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Комплект з бісеру "Чарівна ніч"',
                'alias' => 'komplekt-z-biseru-charivna-nich',
                'about' => '',
                'category_id' => '8',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
