<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesi';

    //tak lalu form
    protected $guarded = [];

    //Accessor
    public function getCreatedAtFormatAttribute() {
    	return $this->created_at->format('d M Y');

    }
}
