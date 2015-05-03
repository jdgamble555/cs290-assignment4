<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Multiplication Table</title>
    <style>
table {
    width: 50%;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
legend, caption {
    font-weight: bold;
    color: blue;
}
    </style>
</head>
<body>
<form>
    <fieldset>
        <legend>Table Properties</legend>
        <label for="min-multiplicand">Min Multiplicand</label>
        <input id="min-multiplicand" type="text" name="min-multiplicand" value="<?php echo $_GET['min-multiplicand'] ?>" />
        <label for="max-multiplicand">Max Multiplicand</label>
        <input id="max-multiplicand" type="text" name="max-multiplicand" value="<?php echo $_GET['max-multiplicand'] ?>" />
        <label for="min-multiplier">Min Multiplier</label>
        <input id="min-multiplier" type="text" name="min-multiplier" value="<?php echo $_GET['min-multiplier'] ?>" />
        <label for="man-multiplier">Max Multiplier</label>
        <input id="max-multiplier" type="text" name="max-multiplier" value="<?php echo $_GET['max-multiplier'] ?>" />
        <input type="submit" />
    </fieldset>
</form>
<?php
// print table variable
$p = 1;
$vars = array('min-multiplicand','max-multiplicand','min-multiplier','max-multiplier');
foreach ($vars as $v) {
    if (!$_GET[$v]) {
        echo "<p>Missing parameter $v.</p>";
        $p = 0;
    }
    elseif (!str_is_int($_GET[$v])) {
        echo "<p>".$v." must be an integer.</p>";
        $p = 0;
    }
}
// make sure integers, then check for equality
if ($_GET['min-multiplicand']  >  $_GET['max-multiplicand'] && str_is_int($_GET['min-multiplicand']) && str_is_int($_GET['max-multiplicand'])) {
    echo "<p>Minimum multiplicand larger than maximum.</p>";
    $p = 0;
}
if ($_GET['min-multiplier']  >  $_GET['max-multiplier'] && str_is_int($_GET['min-multiplier']) && str_is_int($_GET['max-multiplier'])) {
    echo "<p>Minimum multiplier larger than maximum.</p>";
    $p = 0;
}

if ($p) {

?>
<p />
<table>
        <caption>Multiplication Table</caption>
        <thead>
            <tr>
                <th><!-- empty top-left table --></th>
                <?php for ($i = $_GET['min-multiplier']; $i <= $_GET['max-multiplier']; ++$i)
                    echo "<th>$i</th>"; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = $_GET['min-multiplicand']; $i <= $_GET['max-multiplicand']; ++$i) { ?>
            <tr>
                <th><?php echo $i; ?></th>
                <?php for ($j = $_GET['min-multiplier']; $j <= $_GET['max-multiplier']; ++$j)
                    echo "<td>".$i*$j."</td>"; ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }

function str_is_int($s) {
    return is_numeric($s) && (int) $s == $s;
}

?>

</body>
</html>