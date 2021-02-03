<?php

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene) 

$hesapla = 0;
		if ($sex=="male"){	
		$hesapla = (10*$weight) + (6.25*$height) - (5*$age)+5;
		echo $hesapla ;
      //1492.5 sonucunu döndürür
		}
	else if ($sex == "female") {
		$hesapla = (10*$weight)+ (6.25*$height)-(5*$age) -161;
		echo $hesapla;    
}   
?>

<?php

 $sex = "female";
 $weight = 60;
 $height = 170 ;
 $age = 35 ;  //aşağıdaki örnekte yaş 30 verilmiş 35 e göre hesaplayınca doğru sonuç çıkıyor.

	$hesapla = 0;
		if ($sex=="male"){	
		$hesapla = (10*$weight)+(6.25*$height) - (5*$age)+5;
		echo $hesapla ;
		}
	else if ($sex == "female") {
		$hesapla = (10*$weight)+ (6.25*$height)-(5*$age) -161;
		echo $hesapla;    
} // Ekrana 1326.5 yazması gerekiyor.

?>

/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */
