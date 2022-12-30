<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function message($str= "",$type = "message"){
    echo $type === "error";
    ?>
<div style=" color: white; padding: 1rem;margin-bottom: 1rem;border-radius: 0.5rem;font-family: system-ui, sans-serif;background-color: <?php echo $type === "error" ? "#f44336" : "#1a73e8"; ?>"><?php echo $str; ?></div>
<?php
}


if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if ($number === "") {
        message("Sayı giriniz");
    } else {
        if ($number % 3 === 0) {
            message("${number} sayısı 3e tam bölünür");
        } else {
            $number2 = $number;
            $number2++;
            while ($number2 % 3 !== 0) {
                $number2++;
            }
            message("${number} sayısı 3e bölünmez. Bölünen ilk sayı ${number2}");
        }
    }
}
?>
<form action="" method="post">
    <label for="number">Sayı girin</label>
    <input type="number" name="number" <?php if(isset($_POST["number"])){echo 'value="'. $_POST["number"].'"';} ?> placeholder="Sayı girin...">
    <button type="submit">Gönder</button>
</form>

</body>
</html>

