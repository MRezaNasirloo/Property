<?php namespace Jiro\Property;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jiro\Property\PropertyInterface;
use Jiro\Property\PropertyTypes;
use Jiro\Product\ProductInterface;

/**
 *  Model for properties.
 *
 *  This class must implement the appropriate model relationship methods. See docs.
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

class Property extends Model implements PropertyInterface
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'properties';

    /**
     * White list of fillable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'presentation', 
        'type', 
    ];

    public function __construct()
    {
        $this->type = PropertyTypes::TEXT;
    }           

    /** 
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /** 
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /** 
     * {@inheritdoc}
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /** 
     * {@inheritdoc}
     */
    public function setPresentation($presentationName)
    {
        $this->presentation = $presentationName;

        return $this;
    }

    /** 
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /** 
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
