<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data-select';

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
        // Вывод всех записей
        // $employees = Employee::all();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . PHP_EOL;
        // }


        // Вывод по значению
        // $employees = Employee::find(2);
        // echo  $employees->first_name . ' ' . $employees->id . PHP_EOL;


        // Вывод по значению сложный
        // $employees = Employee::where('first_name', '=', 'Keiran')->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . PHP_EOL;
        // }


        // Вывод по значению сложный
        // $employees = Employee::where('first_name', '=', 'Keiran')->where('age', '>', '30')->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . PHP_EOL;
        // }


        // Сортировка (asc и desc порядок)
        // $employees = Employee::orderBy('age', 'desc')->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . ' ' . $employee->age . PHP_EOL;
        // }


        // Сортировка и количество (limit)
        // $employees = Employee::orderBy('age', 'desc')->limit(2)->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . ' ' . $employee->age . PHP_EOL;
        // }


        // Сортировка и количество (limit) и пропуск 2-х строк (skip(2))
        // $employees = Employee::orderBy('age', 'desc')->skip(2)->limit(2)->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->id . ' ' . $employee->age . PHP_EOL;
        // }


        // $employees = DB::table('employees')->groupBy('first_name')->select('first_name', DB::raw('count(1) as employee_total'))->get();
        // foreach ($employees as $employee) {
        //     echo  $employee->first_name . ' ' . $employee->employee_total . PHP_EOL;
        // }


        $employees = Employee::distinct()->get(['first_name']);
        foreach ($employees as $employee) {
            echo  $employee->first_name . PHP_EOL;
        }
    }
}
