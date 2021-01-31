<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

function func($arg)  {
  $result = 0;
  for($i = 0; $i < $arg; $i++) {
    $result = $result + $i;
  }
  return $result;
}
echo func(5);

    </script>
</head>
<body>
    
</body>
</html>