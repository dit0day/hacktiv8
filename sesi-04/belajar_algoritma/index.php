<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahan Logika</title>
</head>
<body>
    <?php
        $a = "hungry";
        $output = "";

        // ternary
        $out = $a == "hungry" ? 'eat' : 'iam happy';

        // simple
        if ($a == "hungry"):
            $output = "eat";
        else :
            $output = "iam happy";
        endif;

        // kurung kurawal {}
        if ($a == "hungry"){
            $output = "eat";
        } else {
            $output = "iam happy";
        }

        var_dump("Hasil nya : $out");
    ?>
</body>
</html>