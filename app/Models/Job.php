<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job
{
   public static function all(): array{
    return [
        ['title' => 'software engineering', 'salary' => '1500$'],
        ['title' => 'Graphic Designer', 'salary' => '1000$']
    ];
   }
}
