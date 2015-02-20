<?php

class Distrito extends \Eloquent {

	/**
	 * @var string
	 */
	protected $table    = 'distritos';

	/**
	 * @var array
	 */
	protected $guarded  = ['id'];

	/**
	 * @var array
	 */
	protected $fillable = [
		'country_id',
		'name'
	];

	/**
	 * @var array
	 */
	public static $rules = [
		'name' 		 => 'required'
	];

	/**
	 * Set true if timestamps needed
	 * Remember to uncomment timestamp creation on migration file
	 * @var bool
	 */
	public $timestamps = false;

}