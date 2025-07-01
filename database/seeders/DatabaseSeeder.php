<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Building;
use App\Models\Company;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Activity::forceDestroy([
            1,2,3,4,5,6,7,8
        ]);

        Activity::factory()->createMany([
            [
                'id' => 1,
                'title' => 'Еда',
                'activity_id' => 0,
            ],
            [
                'id' => 2,
                'title' => 'Мясная продукция',
                'activity_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Молочная продукция',
                'activity_id' => 1,
            ],
            [
                'id' => 4,
                'title' => 'Автомобили',
                'activity_id' => 0,
            ],
            [
                'id' => 5,
                'title' => 'Грузовые',
                'activity_id' => 4,
            ],
            [
                'id' => 6,
                'title' => 'Легковые',
                'activity_id' => 4,
            ],
            [
                'id' => 7,
                'title' => 'Запчасти',
                'activity_id' => 6,
            ],
            [
                'id' => 8,
                'title' => 'Аксессуары',
                'activity_id' => 6,
            ]
        ]);

        Building::forceDestroy([1,2,3]);

        Building::factory()->createMany([
            [
                'id' => 1,
                'address' => 'улица Гавена, 20А, Севастополь 299028',
                'latitude' => 44.604392,
                'longitude' => 33.484801,
            ],
            [
                'id' => 2,
                'address' => 'улица Надежды Островской, 14А, Севастополь, 299028',
                'latitude' => 44.603507,
                'longitude' => 33.486508,
            ],
            [
                'id' => 3,
                'address' => 'проспект Юрия Гагарина, 13, Севастополь',
                'latitude' => 44.599649,
                'longitude' => 33.485969,
            ]
        ]);

        Company::forceDestroy([1,2,3,4,5]);
        Company::factory()->createMany([
            [
                'id' => 1,
                'title' => 'Продуктовый магазин на Гавена 20А',
                'building_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Магазин "Автозапчасти" на Гавена 20А',
                'building_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Мясной магазин на Надежды Островской, 14А',
                'building_id' => 2,
            ],
            [
                'id' => 4,
                'title' => 'Автозапчасти на Гагарина 13',
                'building_id' => 3,
            ],
            [
                'id' => 5,
                'title' => 'СТО на Гагарина 13',
                'building_id' => 3,
            ]
        ]);

        DB::table('company_activity')->truncate();
        DB::table('company_activity')->insert([
            [
                'company_id' => 5,
                'activity_id' => 4,
            ],
            [
                'company_id' => 1,
                'activity_id' => 1,
            ],
            [
                'company_id' => 4,
                'activity_id' => 7,
            ],
            [
                'company_id' => 4,
                'activity_id' => 8,
            ],
        ]);


    }
}
