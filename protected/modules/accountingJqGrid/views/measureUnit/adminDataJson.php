<?php

$asMeasure = array();
foreach ($measures as $measure) {
    $temp = array(
        'id' => $measure->id,
        'cell' => array(
            $measure->id,
            $measure->code,
            $measure->name,
            $measure->decimals,
            $measure->is_active
        ),
    );
    $asMeasure[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asMeasure,
);

echo json_encode($json);
