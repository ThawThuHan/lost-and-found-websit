<?php

namespace Libs\Model;

class Found_Item
{
    private $item_name;
    private $description;
    private $found_on;
    private $bus_taxi_no;
    private $place;
    private $date;
    private $images;
    private $user_id;
    private $name;
    private $phone;
    private $address;

    public function __construct(
        $item_name,
        $description,
        $found_on,
        $bus_taxi_no,
        $place,
        $date,
        $images,
        $user_id,
        $name,
        $phone,
        $address,
    ) {
        $this->item_name = $item_name;
        $this->description = $description;
        $this->found_on = $found_on;
        $this->bus_taxi_no = $bus_taxi_no;
        $this->place = $place;
        $this->date = $date;
        $this->images = $images;
        $this->user_id = $user_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function toMap()
    {
        $map = [
            "item_name" => $this->item_name,
            "description" => $this->description,
            "found_on" => $this->found_on,
            "bus_taxi_no" => $this->bus_taxi_no,
            "place" => $this->place,
            "date" => $this->date,
            "images" => $this->images,
            "user_id" => $this->user_id,
            "name" => $this->name,
            "phone" => $this->phone,
            "address" => $this->address,
        ];
        return $map;
    }
}
