<?php namespace Jiro\Property;

/**
 * Should be implemented by models that support properties
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

interface PropertySubjectInterface
{
    /**
     * Returns all the subject properties.
     *
     * @return Collection|PropertyInterface[]
     */
    public function properties();

    /**
     * Sets all properties of the subject.
     *
     * @param Collection PropertyValueInterface
     */
    public function setProperties($properties);

    /**
     * Adds a property to the subject.
     *
     * @param PropertyValueInterface $property
     */
    public function addProperty(PropertyValueInterface $property);

    /**
     * Removes a property from the subject.
     *
     * @param PropertyValueInterface $property
     */
    public function removeProperty(PropertyValueInterface $property);

    /**
     * Checks whether the subject has a given property.
     *
     * @param PropertyValueInterface $property
     *
     * @return Boolean
     */
    public function hasProperty(PropertyValueInterface $property);

    /**
     * check if a property is present, by name
     *
     * @param string $propertyName
     *
     * @return Boolean
     */
    public function hasPropertyByName($propertyName);

    /**
     * Returns a property by name
     *
     * @param string $propertyName
     *
     * @return PropertyInterface
     */
    public function getPropertyByName($propertyName);    
}