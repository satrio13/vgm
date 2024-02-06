<?php
$data_json = '[
                {
                    "nim" : "123",
                    "nama" : "wahyu"
                },
                {
                    "nim" : "124",
                    "nama" : "dian"
                },
                {
                    "nim" : "123",
                    "nama" : "layla"
                }
            ]';

$data = json_decode($data_json, true);
$data = array_map("serialize", $data);
$data = array_unique($data);
$data = array_map("unserialize", $data);

echo'<pre>';
print_r($data);
