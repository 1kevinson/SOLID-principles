<?php

// One class - One Responsibility
class Address
{
    private string $street;
    private string $number;
    private string $postalCode;
    private string $town;
    private string $country;

    public function __construct($street, $number, $postalCode, $town, $country)
    {
        $this->street = $street;
        $this->number = $number;
        $this->postalCode = $postalCode;
        $this->town = $town;
        $this->country = $country;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public static function createFromGoogleMap(GoogleMap $map, Address $address): Address
    {
        $json = $map->getMapDataFromAddress($address);
        $number = $json['results'][0]['address_components'][0]['long_name'];
        $street = $json['results'][0]['address_components'][1]['long_name'];
        $town = $json['results'][0]['address_components'][2]['long_name'];
        $country = $json['results'][0]['address_components'][4]['long_name'];
        $postalCode = $json['results'][0]['address_components'][5]['long_name'];
        return new Address($street, $number, $postalCode, $town, $country);
    }

}



