<?php

$asDimension = array();
foreach ($dimensions as $dimension) {
    $temp = array(
        'id' => $dimension->id,
        'cell' => array(
            $dimension->id,
            $dimension->reference,
            $dimension->name,
            $dimension->type,
            $dimension->is_closed,
            $dimension->date,
            $dimension->due_date
        ),
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
