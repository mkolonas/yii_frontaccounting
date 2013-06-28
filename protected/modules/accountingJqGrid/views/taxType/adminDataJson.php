<?php

$asTaxtype = array();
foreach ($taxtypes as $taxtype) {
    $temp = array(
        'id' => $taxtype->id,
        'cell' => array(
            $taxtype->id,
            $taxtype->name,
            $taxtype->rate,
            $taxtype->salesAccount->name,
            $taxtype->purchasingAccount->name
        ),
    );
    $asTaxtype[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asTaxtype,
);

echo json_encode($json);
