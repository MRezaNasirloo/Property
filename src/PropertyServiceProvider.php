<?php namespace Jiro\Property;

use Illuminate\Support\ServiceProvider;
use Jiro\Property\Database\Eloquent\Property;
use Jiro\Property\Database\Eloquent\PropertyValue;

class PropertyServiceProvider extends ServiceProvider {

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
     * Register the property related console commands.
     *
     * @return void
     */
    public function registerCommands()
    {
        $this->app->singleton('command.jiro.property.install', function($app)
        {
            return new Console\InstallCommand($app['files'], $app['composer']);
        });

        $this->commands('command.jiro.property.install');
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
