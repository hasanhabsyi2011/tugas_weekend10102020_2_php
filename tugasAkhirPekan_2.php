<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 2</title>
  </head>
  <body>

    <?php

    $LuasPermukaan = 3750;

    function LuasSatuPermukaan($nilai){
        return $nilai/6;
    };


    function rusuk($nilai){
      return sqrt($nilai);
    };
     ?>



    <h3>Soal Nomor 2</h3>
    <p>Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>.
      Hitunglah panjang sisi kotak kayu tersebut ?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Jadi panjang sisi kotak kayu tersebut adalah akar dari :
    <?php echo LuasSatuPermukaan($LuasPermukaan); ?>  =
    <?php echo rusuk(LuasSatuPermukaan($LuasPermukaan)); ?> cm </b></p>

  </body>
</html>
