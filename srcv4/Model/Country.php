<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Country extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'countryCode' => [ 'model' => null, 'array' => false ],
            'value' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format
     */
    public $countryCode;

    /**
     * @var float The total value of offer insight.
     */
    public $value;
}
