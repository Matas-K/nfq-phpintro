# nfq-phpintro
2018-10-09 NFQ PHP Intro homework

Klausimai:
1. Kodėl "Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1')" yra 6?
2. Kas ir kodėl nutiko bandant kviesti: "Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');"

Atsakymai:
1. Funkcijos "Nfq\Akademija\Soft\calculateHomeWorkSum" argumentų tipas yra nurodytas sveikasis skaičius (int). Standartiškai PHP priverstinai pakeičia (interpretuoja) reikšmes jei jos yra skirtingų tipų. Šiuo atveju realusis skaičius, taip pat ir tekstas, buvo paverstas į sveikąjį skaičių. Realusis skaičius neteko liekanos, t.y. visų skaitmenų po kableliu, o tekstinė reikšmė buvo pakeista be jokių pakeitimų.

2. "Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1')" grąžino skaičių "6", nors byloje, kur yra funkcija, "functions_strict.php" buvo nurodytas griežtas kintamųjų tipų laikymasis. Kadangi "strict_types=1" deklaravimas (įjungimas), galioja tik toje byloje iškviečiamoms funkcijoms, tai PHP šią funkciją interpretuoja identiškai kaip "Nfq\Akademija\Soft\calculateHomeWorkSum" ir "TypeError" klaidos nepateikia.