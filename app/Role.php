<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Access;

class Role extends Model {

  use LogsActivity;

  protected $table = 'roles';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function accesses(){
    return $this->belongsTo(Access::class, 'id_access');
  }

}
