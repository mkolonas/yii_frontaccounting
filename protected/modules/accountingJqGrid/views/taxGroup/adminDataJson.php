<?php

$asTaxgroup = array();
foreach ($taxgroups as $taxgroup) {
    $temp = array(
        'id' => $taxgroup->id,
        'cell' => array(
            $taxgroup->id,
            $taxgroup->name,
            $taxgroup->as_tax_shipping,
            $taxgroup->is_active
        ),
    );
    $asTaxgroup[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asTaxgroup,
);

echo json_encode($json);
