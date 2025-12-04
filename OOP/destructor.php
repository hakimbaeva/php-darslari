<?php
class Mevalar{
    private $nomi;

    private $yosh;

    private $rangi;

   // public function __construct($nomi, $rangi) {
    //    $this->nomi = $nomi;
      //  $this->rangi = $rangi;
    //}//
    public function __destruct() {

    }

    public function nominiKiritish($nomi) {
        if($nomi)
            $this->nomi = $nomi;
    }
    public function nominiOlish() {
        return $this->nomi;
    }
    public function yoshniKiritish($yosh) {
        if($yosh < 0) {
            echo "Yoshni qiymati noldan kichik bo'lmasligi kerak" ;
        } else {
            $this->yosh = $yosh ;
        }
    }
    public function yoshniOlish() {
        return $this->yosh;
    }
  
}

$olma = new Mevalar('olma',"qizil") ;
$olma->yoshniKiritish(15);
echo "<br>";
$olma->nominiKiritish("olcha") ;
echo $olma->nominiOlish()."<br>";
echo $olma->yoshniOlish()."<br>";

?>