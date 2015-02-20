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
	protected $fillable = ['name', 'country'];

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
			->belongsTo('CodigosPostais');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function countries()
	{
		return $this
			->hasOne('Country', 'id', 'country');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function concelho()
	{
		return $this
			->hasOne('Concelho');
	}
}