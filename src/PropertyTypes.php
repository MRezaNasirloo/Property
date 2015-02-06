<?php namespace Jiro\Property;

/**
 * Default property types.
 *
 * @author Andrew McLagan <andrewmclagan@gmail.com>
 */

class PropertyTypes
{
    const CHECKBOX   = 'checkbox';
    const CHOICE     = 'choice';
    const MONEY      = 'money';
    const NUMBER     = 'number';
    const PERCENTAGE = 'percent';
    const TEXT       = 'text';

    public static function getChoices()
    {
        return array(
            self::CHECKBOX   => 'Checkbox',
            self::CHOICE     => 'Choice',
            self::MONEY      => 'Money',
            self::NUMBER     => 'Number',
            self::PERCENTAGE => 'Percentage',
            self::TEXT       => 'Text',
        );
    }
}