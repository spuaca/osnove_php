<?php

// Set variables
const FILE_PATH = __DIR__ . "/podaci/words.json";
$words = [];

// Read words.json
if (file_exists(FILE_PATH)) {
    $wordsJson = file_get_contents(FILE_PATH);
    $words = json_decode($wordsJson, true);
}

// Submit form
if (!empty($_POST["word"])) {

    // Get required data
    $word = $_POST["word"];
    $wordLen = mb_strlen($word);
    $countVowels = countVowels($word, $wordLen);
    $countConsonants = countConsonants($wordLen, $countVowels);

    // Assoc array
    $words[] = [
        "word" => $word,
        "wordLen" => $wordLen,
        "countConsonants" => $countConsonants,
        "countVowels" => $countVowels
    ];

    // Write words.json
    $wordsJson = json_encode($words);
    file_put_contents(FILE_PATH, $wordsJson);
}

function countVowels(string $word, int $wordLen): int
{
    $counter = 0;
    $vowels = "aeiou";
    for ($i = 0; $i < $wordLen; $i++) {
        // Compare if vowels contain word char
        if (str_contains($vowels, mb_strtolower($word[$i]))) {
            $counter++;
        }
    }
    return $counter;
}

function countConsonants(int $wordLen, int $countVowels): int
{
    return $wordLen - $countVowels;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni Words JSON</title>
    <style>
        * {
            font-size: 1.2rem;
        }

        input {
            float: left;
            width: 20%;
        }

        table {
            float: right;
            width: 75%;
        }
    </style>
</head>

<body>

    <!-- Form -->
    <form method="POST">
        <label for="word">Upišite riječ:</label><br>
        <input type="text" id="word" name="word"><br><br>
        <input type="submit" value="pošalji">
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Riječ</th>
                <th>Broj slova</th>
                <th>Broj suglasnika</th>
                <th>Broj samoglasnika</th>
            </tr>
        </thead>
        <tbody>
            <!-- Display data words.json -->
            <?php foreach ($words as $word) : ?>
                <tr>
                    <td><?= $word["word"]; ?></td>
                    <td><?= $word["wordLen"] ?></td>
                    <td><?= $word["countConsonants"]; ?></td>
                    <td><?= $word["countVowels"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>