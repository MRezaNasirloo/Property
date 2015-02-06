<?php namespace Jiro\Property\Tests;

use Laracasts\TestDummy\Factory;
use Jiro\Product\Eloquent\Product;
use Jiro\Property\Eloquent\Property;
use Jiro\Property\PropertyTypes;

class EloquentPropertyTest extends TestCase 
{
	/** @test */
	public function its_name_is_mutable()
	{
		$property = Factory::create('Property');
		$property->setName('Super Property');

		$this->assertEquals('Super Property', $property->getName());		
	}

	/** @test */
	public function its_presentation_name_is_mutable()
	{
		$property = Factory::create('Property');
		$property->setPresentation('T-Shirt Sizes');

		$this->assertEquals('T-Shirt Sizes', $property->getPresentation());		
	}	

	/** @test */
	public function its_type_is_mutable()
	{
		$property = Factory::create('Property');
		$property->setType(PropertyTypes::TEXT);

		$this->assertEquals(PropertyTypes::TEXT, $property->getType());		
	}	

	/** @test */
	public function it_has_fluent_interface() 
	{
		$property = Factory::create('Property');

		$this->assertEquals($property, $property->setName('Foo'));
		$this->assertEquals($property, $property->setPresentation('Foo'));
		$this->assertEquals($property, $property->setType(PropertyTypes::TEXT));
	}					
}