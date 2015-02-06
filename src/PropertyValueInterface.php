<?php namespace Jiro\Property;

use Jiro\Product\ProductInterface;

/**
 * Property value interface.
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

interface PropertyValueInterface
{
    /**
     * Get subject model.
     *
     * @return PropertySubjectInterface
     */
    public function subject();

    /**
     * Set subject model.
     *
     * @param PropertySubjectInterface|null $subject
     */
    public function setSubject(PropertySubjectInterface $subject = null);

    /**
     * returns the associated property.
     *
     * @return PropertyInterface
     */
    public function property();

    /**
     * Set property.
     *
     * @param PropertyInterface $property
     */
    public function setProperty(PropertyInterface $property);

    /**
     * Get property value.
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set property value.
     *
     * @param mixed $value
     */
    public function setValue($value);

    /**
     * Proxy method to access the name from real property.
     *
     * @return string
     */
    public function getName();

    /**
     * Proxy method to access the presentation from real property.
     *
     * @return string
     */
    public function getPresentation();

    /**
     * Proxy method to access the type of the property.
     *
     * @return string
     */
    public function getType();
}