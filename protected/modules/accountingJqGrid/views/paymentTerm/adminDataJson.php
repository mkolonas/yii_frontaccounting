<?php

$asPayment = array();
foreach ($payments as $payment) {
    $temp = array(
        'id' => $payment->id,
        'cell' => array(
            $payment->id,
            $payment->name,
            $payment->paymentTermType->name,
            $payment->days,
            $payment->is_active
        ),
    );
    $asPayment[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asPayment,
);

echo json_encode($json);
