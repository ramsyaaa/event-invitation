<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestList extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guest_lists';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['uuid', 'invitation_id', 'accepted_email', 'presence_status'];

    

}
