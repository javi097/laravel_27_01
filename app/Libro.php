<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable=['titulo', 'sinopsis', 'pvp', 'stock', 'isbn'];

    //Query scopes
    public function scopeTitulo($query,$text){
        return $query->where('titulo','like',"%$text%");
    }

    public function scopeSinopsis($query,$text){
        return $query->where('sinopsis','like',"%$text%");
    }
    public function scopeSelect($query,$text){

        if($text == 'option1'){
            return $query->where('pvp','<',20);
        }else if($text == 'option2'){
            return $query->whereBetween('pvp',[20,50]);
        }else if($text == 'option3'){
            return $query->where('pvp','>',50);
        }
        
    }
}



