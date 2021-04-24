<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class trainers extends Model
{
    protected $table = 'trainer';
     
   public function search($key)
   {
      $result =  $this->where('Trainer__name','LIKE', "%{$key}%")
               ->orWhere('Trainer_email','LIKE', "%{$key}%")
               ->orWhere('trainer_id','LIKE', "%{$key}%")
               ->orWhere('Trainer_phone','LIKE', "%{$key}%")
               ->orWhere('Trainer_id','LIKE', "%{$key}%")
               ->orWhere('company_id','LIKE', "%{$key}%")
               ->paginate(25);
            return $result;   
               
   }
   public function getAll()
   {
       return Trainers::$table;
   }
}
