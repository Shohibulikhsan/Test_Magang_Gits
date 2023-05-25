<?php
function generateSequence($n) {
    $sequence = [1];  // Simpan elemen pertama
    $current = 1;  // Inisialisasi nilai awal

    for ($i = 1; $i < $n; $i++) {
        $current += $i;  // Tambahkan nilai $i pada $current
        array_push($sequence, $current);  // Tambahkan $current ke dalam $sequence
    }

    return $sequence;
}

function formatOutput($sequence) {
    $formattedOutput = implode('-', $sequence);
    return $formattedOutput;
}

// Main program
$n = readline("Masukkan jumlah elemen yang ingin dihasilkan: ");

$sequence = generateSequence($n);
$output = formatOutput($sequence);

echo "Output: " . $output . "\n";
?>
