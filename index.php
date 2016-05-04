<?php
$mail = "Voznesenskyy@gmail.com";
$phone_number="+38 050 372 62 50";
$skype="serega.voznesenskyy";
$name="Сергей";
$surname="Вознесенский";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESUME</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header> РЕЗЮМЕ
</header>
<main>
    <div class="logo">
        <img src="img/logo.jpg" alt="photo" width="250" height="250">
    </div>
    <div class="contacts">
        <h1>
    <?php
		$name = "Сергей";
		$surname = "Вознесенский";
		echo "$name $surname";
?>
            </br>
        </h1>
        <h2>Студент курсов PHP Academy </br></h2>
        <h3>Мои контакти: </br></h3>
        <ul type="none">
            <li><a href="http://vk.com/id33904794" target="_blank"><img src="img/vk.png" alt="photo" width="20" height="20"></a> Я В Контакте </br></li></br>
            <li><a href="https://www.facebook.com/dereek.voznes" target="_blank"><img src="img/fb.png" alt="photo" width="20" height="20"></a> Я В Фейсбуке</li></br>
            <li> <img src="img/Gmail.png" alt="photo" width="20" height="20"> Мой e-mail:<?php echo $mail;?> </li></br>
            <li> <img src="img/Phone.ico" alt="photo" width="20" height="20"> Мой номер тел.: <?php echo $phone_number;?></li></br>
            <li> <img src="img/Skype.png" alt="photo" width="20" height="20"> Мой skype: <?php echo $skype;?></li></br>
        </ul>
    </div>
    <div class="lang"><h1>ИЗУЧАЮ ЯЗЫКИ:</h1>
    </div>
    <div class="programs">
	<?php
       $myProgram = array (HTML, CSS, PHP, JAVA, MySQL, MQL4);
	   for ($i=0; $i<count($myProgram); $i++) 
	   {
		   echo '<pre>';
		   echo $myProgram[$i]. ';';
		   echo '</pre>';
	   }
	 ?>  
    </div>
    <div class="oput"> <h1>ОПЫТ РАБОТЫ:</h1> </div>
    <div class="company">
        <p1>
		<?php
		    $az = 1; // переменная для условия сортировки
			$myWork = array ("SWEEDBANK", "ТзОВ Радехівський Цукровий Завод", "ПП Західний Буг");
			$myDolzh = array("Эксперт по оценке залогового имущества", "Диспетчер", "Старший менеджер отдела закупки");
			$myStazh = array(2008, 2009, 2011);
			if ($az==1)
			{
				for ($i=2; $i>=0; $i--) 
					{
						echo '<pre>';
						echo 'С '. $myStazh[$i]. ' - '. $myDolzh[$i]. ' в '. $myWork[$i];
						echo '</pre>';
					}
			}	
			else
			{
				for ($i=0; $i<=2; $i++) 
					{
						echo '<pre>';
						echo 'С '. $myStazh[$i]. ' - '. $myDolzh[$i]. ' в '. $myWork[$i];
						echo '</pre>';
					}
			}
		?>
		</p1>
    </div>
    <div class="dz3">
       
    </div>
</main>
</body>
</html>