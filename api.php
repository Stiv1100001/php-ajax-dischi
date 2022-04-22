<?php

$filter = $_GET["genre"] ?? "";

$dischi = [
  [
    "title" => "New jersey",
    "author" => "Bon jovi",
    "year" => "1998",
    "poster" => "",
    "genre" => "Rock"
  ],
  [
    "title" => "live at wembly",
    "author" => "Queen",
    "year" => "1992",
    "poster" => "",
    "genre" => "Rock"
  ],
  [
    "title" => "ten's summoner's tales",
    "author" => "Sting",
    "year" => "1998",
    "poster" => "",
    "genre" => "Pop"
  ],
  
];

$result = [];

if ($filter != "") {
    foreach ($dischi as $disco) {
        if (strtolower($disco['genre']) == strtolower($filter)) {
            $result[] = $disco;
        }
    }
} else {
    $result = $dischi;
}

header("Content-Type: application/json; charset=utf-8");

echo json_encode($result);
