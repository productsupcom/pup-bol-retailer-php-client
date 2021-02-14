<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class HandoverDetails extends AbstractModel
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
            'meetsCustomerExpectation' => [ 'model' => null, 'array' => false ],
            'latestHandoverDateTime' => [ 'model' => null, 'array' => false ],
            'collectionMethod' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var bool Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     */
    public $meetsCustomerExpectation;

    /**
     * @var string The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     */
    public $latestHandoverDateTime;

    /**
     * @var string The type of collection for this parcel.
     */
    public $collectionMethod;

    public function getLatestHandoverDateTime(): ?\DateTime
    {
        if (empty($this->latestHandoverDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->latestHandoverDateTime);
    }
}
