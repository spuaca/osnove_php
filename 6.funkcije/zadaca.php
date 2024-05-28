<h2>PHP funkcije – vježba 1</h2>
<ul>
    <li>Proizvoljno deklarirajte funkciju koja vraća neki tekst.</li>
    <li>Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.</li>
    <li>Ispišite vrijednost varijable.</li>
</ul>
<?php
function returnText(): string
{
    return "Vraceni tekst";
}

$text = returnText();
echo $text;

?>

<h2>PHP funkcije – vježba 2</h2>
<ul>
    <li>Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija
        treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih
        lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao
        rezultat.</li>
    <li>Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.</li>
    <li>Ispišite vrijednost varijable.</li>
</ul>
<?php
function fullNameUpper(string $name, string $surname): string
{
    $fullName = strtoupper("$name $surname");
    return $fullName;
}

$fullName = fullNameUpper("John F", "Kennedy");
echo $fullName;

?>


<h2>PHP funkcije – vježba 3</h2>
<ul>
    <li> Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati
        lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao
        rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.</li>
    <li>Deklarirajte funkciju kao varijablu.</li>
    <li>Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
        rasponu od 1 do 10 te ispišite rezultat.</li>
    <li>Ponovite postupak pet puta.</li>
</ul>
<?php
function returnSum(int $num): int
{
    static $sum = 0;
    $sum += $num;
    return $sum;
}

$returnSum = 'returnSum';
$oldSum = 0;

for ($i = 0; $i < 5; $i++) {
    $rand = rand(1, 10);

    echo "oldSum = $oldSum<br>";
    echo "rand = $rand<br>";

    $newSum = $returnSum($rand);
    echo "$oldSum + $rand = $newSum<br>";
    echo "newSum = $newSum<br><br>";
    $oldSum = $newSum;
}

?>