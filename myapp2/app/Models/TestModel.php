<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    //
    use HasFactory;
    private $table = 'test';
    protected $connection = 'sec_mysql';
    protected $primary_ley = 'test_id';
    public $incremetning = true;
    public $timestamps = true;
    protected $attributes = ['test_attributes1', 'test_attributes2'];
}
