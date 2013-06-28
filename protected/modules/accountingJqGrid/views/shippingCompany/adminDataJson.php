<?php

$asShipping = array();
foreach ($shippings as $shipping) {
    $temp = array(
        'id' => $shipping->id,
        'cell' => array(
            $shipping->id,
            $shipping->name,
            $shipping->phone1,
            $shipping->phone2,
            $shipping->contact,
            $shipping->address,
            $shipping->is_active
        ),
    );
    $asShipping[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asShipping,
);

echo json_encode($json);
