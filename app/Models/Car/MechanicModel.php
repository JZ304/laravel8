<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MechanicModel extends Model
{
    use HasFactory;

    protected $table = 'car_mechanic';

    public function carOwner()
    {
        // 第三个参数是中间模型上外键的名称。第四个参数是最终模型上外键的名称。第五个参数是本地键，而第六个参数是中间模型的本地键
        return $this->hasOneThrough('App\Models\Car\OwnersModel','App\Models\Car\CarsModel','mechanic_id','car_id','id','id');
    }
}
