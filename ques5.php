<!--  Write a PHP code to convert the length values written in various measuring units in a
file named “measure.txt” into cm and write it in to a text file named “centimetre.txt”.
Based on the measuring unit symbol read the respective cm conversion should be done. write PHP code to email this centimetre.txt file to mywork@gmail.com   -->

<?php
echo "Mail sent";
$myfile = fopen("measure.txt", "r") or die("Unable to open file!");
$myfile1 = fopen("centimetre.txt", "w") or die("Unable to open file!");
while (!feof($myfile)) {
    $line = fgets($myfile);
    $line = trim($line);
    $line = explode(" ", $line);
    $num = $line[0];
    $unit = $line[1];
    if ($unit == "cm") {
        $num = $num;
    } elseif ($unit == "m") {
        $num = $num * 100;
    } elseif ($unit == "mm") {
        $num = $num / 10;
    } elseif ($unit == "km") {
        $num = $num * 100000;
    } elseif ($unit == "in") {
        $num = $num * 2.54;
    } elseif ($unit == "ft") {
        $num = $num * 30.48;
    } elseif ($unit == "yd") {
        $num = $num * 91.44;
    } elseif ($unit == "mi") {
        $num = $num * 160934;
    }
    $num = $num . " cm";
    fwrite($myfile1, $num);
    fwrite($myfile1, "\n");
}
fclose($myfile);
fclose($myfile1);
$to = "vyomgupta31@gmail.com";
$subject = "Centimertre";
//send file as attachment
$attachment = chunk_split(base64_encode(file_get_contents("centimetre.txt")));
$filename = "centimetre.txt";
$boundary =md5(date('r', time()));
//header
$headers = "From:

";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"_1_$boundary\"";
//plain text
$body = "--_1_$boundary
";
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"
";
$body .= "Content-Transfer-Encoding: 7bit
";

$body .= "Centimetre
";

//attachment
$body .= "--_1_$boundary
";
$body .= "Content-Type: application/octet-stream; name=\"$filename\"
";

$body .= "Content-Transfer-Encoding: base64
";
$body .= "Content-Disposition: attachment
";

$body .= $attachment;

$body .= "--_1_$boundary--";









?>