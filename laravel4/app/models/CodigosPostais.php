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
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function concelhos()
	{
		return $this
			->hasOne('Concelho', 'concelho_id', 'concelho')
			->where('distrito_id', $this->distrito);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function distritos()
	{
		return $this
			->hasOne('Distrito', 'id', 'distrito');
	}
}