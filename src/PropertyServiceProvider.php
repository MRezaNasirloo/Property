<?php namespace Jiro\Propety;

use Illuminate\Support\ServiceProvider;
use Jiro\Property\Database\Eloquent\Property;
use Jiro\Property\Database\Eloquent\PropertyValue;

class ProductServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(PropertyInterface::class, Property::class);	
		$this->app->bind(PropertyValueInterface::class, PropertyValue::class);		
	}		

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'Jiro\Product\Property\PropertyInterface',
			'Jiro\Product\Property\PropertyValueInterface'
		];
	}

}
