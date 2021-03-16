<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Permission;

class Role extends Model {

  use LogsActivity;

  protected $table = 'roles';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function permissions(){
    return $this->belongsTo(Permission::class, 'id_permission');
  }

}
