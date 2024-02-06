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
      					  "nama" : "layka"
      				  }
      			]';

$data = json_decode($data_json, true);

// Array baru untuk menyimpan data unik berdasarkan 'nim'
$uniqueData = [];

// Loop melalui data yang diberikan
foreach ($data as $item) {
  // Gunakan 'nim' sebagai kunci array
  $nim = $item['nim'];
  // Jika 'nim' belum ada dalam array $uniqueData, tambahkan data tersebut
  if (!isset($uniqueData[$nim])) {
      $uniqueData[$nim] = $item;
  }
}

// Ubah kembali array asosiatif menjadi indeks numerik
$uniqueData = array_values($uniqueData);

echo '<pre>';
print_r($uniqueData);
