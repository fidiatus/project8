Interface memiliki konsep sama dengan Class yakni tidak ada kode-kode didalamnya. Dan hanya boleh ada Method dan Argument  dan lagi tidak boleh ada kode didalam method-method tersebut. Semua method di Interface harus bersifat Public (tidak boleh ada private atau protected method) Berikut contoh pendeklarasiannya :

interface MyInterface{			//interface
   public function bebas();		//method
   public function bebas2($param);
}

berikut ini pendeklarasian interface menggunakan class :

class MyClass implements MyInterface
{
...
}

Interface bisa dibilang adalah spesifikasi dasar dari sebuah class (tergantung class yang akan memakainya)
oleh karena itu jika suatu class ingin menggunakan Interface maka semua method yang ada di interface harus terdapat di dalam Class tersebut. Namun mesti diingat bahwa Interface bukanlah Class. Berikut contoh lengkapnya :
interface KendaraanBermotor{
    public function ngeRem();
    public function ngeGas();
    public function mundur();
}
class Mobil implements KendaraanBermotor{
    
    protected $jml_roda;
    
    public function ngeRem(){
        
        return "Ngerem nya pakai Tuas dikaki doang";
    }
    public function ngeGas(){
        
        return "Ngegas nya pakai tuas dikaki";
    }   
    public function mundur(){
        
        return "Ada kontrol khusus mundur, orang gperlu turun";
    }
    
}
class Motor implements KendaraanBermotor{
    
    protected $jml_roda;
    
    public function ngeRem(){
        
        return "Ngerem nya pakai Tuas dikaki atau ditangan";
    }
    public function ngeGas(){
        
        return "Ngegas nya pakai tangan";
    }   
    public function mundur(){
        
        return "Mundur perlu turun atau dorong pake kaki";
    }
    
}
//buat Object
$obj = new Mobil();
echo $obj->ngeGas();
echo $obj->ngeRem();
echo $obj->mundur();
