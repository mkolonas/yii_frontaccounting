<?php

$asWorkcenter = array();
foreach ($workcenters as $workcenter) {
    $temp = array(
        'id' => $workcenter->id,
        'cell' => array(
            $workcenter->id,
            $workcenter->name,
            $workcenter->description,
            $workcenter->is_active
        ),
    );
    $asWorkcenter[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asWorkcenter,
);

echo json_encode($json);
