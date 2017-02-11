Traits yaitu sebuah mekanisme untuk memungkinkan penggunaan kembali code dalam sebuah class. Ciri-cirinya adalah mekanisme untuk menggunakan kembali kode dalam bahasa warisan tunggal seperti PHP. Sebuah Trait dimaksudkan untuk mengurangi beberapa keterbatasan warisan tunggal dengan memungkinkan pengembang untuk menggunakan kembali set metode bebas di beberapa kelas independen yang tinggal di hierarki kelas yang berbeda
Berikut contoh Deklarasinya :
 trait namaTrait {   
   public function namaMethod() {  
     ... //isi method  
   } 
   abstract public function namaMethod2();    
 }   
