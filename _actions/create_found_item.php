<?php
include "../vendor/autoload.php";

use Helpers\HTTP;
use Libs\Database\Found_Item_Table;
use Libs\Database\MySQL;
use Libs\Model\Found_Item;

if (isset($_POST['create_found'])) {
    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $found_on = $_POST['found_on'];
    $bus_taxi_no = $_POST['bus_taxi_no'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $images = $_FILES['image'];
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if (!empty($item_name) && !empty($description) && !empty($found_on) && !empty($date) && !empty($name) && !empty($phone)) {
        $files_name = $images['name'];
        $tmp_files = $images['tmp_name'];
        $images_name = implode(", ", $files_name);
        foreach ($tmp_files as $key => $value) {
            $path = "../found_item_images/" . $files_name[$key];
            if (is_uploaded_file($value)) {
                move_uploaded_file($value, $path);
            } else {
                HTTP::redirect("/new_found_item.php", "error=image");
            }
        }
        $found_item = new Found_Item($item_name, $description, $found_on, $bus_taxi_no, $place, $date, $images_name, $user_id, $name, $phone, $address);
        $table = new Found_Item_Table(new MySQL());
        $result = $table->insert($found_item->toMap());
        if ($result) {
            HTTP::redirect("/home.php");
        } else {
            HTTP::redirect("/new_found_item.php", "error=invaild");
        }
    } else {
        HTTP::redirect("/new_found_item.php", "error=true");
    }
}
