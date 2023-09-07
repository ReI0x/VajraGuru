<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VajraGuru</title>
    <link rel=”icon” href=”assets/dharmachakra-solid.svg”>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="judul">
            <h3>VajraGuru</h3>
            <p>Heart Essence of Padmasambhava</p>
        </div>
        <div class="logo">
            <img src="assets/dharmachakra-solid.svg" alt="" srcset="">
        </div>
    </header>
    <div class="container">
        <div class="box">
            <p>Pelafalan Mantra-Ku</p>
        </div>

        <div class="box">
            <p>Pelafalan Total</p>
        </div>
        <div class="box">
            <p>Masukkan Jumlah Pelafalan</p>
            <form action="submit.php" method="post">

                <div class="inputbox">
                    <input type="number" name="lafalan" placeholder="108X" required="required">
                </div>

                <input type="submit" value="kirim" class="btn">

            </form>
        </div>
    </div>
        
   
</body>
</html>