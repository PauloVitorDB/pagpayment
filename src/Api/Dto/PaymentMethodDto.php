<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class PaymentMethodDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $installments public property
     */
    public $installments;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $capture public property
     */
    public $capture;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\CreditCardDto|null $card public property
     */
    public \PagseguroApi\Api\Dto\CreditCardDto $card;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\BoletoDto|null $boleto public property
     */
    public \PagseguroApi\Api\Dto\BoletoDto $boleto;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['installments'] = $this->installments;
        $json['card'] = $this->card;
        $json['capture'] = $this->capture;
        $json['boleto'] = $this->boleto;
        return $json;
    }
}
