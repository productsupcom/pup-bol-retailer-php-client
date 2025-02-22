<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class UploadReportResponse extends AbstractModel
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
            'uploadId' => [ 'model' => null, 'array' => false ],
            'language' => [ 'model' => null, 'array' => false ],
            'status' => [ 'model' => null, 'array' => false ],
            'attributes' => [ 'model' => UploadReportAttribute::class, 'array' => true ],
            'assets' => [ 'model' => UploadReportAsset::class, 'array' => true ],
        ];
    }

    /**
     * @var string The identifier of the upload report.
     */
    public $uploadId;

    /**
     * @var string The language in which content is submitted.
     */
    public $language;

    /**
     * @var string The current status of the upload report.
     */
    public $status;

    /**
     * @var UploadReportAttribute[]
     */
    public $attributes = [];

    /**
     * @var UploadReportAsset[]
     */
    public $assets = [];
}
