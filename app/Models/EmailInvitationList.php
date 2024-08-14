<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailInvitationList extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'email_invitation_lists';

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
    protected $fillable = ['invitation_id', 'email', 'status', 'read_at', 'accepted_at'];

    

}
