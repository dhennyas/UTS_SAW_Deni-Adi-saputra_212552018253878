<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>UTS ()</p>1. Deni Adi s (212552018253878)</p>'; ?> 
      <h1>UTS PHP</h1>
    
    <?php
    // Tugas (2)
    // Variabel pada php
    // Tipe data string
      $nama  = "Sekolah Koding 123";
      $nama2 = 'Bermain Koding ';
      $_123 = "text baru";

      //echo "<h2>$_123</h1>";
      //echo "Halo". $nama ."<br>";
      //echo "Selamat Datang Di".$nama2 ."<br>";

    //Tipe data angka/number
    // 1.Interger 2.Float

      $angka  = 2000;
      $angka2 = 200.1234;
      $angka3 = 4;

    //Operator aritmatik
    // + - * / % ++ --
    // nama = nilai
    //$angka = angka + angka 2
    //angka *= angka2

    //math method
    //round rand(min, max) max min
      $angka *= $angka3;

      //echo $angka + $angka2 ."<br>";
      //echo $angka."<br>";
      //echo "Angka terkecil adalah :". min($angka, $angka2, $angka3);

      // Tugas(3)
      //Tipe Data Array
      //Tipe Data Array
      $bulat = array("sapi", "kambing", "ayam", "gajah");
      $kotak = ['nana', 'budi', 'papa'];
      $data = array("nama"  => "angel",
                    "umur"  => "20",
                    "kerja" => "pramugari"
              );

       //print_r($bulat)."<br>";
       //echo $bulat[1].'<br>';
       //echo $kotak[0];

      //-------- Metode Array --------------
      //array_unique, _reverse, shuffle, count, sort 
        //print_r( array_unique($bulat) );
        //print_r( array_reverse($bulat) );
        //shuffle($bulat);
        //print_r($bulat);
        //echo count($bulat);

        //sort ($bulat);
        //print_r($bulat);

        //----------Associative array--------
        // key => isi
        //print_r($data);
        //$data["umur"] = "25";
        //echo "Umurnya adalah " . $data["umur"];

        //--------methode associative array--------
        //array_values, array_key, array_merge
        //print_r(array_values($data));
        //print_r(array_keys($data));
        //print_r(array_merge($data, $kotak));

      //---------multi dimensi array---------

       $data2 = array(
                  array("presiden", "25", "suka"),
                  array("programer", "22", "tidak"),
                  array("manajer", "27", "suka")
               );
      //00 01 02
      //10 11 12
      //20 21 22
      //print_r($data2);
      //echo $data2[2][0] = "pengacara";
      //echo $data2[2][0];
      // echo $data[2][0];

      //------Superglobal array-----
      //echo $_SERVER['SERVER_NAME'];
      // $GLOBALS
      // $_SERVER
      // $_REQUEST
      // $_POST
      // $_GET
      // $_FILES
      // $_ENV
      // $_COOKIE
      // $_SESSION
      $hewan = ['anjing','kambing','kadal','babi'];

    for($i=0; $i < count($hewan) -1; $i++)
      {
        echo "-----------";
        echo $hewan [$i];
        echo "-----------<br>";
      }
    //foreach($hewan as $h)
      //{
       // echo "-----------";
       // echo $h;
        //echo "-----------<br>";
    //  }
  //$data = ['nama' => 'deni adi',
          //'umur' =>20,
        //  'sifat'=>'rajin'];
 // foreach($data as $key => $value){
 //   echo $value. "<br>";
 // }
//$i = 5;
//while($i < count($hewan)){
 // echo $hewan[$i]. "<br>";
 // $i++;
//}
//do{
  //echo '----------';
//  echo $hewan[$i]. "<br>";
  //$i++;
//}while( $i < count($hewan));


    
    ?>

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>