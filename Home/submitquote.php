<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $quote = trim(htmlspecialchars($_POST['quote']));
    $author = trim(htmlspecialchars($_POST['author']));
    if (!empty($quote) && !empty($author)) 
    {
        $file = "quotes.txt";
        $handle = fopen($file, "a");
        flock($file, LOCK_EX);
        fwrite($handle, "$quote - $author\n");
        flock($file, LOCK_UN);
        fclose($handle);
    }
    header("Location: index.php");
    exit();
}
?>