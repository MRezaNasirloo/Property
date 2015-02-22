<?php namespace Jiro\Product\Property;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jiro\Product\ProductInterface;
use Jiro\Property\PropertyInterface;

/**
 *  Model for property values.
 *
 *  This abstract class must implement the appropriate methods. See docs.
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

class PropertyValue extends Model implements PropertyValueInterface
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'property_values';

    /**
     * White list of fillable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'value', 
    ];

    /** 
     * {@inheritdoc}
     */
    public function subject()
    {
        // TODO: setup this polymorphic relation properly.
        
        return $this->morphTo('subject');
    }

    /** 
     * {@inheritdoc}
     */
    public function setSubject(PropertySubjectInterface $subject = null)
    {
        $this->subject()->associate($subject);

        return $this;
    }


    /** 
     * {@inheritdoc}
     */
    public function property()
    {
        return $this->belongsTo('Jiro\Property\Database\Eloquent\Property');
    }

    /** 
     * {@inheritdoc}
     */
    public function setProperty(PropertyInterface $property)
    {
        $this->property()->associate($property);

        return $this;
    }

    /** 
     * {@inheritdoc}
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product()->associate($product);

        return $this;
    }    

    /** 
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /** 
     * {@inheritdoc}
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }  

    /** 
     * {@inheritdoc}
     */
    public function getName()
    {
        if($this->property)
        {
            return $this->property->getName();
        }
    }

    /** 
     * {@inheritdoc}
     */
    public function getPresentation()
    {
        if($this->property)
        {
            return $this->property->getPresentation();
        }
    }

    /** 
     * {@inheritdoc}
     */
    public function getType()
    {
        if($this->property)
        {
            return $this->property->getType();
        }
    }
}
