<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\FrontendManage\Database\Seeders\FrontendManageDatabaseSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [
            UserSeeder::class,
            \Modules\CourseSetting\Database\Seeders\CourseSettingDatabaseSeeder::class,
            \Modules\SystemSetting\Database\Seeders\SystemSettingDatabaseSeeder::class,
            \Modules\Payment\Database\Seeders\PaymentDatabaseSeeder::class,
            FrontendManageDatabaseSeeder::class,
            \Modules\Quiz\Database\Seeders\QuizDatabaseSeeder::class,
            \Modules\Blog\Database\Seeders\BlogDatabaseSeeder::class,
            \Modules\VirtualClass\Database\Seeders\VirtualClassDatabaseSeeder::class,
            \Modules\Certificate\Database\Seeders\CertificateDatabaseSeeder::class,
        ];

        foreach ($seeders as $seeder) {
            try {
                $this->call($seeder);
            } catch (\Throwable $e) {
                $this->command?->warn("Skipped {$seeder}: " . $e->getMessage());
            }
        }
    }
}
