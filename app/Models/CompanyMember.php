<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyMember extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'companymembers';
    protected $guarded = ['id'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function company(){

        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
