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
		'concelho_id',
		'name',
	];

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
	public function cp()
	{
		return $this
			->belongsTo('CodigosPostais', 'concelho_id', 'concelho');
	}
}