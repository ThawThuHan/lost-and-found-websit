<?php

namespace Libs\Database;

use PDOException;

class Found_Item_Table
{
    private $db = null;

    public function __construct(Mysql $db)
    {
        $this->db = $db->connect();
    }

    public function insert($data)
    {
        try {
            $query = "INSERT INTO found_items (item_name, description, found_on, bus_taxi_no, place, date, images, user_id, name, phone, address) Value (:item_name, :description, :found_on, :bus_taxi_no, :place, :date, :images, :user_id, :name, :phone, :address)";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            print_r($e->getMessage());
            return false;
        }
    }
}
