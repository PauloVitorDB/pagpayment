<?php

namespace PagseguroApi\Model;

use JsonSerializable;

use PagseguroApi\Api\LengthValidator;

class AddressModel implements JsonSerializable {

    private $street;
    private $number;
    private $complement;
    private $neighborhood;
    private $city;
    private $region;
    private $region_code;
    private $postal_code;
    private $country;

    public function __construct() {

        if(func_num_args() == 9) {
            $this->street       = func_get_arg(0);
            $this->number       = func_get_arg(1);
            $this->complement      = func_get_arg(2);
            $this->neighborhood = func_get_arg(3);
            $this->city         = func_get_arg(4);
            $this->region_code      = func_get_arg(5);
            $this->country        = func_get_arg(6);

            $this->setPostalCode(func_get_arg(7));
            
            $this->region = func_get_arg(8);
        }

    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     *
     * @return  self
     */ 
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of neighborhood
     */ 
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set the value of neighborhood
     *
     * @return  self
     */ 
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }


    /**
     * Get the value of region_code
     */ 
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Set the value of region_code
     * ISO 3166-2
     * @return  self
     */ 
    public function setRegionCode($region_code)
    {
        $this->region_code = $region_code;

        return $this;
    }

    /**
     * Get the value of postal_code
     */ 
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set the value of postal_code
     *
     * @return  self
     */ 
    public function setPostalCode($postal_code)
    {
        $this->postal_code = preg_replace("/[^0-9]/", '', trim($postal_code));

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


    public function jsonSerialize() {

        $json = [
            "street" => $this->street,
            "number" => $this->number,
            "complement" => $this->complement,
            "locality" => $this->neighborhood,
            "city" => $this->city,
            "region" => $this->region,
            "region_code" => $this->region_code,
            "country" => $this->country,
            "postal_code" => $this->postal_code
        ];

        return $json; 
    }
    

    /**
     * Get the value of region
     */ 
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */ 
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }
}