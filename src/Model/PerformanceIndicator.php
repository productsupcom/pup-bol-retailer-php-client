<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class PerformanceIndicator extends AbstractModel
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
            'name' => [ 'model' => null, 'array' => false ],
            'type' => [ 'model' => null, 'array' => false ],
            'details' => [ 'model' => Details::class, 'array' => false ],
        ];
    }

    /**
     * @var string Indicator name.
     */
    public $name;

    /**
     * @var string Interpretation of the data that applies to this measurement.
     */
    public $type;

    /**
     * @var Details Details of the indicator.
     */
    public $details;
}
