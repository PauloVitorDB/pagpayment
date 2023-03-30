<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class ChargeDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime $created_at public property
     */
    public $created_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var  \DateTime $paid_at public property
     */
    public $paid_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $reference_id public property
     */
    public $reference_id;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\ChargeAmountDto $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\PaymentResponseDto $payment_response public property
    */
    public $payment_response;


     /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\LinksDto[]|null $links public property
    */
    public $links;

    /**
     * @var \PagseguroApi\Api\Dto\PaymentMethodDto|null $payment_method
    */
    public $payment_method;

   /**
     * @todo Write general description for this property
     * @required
     * @var array|null $description public property
    */
    public $description;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;
        $json['status'] = $this->status;
        $json['created_at'] = $this->created_at;
        $json['paid_at'] = $this->paid_at;
        $json['reference_id'] = $this->reference_id;
        $json['amount'] = $this->amount;
        $json['payment_response'] = $this->payment_response;
        $json['payment_method'] = $this->payment_method;
        $json['links'] = $this->links;
        $json['description'] = $this->description;

        return $json;
    }
}
