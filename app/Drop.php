<?php namespace Knowledgedrop;

use Illuminate\Database\Eloquent\Model;

class Drop extends Model {

	protected $table = 'drops';

    protected $fillable = ['name', 'email', 'text'];

   public function category()
   {
       $this->belongsTo('Knowledgedrop\Category');
   }

}
