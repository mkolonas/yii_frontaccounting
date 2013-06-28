<?php

$asAttachment = array();
foreach ($attachments as $attachment) {
    $temp = array(
        'id' => $attachment->id,
        'cell' => array(
            $attachment->id,
            $attachment->name,
            $attachment->description,
            $attachment->transactionType->name,
            $attachment->transaction_no,
            $attachment->transaction_date,
            $attachment->file_name,
            $attachment->file_size,
            $attachment->file_type,
        ),
    );
    $asAttachment[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asAttachment,
);

echo json_encode($json);
