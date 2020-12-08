<?php

// One class - One Responsibility
class GoogleMap
{
    public function getMapDataFromAddress(Address $address)
    {
        $address = $address->getStreet() . ' ' . $address->getNumber() . ', ' . $address->getPostalCode() . ' ' . $address->getTown() . ', ' . $address->getCountry();
        $googleUrl = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=false';
        return json_decode(file_get_contents($googleUrl), true);
    }
}