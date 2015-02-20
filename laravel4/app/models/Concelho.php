<?php

class Concelho extends \Eloquent {

	/**
	 * @var string
	 */
	protected $table = 'concelhos';

	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var array
	 */
	protected $fillable = [
		'distrito_id',
		'name',
	];

	/**
	 * @var array
	 */
	public static $rules = [
		'name' 	=> 'required'
	];


	/**
	 * Set true if timestamps needed
	 * Remember to uncomment timestamp creation on migration file
	 * @var bool
	 */
	public $timestamps = false;

}