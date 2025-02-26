<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test_insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Создать запись в бд
        // $employee = new Employee();
        // $employee->first_name = 'Alex';
        // $employee->age = '51';
        // $employee->save();

        // Редактировать запись в бд
        // $employee = Employee::where('id', 1)->first();
        // $employee->first_name = 'Keiran';
        // $employee->save();

        // Удалить запись в бд
        // $employee = Employee::where('id', 1)->delete();

        // Запуск команды в терминале
        // php artisan database:test_insert
    }
}
