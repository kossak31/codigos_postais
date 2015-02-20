<?php

class CodigosPostais extends \Eloquent {

	/**
	 * @var string
	 */
	protected $table    = 'codigos_postais';

	/**
	 * @var array
	 */
	protected $guarded  = ['id'];

	/**
	 * @var array
	 */
	protected $fillable = [
		'distrito_id',
		'concelho_id',
	    'cp',
	    'localidade',
	    'cp_alfa'
	];

	/**
	 * @var array
	 */
	public static $rules = [
		'cp'         => ['required', 'unique:codigos_postais', 'max:8', 'regex:/^\d{4}-\d{1,3}$/'],
		'localidade' => 'required|alpha|max:100',
	    'cp_alfa'    => 'required|alpha|max:30'
	];

	/**
	 * Set true if timestamps needed
	 * Remember to uncomment timestamp creation on migration file
	 * @var bool
	 */
	public $timestamps = false;
	

}