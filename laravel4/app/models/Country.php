<?php

class Country extends \Eloquent {

	/**
	 * @var string
	 */
	protected $table    = 'countries';

	/**
	 * @var array
	 */
	protected $guarded  = ['id'];

	/**
	 * @var array
	 */
	protected $fillable = ['name', 'country_code'];

	/**
	 * @var array
	 */
	public static $rules = [
		'name'           => 'required|unique:countries',
	    'country_code'   => 'required|unique:countries|size:2'
	];

	/**
	 * Set true if timestamps needed
	 * Remember to uncomment timestamp creation on migration file
	 * @var bool
	 */
	public $timestamps = false;
	
	
}

