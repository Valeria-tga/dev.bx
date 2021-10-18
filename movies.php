<?php
echo "Введите ваш возраст: ";
$age_user = (int) readline();

if (($age_user >0) && ($age_user <100)){
	film_by_age($age_user);
}
else{
	echo "Нужно было ввести возраст от 0 до 100";
}

function film_by_age($age_user)
{
	$movies=["The Shawshank Redemption (1992), 16+. Rating - 9.3", "The Godfather (1972), 16+. Rating - 9.2",
			 "The Dark Knight (2008), 14+. Rating - 9", "12 Angry Men (1957), 16+. Rating - 9", "Schindler's List (1993), 16+. Rating - 8.9"];

	if (($age_user>=14) && ($age_user<16)){
		echo  $movies[2];
	}
	elseif($age_user>=16){
		foreach ($movies as $film)
		{echo $film . "\n";}
	}
}
?>