<?php
function noRegKasusAnak($conn)
{
    $sql = "SELECT COUNT(*) as count FROM kasus_anak";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $count = $row["count"];
        $currentMonth = date('n');
        $currentYear = date('Y');
        $nextRegistrationNumber = sprintf("%03d", $count + 1) . "/F/UPTD-PKA/BJM/" . romanNumeral($currentMonth) . "/$currentYear";
        return $nextRegistrationNumber;
    } else {
        $currentMonth = date('n');
        $currentYear = date('Y');
        return "001/F/UPTD-PKA/BJM/" . romanNumeral($currentMonth) . "/$currentYear";
    }
}

function noRegKasusDewasa($conn)
{
    $sql = "SELECT COUNT(*) as count FROM kasus_anak";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $count = $row["count"];
        $currentMonth = date('n');
        $currentYear = date('Y');
        $nextRegistrationNumber = sprintf("%03d", $count + 1) . "/F/UPTD-PP/BJM/" . romanNumeral($currentMonth) . "/$currentYear";
        return $nextRegistrationNumber;
    } else {
        $currentMonth = date('n');
        $currentYear = date('Y');
        return "001/F/UPTD-PP/BJM/" . romanNumeral($currentMonth) . "/$currentYear";
    }
}

function romanNumeral($num)
{
    $n = intval($num);
    $res = '';

    $roman_numerals = array(
        'I' => 1,
        'II' => 2,
        'III' => 3,
        'IV' => 4,
        'V' => 5,
        'VI' => 6,
        'VII' => 7,
        'VIII' => 8,
        'IX' => 9,
        'X' => 10
    );

    foreach ($roman_numerals as $roman => $number) {
        $matches = intval($n / $number);
        $res .= str_repeat($roman, $matches);
        $n = $n % $number;
    }

    return $res;
}
