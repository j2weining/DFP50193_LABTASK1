<?php
$fruit = [
    'Apple' => [
        '52 calories per 100 grams' => [
            'Contain Vitamin C' => [
                '10g sugar per 100 grams' => [
                    '107 mg potassium per 100 grams',
                ],
            ],
        ],
    ],
    'Banana' => [
        '89 calories per 100 grams' => [
            'Contain Vitamin C and Vitamin B6' => [
                '12g sugar per 100 grams' => [
                    '358 mg potassium per 100 grams',
                ],
            ],
        ],
    ],
    'Grape' => [
        '67 calories per 100 grams' => [
            'Contain Vitamin C and Vitamin B6' => [
                '16g sugar per 100 grams' => [
                    '191 mg potassium per 100 grams',
                ],
            ],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits Differences</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Fruits Differences</h1>
    <table cellpadding="0" cellspacing="0">
        <?php
        foreach ($fruit as $fruitname => $value) {
            echo '<tr>';
            foreach ($value as $calories => $value2) {
                foreach ($value2 as $vitamin => $value3) {
                    foreach ($value3 as $sugar => $value4) {
                        foreach ($value4 as $potassium) {
                            echo "<td id=title>$fruitname</td>";
                            echo "<td>$calories</td>";
                            echo "<td id=tdcolor>$vitamin</td>";
                            echo "<td>$sugar</td>";
                            echo "<td id=tdcolor>$potassium</td>";
                        }
                    }
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>