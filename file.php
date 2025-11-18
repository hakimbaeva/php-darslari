<?php
if(file_exists("test.txt")){
    $file = fopen("test.txt","r");
}else {
    echo "fayl mavjud emas! <br>" ;
}
// faylga yozish
$file = fopen('data.txt',"w") ;
fwrite($file,"Fayllarni kiritish juda ko'p ishlarni tejaydi. Bu shuni anglatadiki, siz barcha veb-sahifalaringiz 
uchun standart sarlavha, altbilgi yoki menyu faylini yaratishingiz mumkin.
 Keyin, sarlavhani yangilash kerak bo'lganda, siz faqat sarlavhani o'z ichiga olgan faylni yangilashingiz mumkin.") ;
 fclose($file);

 //faylga ma'lumot  qo'shib yozish
 $file = fopen('data.txt','a') ;
 fwrite( $file, "\nYangi ma'lumotlarni qo'shish") ;
 fclose($file);
 //unlink('test.txt') ;

 // fayl mavjudligini tekshirish 
 if(file_exists('data.txt')) {
    echo " fayl mavjud!" ;
 }
 //faylni o'qish
 $content = file_get_contents("data.txt") ;
 echo $content;
 //faylga yozish 
 file_put_contents("data.txt", "hello world!") ;
 //faylga malumot qoshish
 file_put_contents("data.txt", "hello world!" ,FILE_APPEND) ;


?>