<?php
// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
const FILE_PATH = __DIR__ . '/podaci/polaznici.json';

function getDecode() {

}

$students = json_decode(file_get_contents(FILE_PATH), true);
?>
<h1>Stara</h1>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['surname'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// 2. Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite.
$students[] = [
    "name" => "Tin",
    "surname" => "Ujević",
    "age" => 123,
    "email" => "tin.ujevic@vrgorac.hr",
    "phone" => 45789462131
];

$students = json_encode($students);

file_put_contents(FILE_PATH, $students);

$students = json_decode(file_get_contents(FILE_PATH), true);

// echo "<pre>";
// print_r($students);
// echo "</pre>";

?>

<h1>Nova</h1>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['surname'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>