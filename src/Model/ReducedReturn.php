<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReducedReturn extends AbstractModel
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
            'returnId' => [ 'model' => null, 'array' => false ],
            'registrationDateTime' => [ 'model' => null, 'array' => false ],
            'fulfilmentMethod' => [ 'model' => null, 'array' => false ],
            'returnItems' => [ 'model' => ReducedReturnItem::class, 'array' => true ],
        ];
    }

    /**
     * @var string Unique identifier for a return.
     */
    public $returnId;

    /**
     * @var string The date and time in ISO 8601 format when this return was registered.
     */
    public $registrationDateTime;

    /**
     * @var string The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     */
    public $fulfilmentMethod;

    /**
     * @var ReducedReturnItem[]
     */
    public $returnItems = [];

    public function getRegistrationDateTime(): ?\DateTime
    {
        if (empty($this->registrationDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->registrationDateTime);
    }
}
