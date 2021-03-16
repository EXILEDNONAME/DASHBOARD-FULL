<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class Roles extends Seeder
{

  public function run()
  {
    $data = [
      [
        'id_permission'     => '1',
        'name'              => 'Administrator',
        'created_at'        => Carbon::now(),
      ],
      [
        'id_permission'     => '2',
        'name'              => 'Operator',
        'created_at'        => Carbon::now(),
      ],
      [
        'id_permission'     => '3',
        'name'              => 'User',
        'created_at'        => Carbon::now(),
      ],
    ];

    Role::insert($data);
  }
}
