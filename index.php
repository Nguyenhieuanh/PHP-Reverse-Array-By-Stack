<?php
include_once "Classes/Stack.php";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$stack = new Stack(count($arr));

while (!empty($arr)) {
    $stack->push(array_shift($arr));
}

for ($i = 0; $i < $stack->limit; $i++) {
    array_push($arr, $stack->pop());
}

print_r($arr);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Đảo ngược phần tử trong mảng số nguyên sử dụng Stack</title>
</head>
<body>

</body>
</html>
