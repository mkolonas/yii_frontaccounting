<?php

$asExchangerate = array();
foreach ($exchangerates as $exchangerate) {
    $temp = array(
        'id' => $exchangerate->id,
        'cell' => array(
            $exchangerate->id,
            $exchangerate->currency->name,
            number_format($exchangerate->rate_buy, 2, '.', ','),
            number_format($exchangerate->rate_sell,  2, '.', ','),
            $exchangerate->date
        ),
    );
    $asExchangerate[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asExchangerate,
);

echo json_encode($json);
