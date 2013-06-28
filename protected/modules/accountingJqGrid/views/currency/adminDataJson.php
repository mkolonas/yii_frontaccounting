<?php

$asCurrency = array();
foreach ($currencies as $currency) {
    $temp = array(
        'id' => $currency->id,
        'cell' => array(
            $currency->id,
            $currency->code,
            $currency->name,
            $currency->symbol,
            $currency->country,
            $currency->hundreds_name,
            $currency->is_auto_update,
            $currency->is_active
        ),
    );
    $asCurrency[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asCurrency,
);

echo json_encode($json);
