<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomscategorie','imagescategorie','categorieID'
    ];
    //ki notlb mnou info mtaa souscategorie yaaml jointure maa l categorie w yaatini tous les info al categories 
   //nhoto esm l class li bch torbot biha
    public function categories()
{
      return $this->belongsTo(Categorie::class,"categorieID");
}
    public function article()
{
       return $this->hasMany(Article::class,"scategorieID");
}
}

