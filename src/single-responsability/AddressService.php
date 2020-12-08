<?php

class AddressService
{
    public function getCleanAddress(): Address
    {
        $address = new Address("avenue baudelaire", "12", "78500", "sartrouville", "France");
        return Address::createFromGoogleMap(new GoogleMap(), $address);
    }
}