<?php namespace Jiro\Product\Tests;

use Laracasts\TestDummy\Factory;
use Jiro\Product\Eloquent\Product;
use Jiro\Property\Eloquent\Property;

class EloquentPropertyValueTest extends TestCase 
{
	/** @test */
	public function its_property_and_product_are_null_by_default()
	{
		$propertyValue = Factory::create('PropertyValue');

		$this->assertEquals($propertyValue->property, null);
		$this->assertEquals($propertyValue->product, null);
	}

	/** @test */
	public function its_property_is_mutable()
	{
		$propertyValue = Factory::create('PropertyValue');
		$property = Factory::create('Property');

		$propertyValue->setProperty($property);

		$this->assertEquals($propertyValue->property->getKey(), $property->getKey());		
	}	

	/** @test */
	public function its_product_is_mutable()
	{
		$propertyValue = Factory::create('PropertyValue');
		$product = Factory::create('Product');

		$propertyValue->setProduct($product);

		$this->assertEquals($propertyValue->product->getKey(), $product->getKey());		
	}

	/** @test */
	public function it_can_return_the_property_name()
	{
		$propertyValue = Factory::create('PropertyValue');
		$property = Factory::create('Property');

		$property->setName('Takoyaki');
		$propertyValue->setProperty($property);

		$this->assertEquals($propertyValue->getName(), 'Takoyaki');		
	}	

	/** @test */
	public function it_can_return_the_property_type()
	{
		$propertyValue = Factory::create('PropertyValue');
		$property = Factory::create('Property');
		
		$property->setType('String');
		$propertyValue->setProperty($property);

		$this->assertEquals($propertyValue->getType(), 'String');		
	}	

	/** @test */
	public function it_can_return_the_property_presentation()
	{
		$propertyValue = Factory::create('PropertyValue');
		$property = Factory::create('Property');
		
		$property->setPresentation('Miso');
		$propertyValue->setProperty($property);

		$this->assertEquals($propertyValue->getPresentation(), 'Miso');		
	}				

	/** @test */
	public function its_value_is_mutable()
	{
		$propertyValue = Factory::create('PropertyValue');

		$propertyValue->setValue('Sashimi');

		$this->assertEquals($propertyValue->getValue(), 'Sashimi');		
	}	

	/** @test */
	public function it_has_fluent_interface() 
	{
		$propertyValue = Factory::create('PropertyValue');
		$property = Factory::create('Property');
		$product = Factory::create('Product');

		$this->assertEquals($propertyValue, $propertyValue->setProperty($property));
		$this->assertEquals($propertyValue, $propertyValue->setProduct($product));
		$this->assertEquals($propertyValue, $propertyValue->setValue('Hakari'));
	}					
}