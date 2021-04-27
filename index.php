<?php
$browser = "Google";

switch($browser) {
case "Firefox":
echo "Your Favourite Browse Is Firefox";
break;
case "Google":
echo "Your Favourite Browser Is Google Chrome This Is The Best";
break;
default:
echo "Your Favourite Browse Is Not Here";} echo "<br><br>";




$prw = dirname(__FILE__);
echo $prw."<br>";

$file = 'isam';
if (is_writable($file)) {
echo 'This  File [' .$file .'  ] Is Found'."<br><br>";}
else{ 
echo "no found"."<br><br>";}
file_put_contents($file, 'Added With PHP File Put Contents');



$file2 = "by_me";
//اذا الملف موجود فعلا  خلص اطبعلي هيك
if(is_dir($file2)){
    
    echo "This file create by is-dir function"."<br><br>";
}
//اذا مش موجود اعمله و اطلعلي هيك وهي اختصار ل make directory
else {
    mkdir($file2);
     echo "This file create by mk function"."<br><br>";
}



/*هون كنت عامل ملف جوا الكورس بي اتش بي و سميته mkdir1
وعملتله حذف من هون
$rmdir1 = "mkdir1";
rmdir($rmdir1);
echo "the file was name rmdir begine remove";*/


echo basename( __FILE__)."<br>";
echo basename( __FILE__,"php")."<br><br>";

/*هون تحت باس نيم بجيب اسم الملف مه  الامتداد دوت بي اتش بي بس احط معه بين قوسين بي اتش بي بجيب اسم الملف لحاله بدون الامتداد  */

if (basename(__FILE__, ".php" )=== 'index') {
echo "Good Your File Is Ready Now"."<br><br>";}
else {
     echo "Sorry This file not found"."<br><br>";
}


$file3 = "maha";
file_put_contents($file3,'Hi i coming With isam alhariri');

if(is_dir($file3)){
    echo "Yes file3 is found"."<br><br>";
}
else{
    mkdir($file3);echo "<br>";
    echo "This file create naw By mkdir1"."<br><br>";
}


if(is_writable($file3)){
    echo "Yes file3 is writable"."<br><br>";
}
else{
   
    echo "i is not writable"."<br><br>";
}


//بحكيله هي امتداد ملفي شوفه موجود او للا
if (file_exists(__DIR__ . '/maha4')) {
echo 'Sorry This Directory Is Exists'."<br><br>";
}
else {
mkdir(__DIR__ . '/maha4/' );
}
echo file_exists(__DIR__ . '/maha4') . "<br><br>";



//بطلب تسلسل اسم الفايل تبعي ++ بكتب فيه isssssaam
$directory = __DIR__ . '/maha4/';
echo $directory ."<br><br>";
file_put_contents($directory . 'text.php', " pppp ",FILE_APPEND);
file_put_contents($directory . 'text.php', " isam ",FILE_APPEND);

echo "111111100001111" . "<br><br>";

//بعرف  تسلسل اسم الفايل تبعي جوا متغير
$file4 = $directory . 'text.php';
echo $file4 ."<br><br>";

//هون حولت حالة الملف ل ريد اونلي 


if(is_writable($file4)){
    file_put_contents($file4,"  isam love maha ",FILE_APPEND);
    echo "is writable"."<br><br>";
}
else {
    chmod($file4,0755);
    file_put_contents($file4,"fuk jorden");
     echo "is not writable"."<br><br>";
}

$osamaZero = __DIR__.' by_me';
echo $osamaZero  . "<br>";
file_put_contents($osamaZero .'osama.text',"This is file from osama ",FILE_APPEND );
//فايل ابيند بتحفظ الكلام القديم وبتضيف الجديد ما بتشيله يعني للقديم
//لو اي اكس مع ال ابيند بتخليني اضيف كلام براحتي
file_put_contents($osamaZero .'osama.text',"This is file from  isamalhariri1998",FILE_APPEND | LOCK_EX);
echo file_get_contents("isam")."<br><br>";

//الاسم و نوعه وامتداده وشو امتداد الملفات الي هو فيها عشكل اريه
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

//نفس الي فوق بس عسطر واحد C:\xampp\htdocs\php_course
echo "<pre>";
print_r(pathinfo(__FILE__,PATHINFO_DIRNAME));
echo "</pre>";

//اسم الملف فقط بدون امتداده index
echo "<pre>";
print_r(pathinfo(__FILE__,PATHINFO_FILENAME));
echo "</pre><br><br>";

$information = pathinfo(__FILE__);
echo $information['basename']."<br>";
echo $information['dirname']."<br>";
echo $information['filename']."<br><br>";


$file5 = __DIR__.'/unlink';
if(is_dir($file5)){
    echo "YES unlink file exists";
}
else{
    mkdir($file5);
    echo "NO unlink file exists";
}



    file_put_contents($file5.'internal_unlink.txt',"isam creat me",FILE_APPEND); 
    file_put_contents($file5.'internal_unlink2.txt',"isam creat me");
    //,SCANDIR_SORT_DESCENDING طبعت الاريه بشكل عكسي يعني بدونها بتنطبع تصاعدي
    $scandir1 = scandir($file5,SCANDIR_SORT_DESCENDING);
    echo "<pre>";
    print_r($scandir1);
    echo "</pre><br><br>";
    //حفظ لانه فيها فنكشنات من اللغة نفسها (حذفت الملفات الي جوا الفايل تبعي)
    foreach($scandir1 as $file){
        if(is_file($file5 . "/" . $file)){unlink($file5 . "/" . $file);}
    }
    echo filesize('isam')."<br><br>";
    //تابع درس ال r,r+,w,w+,a,a+,x,x+
    fopen('fopen1','a+');
    
    
    
    
         $namess = "    mume so love";
     $name = "isam love mume so";
    function testFun(){
        $name = "  i love my maha";
        
         echo "One : " .  $GLOBALS['name'] . $GLOBALS['namess'] ." */* global */*" . "<br>";
         echo "Tow : " . $name . " // local//" . "<br><br>";
                  }
      testFun();
    
    //عنوان السيرفر ADDR اختصار ادرس
    // اسم السيرفر
    echo $_SERVER ['SERVER_ADDR'] . "<br>";
    echo $_SERVER ['SERVER_NAME']. "<br>";
    echo $_SERVER ['HTTP_REFERER']. "<br>";
    echo $_SERVER ['SERVER_PORT']. "<br>";
    
?>
<form    action="data.php" method="get">
    <input type="text" name="Username">
     <input type="password" name="password">
     <input type="submit" value="login">
</form>