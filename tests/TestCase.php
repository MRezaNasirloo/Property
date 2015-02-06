<?php namespace Jiro\Property\Tests;

use Jiro\Support\Testing\DbTestCase;

/**
 * Sets up application instance and DB for integration testing
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

abstract class TestCase extends DbTestCase 
{
    /** 
     * {@inheritdoc}
     */
	public function getServiceProviders()
	{
		return ['Jiro/Property/PropertyServiceProvider'];
	}

    /** 
     * {@inheritdoc}
     */
	public function getMigrationsDirectory()
	{
		return __DIR__ . '/../Migrations';
	}
}



