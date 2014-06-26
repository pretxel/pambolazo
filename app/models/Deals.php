<?php
// use Jenssegers\Mongodb\Model as Eloquent;

class Deals extends Eloquent {
	
	 // protected $collection = 'partidos';
	protected $connection = 'pgsql';
	protected $table = 'deals';
	public $timestamps = false;


}