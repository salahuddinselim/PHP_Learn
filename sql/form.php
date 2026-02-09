<form action="form.php" method="get">
    <div>Name: <input type="text" name="name"></div>
    <div>Total Credit current: <input type="number" name="credit"></div>
    <div>
        <h3>Subject Wise Credit and GPA</h3>
    </div>
    <div>Credit: <input type="number" name="credit1"> <input type="number" name="gpa1"></div>
    <div>Credit: <input type="number" name="credit2"> <input type="number" name="gpa2"></div>
    <div>Credit: <input type="number" name="credit3"> <input type="number" name="gpa3"></div>
    <div>Credit: <input type="number" name="credit4"> <input type="number" name="gpa4"></div>
    <div>Credit: <input type="number" name="credit5"> <input type="number" name="gpa5"></div>
</form>


<?php
if (isset($_GET['name']) && isset($_GET['credit'])) {

    $name = $_GET['name'];
    $totalCredit = $_GET['credit'];

    $credits = [];
    $gpas = [];

    for ($i = 1; $i <= 5; $i++) {
        if (isset($_GET["credit$i"]) && isset($_GET["gpa$i"])) {
            $credits[] = $_GET["credit$i"];
            $gpas[] = $_GET["gpa$i"];
        }
    }

    echo "<pre>";
    print_r($credits);
    print_r($gpas);
    echo "</pre>";
    $value = 0;
    $credit = 0;
    for ($i = 1; $i <= 5; $i++) {
        $value += ($credits[$i] * $gpas[$i]);
        $credit += $gpas[$i];
    }
}
?>