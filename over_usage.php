
html>
<h3>Lustre Over Usage Quota:</h3>

<table style="border:1px solid black;" cellspacing="2px;">
<?php

// open the file
if (($handle = fopen("over_usage.txt", "r")) !== false) {

    // TODO: use fgets() to find the row..


    // loop through each row
    while (($data = fgetcsv($handle, 0, "|")) !== false) {

        echo "<tr>";
        $num = count($data);
        for ($c = 0; $c < $num; $c++)
        {
            echo "<td style=\"border:1px solid black;\">" . $data[$c] . "</td>";
        }

        echo "</tr>";

    }

    // close file
    fclose($handle);
}
?>
</table>

<footer>
  <p> ** User with overquota for both byte usage and inodes </p>
  <p>  * User with overquota for inodes </p>
</footer>

</html>
