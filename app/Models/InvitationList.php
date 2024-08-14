<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationList extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invitation_lists';

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
    protected $fillable = ['company_category_id', 'company_subcategory_id', 'company_name', 'name', 'title', 'salutation', 'phone_number', 'business_line'];

    

}
