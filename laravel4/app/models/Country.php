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
	 * Set true if timestamps needed
	 * Remember to uncomment timestamp creation on migration file
	 * @var bool
	 */
	public $timestamps = false;

	/*
	|--------------------------------------------------------------------------
	| RELATIONSHIPS
	|--------------------------------------------------------------------------
	*/

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function distrito()
	{
		return $this
			->belongsTo('Distrito', 'country_id', 'id');
	}
}

