<?php

namespace PagseguroApi\Api\Dto;
use JsonSerializable;

class OrderTransactionDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $reference_id public property
     */
    public $reference_id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @var \DateTime $created_at public property
     */
    public $created_at;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\ShippingDto $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\OrderItemDto[] $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @var \PagseguroApi\Api\Dto\CustomerDto|null $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @var \PagseguroApi\Api\Dto\LinksDto[]|null $links public property
     */
    public $links;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\ChargeDto[]|null $charges public property
     */
    public $charges;

    /**
     * @todo Write general description for this property
     * @required
     * @var array|null $notification_urls public property
    */
    public $notification_urls;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id
     * @param string $reference_id
     * @param \DateTime $created_at
     * @param \PagseguroApi\Api\Dto\ShippingDto $shipping 
     * @param \PagseguroApi\Api\Dto\OrderItemDto[] $items
     * @param \PagseguroApi\Api\Dto\CustomerDto|null $customer
     * @param \PagseguroApi\Api\Dto\LinksDto[]|null $links
     * @param \PagseguroApi\Api\Dto\ChargeDto[]|null $charges
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->reference_id       = func_get_arg(1);
            $this->created_at   = func_get_arg(2);
            $this->shipping      = func_get_arg(3);
            $this->items   = func_get_arg(4);
            $this->customer     = func_get_arg(5);
            $this->links  = func_get_arg(6);
            $this->charges    = func_get_arg(7);
            $this->notification_urls    = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;
        $json['reference_id'] = $this->reference_id;
        $json['created_at'] = $this->created_at;
        $json['shipping'] = $this->items;
        $json['items']    = $this->items;
        $json['customer'] = $this->customer;
        $json['links'] = $this->links;
        $json['charges'] = $this->charges;
        $json['notification_urls'] = $this->notification_urls;

        return $json;
    }
}
