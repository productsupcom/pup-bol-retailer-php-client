<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class RetailerInformationResponse extends AbstractModel
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
            'retailerId' => [ 'model' => null, 'array' => false ],
            'displayName' => [ 'model' => null, 'array' => false ],
            'registrationDate' => [ 'model' => null, 'array' => false ],
            'topRetailer' => [ 'model' => null, 'array' => false ],
            'ratingMethod' => [ 'model' => null, 'array' => false ],
            'retailerRating' => [ 'model' => RetailerRating::class, 'array' => false ],
            'retailerReview' => [ 'model' => RetailerReview::class, 'array' => false ],
        ];
    }

    /**
     * @var string The Id of the retailer which information belongs to.
     */
    public $retailerId;

    /**
     * @var string The name of the retailer visible on bol.com
     */
    public $displayName;

    /**
     * @var string A date representing the registration date for the retailer within bol.com
     */
    public $registrationDate;

    /**
     * @var bool Indication of retailer's being the top seller.
     */
    public $topRetailer;

    /**
     * @var string An identifier that identifies if the rating is calculated over the past three months or on all
     * reviews for the retailer.
     */
    public $ratingMethod;

    /**
     * @var RetailerRating Rating on different aspects all being one decimal precision.
     */
    public $retailerRating;

    /**
     * @var RetailerReview
     */
    public $retailerReview;
}
