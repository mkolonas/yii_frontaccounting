<?php

$asDimension = array();
foreach ($dimensions as $dimension) {
    $temp = array(
        'id' => $dimension->id,
        'cell' => array(
            $dimension->id,
            $dimension->dimension->name,
            $dimension->tag->name
        )
    );
    $asDimension[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asDimension,
);

echo json_encode($json);
