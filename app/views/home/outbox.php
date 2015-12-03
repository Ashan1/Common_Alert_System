<?php
session_start();
require("../../../public/php/connect.php");

$user = $_SESSION['username'];
if (isset($_POST['delete'])) {
    mysql_query("UPDATE message SET sent_deleted = 'yes' WHERE from_user = 'Dilini' or id = '$id'")or die(mysql_error());
    echo "Message succesfully deleted from your outbox.";
}

$user = $_SESSION['user'];
$sql = mysql_query("SELECT * FROM message WHERE from_user = 'Dilini' AND sent_deleted = 'no'")or die(mysql_error());

while($row = mysql_fetch_array( $sql ))
{
    $id = $row['id'];

    echo "<table border=1>";
    echo "<tr><td>";
    echo "Message ID#: ";
    echo $row['id'];
    echo "</td></tr>";
    echo "<tr><td>";
    echo "To: ";
    echo $row['to_user'];
    echo "</td></tr>";
    echo "<tr><td>";
    echo "From: ";
    echo $row['from_user'];
    echo "</td></tr>";
    echo "<tr><td>";
    echo "Message: ";
    echo $row['message'];
    echo "</td></tr>";
    echo "</br>";
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <table border="0">
            <tr><td colspan=2></td></tr>
            <tr><td></td><td>
                    <input type="hidden" name="id" maxlength="5" value = "<?php echo $row['id']; ?>">
                </td></tr>
            <tr><td colspan="2" align="right">
                    <input type="submit" name="delete" value="Delete PM # <?php echo $row['id']; ?> from outbox">
                </td></tr>
        </table>
    </form>

<?php
}
echo "</table>";
echo "</br>";
?>