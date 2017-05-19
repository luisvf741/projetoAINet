<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  
    protected $fillable = [
        'id', 'status', 'due_date', 'description', 'quantity','paper_size','paper_type','file','closed_date', 'refused_reason', 'satisfaction_grade', 'colored', 'stapled', 'front_back', 'owner_id', 'printer_id', 'closed_user_id',
    ];
    
}
