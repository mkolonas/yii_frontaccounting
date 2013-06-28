<?php

$asContact = array();
foreach ($contacts as $contact) {
    $temp = array(
        'id' => $contact->id,
        'cell' => array(
            $contact->id,
            $contact->contactEntity->name,
            $contact->description,
            $contact->as_system,
            $contact->is_active
        ),
    );
    $asContact[] = $temp;
}

$json = array(
    "page" => $page,
    "total" => ceil($count/$rows),
    "records" => $count,
    "rows" => $asContact,
);

echo json_encode($json);
