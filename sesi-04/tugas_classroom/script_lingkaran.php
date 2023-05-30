<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditya Chandra Gunawan</title>
</head>
    <body>
    <h1>Algoritma Menghitung Luas dan Keliling Lingkaran</h1>
    <body style="background-color:grey;">
<form>
    <p>Masukkan Jari-jari Lingkaran : <input type="text" id="jarijari"></p>
    <p><input type="button" value="Submit" onclick="MencariLuasdanKeliling()"> </p>
    <p>Luas Lingkarannya adalah : <input type="text" id="luaslingkaran"></p>
    <p>Keliling Lingkarannya adalah : <input type="text" id="kelilinglingkaran"></p>
</form>
        <script>
function MencariLuasdanKeliling() 
    {
        var phi=3.14
        var jarijari, Kling, Lling
        jarijari = parseInt(document.getElementById("jarijari").value)
        Kling = 2 * phi * jarijari
        Lling = phi * jarijari * jarijari
        document.getElementById("kelilinglingkaran").value = Kling
        document.getElementById("luaslingkaran").value = Lling
    }

        </script>
    </body>
</html>