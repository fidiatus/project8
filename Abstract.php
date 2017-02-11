Abstract Class dilihat dari penamaanya dapat kita katakan bahwa itu adalah hal yang Abstract alias tidak nyata. Abstract Class biasanya dibuat untuk diturunkan ke Class lain dengan kata lain Abstract Class akan berisi semua hal paling general dari Class-Class anaknya. Seperti Class pada umumnya, Abstract Class juga bisa mempunyai properties,hak akses,dan method namun Abstract Class tidak bisa dibuatkan Object nya sendiri. Berikut contoh pendeklarasiannya :
abstract class Mamalia{
    abstract protected function berJalan($pakai);
    abstract protected function makan($apaan); //abstract method
}
//pakai extends
class Manusia extends Mamalia{
    public function berJalan($pakai){
    
        return "Manusia Jalan pakai {$pakai}";
    }
    
    public function makan($apaan){
    
        return "Manusia biasa makan {$apaan}";
    }
}
class Kucing extends Mamalia{
    public function berJalan($pakai){
    
        return "Kucing Jalan pakai {$pakai}";
    }
    
    public function makan($apaan){
    
        return "Kucing biasa makan {$apaan}";
    }
}

$obj = new Manusia;
echo $obj->makan("Nasi");
echo $obj->berJalan("Kaki");
echo "<br>";
$obj = new Kucing;
echo $obj->makan("Ikan asin");
echo $obj->berJalan("Empat kaki");

