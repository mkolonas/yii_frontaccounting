<?php

$asBank = array();
foreach ($bank_accounts as $account) {
    $temp = array(
        'id' => $account->id,
        'cell' => array(
            $account->id,
            $account->glAccount->name,
            $account->bankAccountType->name,
            $account->account_name,
            $account->account_number,
            $account->bank_name,
            $account->address,
            $account->currency->code,
            $account->is_active
        ),
    );
    $asBank[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asBank,
);

echo json_encode($json);
