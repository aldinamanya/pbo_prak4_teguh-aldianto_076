<!-- TEGUH ALDIANTO
     21091397076 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="prak4 no1.css"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No.1</h2>
<?php
    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('asha', 20, 2015041068); 
    $dosen2 = new Dosen('zesyka', 25,2015042010 );
    $dosen3 = new Dosen('Rahmadila', 19, 2019031004);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';
?>
</div>
</body>
</html>