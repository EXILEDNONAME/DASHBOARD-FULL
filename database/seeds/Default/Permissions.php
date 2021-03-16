<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Permission;

class Permissions extends Seeder
{

  public function run()
  {
    $data = [
      [
        'name'              => 'Administrator',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'Operator',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'User',
        'created_at'        => Carbon::now(),
      ],
    ];

    Permission::insert($data);
  }
}
