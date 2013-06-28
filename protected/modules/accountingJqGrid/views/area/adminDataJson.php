<?php

$asArea = array();
foreach ($aoArea as $area) {
    $temp = array(
        'id' => $area->id,
        'cell' => array(
            $area->id,
            $area->name,
            $area->is_active,
        ),
    );
    $asArea[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asArea,
);

echo json_encode($json);
