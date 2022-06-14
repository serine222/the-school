<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
<<<<<<< HEAD
    public $fillabale =['filename ','imageable_id','imageable_type'];
    
=======
    public $fillable= ['filename','imageable_id','imageable_type'];

>>>>>>> 28eda57 (Students_Promotions_managemen)
    public function imageable()
    {
        return $this->morphTo();
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 28eda57 (Students_Promotions_managemen)
