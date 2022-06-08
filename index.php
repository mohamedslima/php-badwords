<?php 
$user_text = "Lasciatemi cantare con la chitarra in mano lasciatemi cantare sono un italiano.";
?>

<h2>Frase stampata</h2>
<p>
    <?php
    echo $user_text;
    ?>
</p>

<h2>Lunghezza del mio paragrafo</h2>
<p>
    <?php 
    $text_length = strlen($user_text);
    echo "La stringa è lunga" . " " . $text_length . " " . "caratteri";
    ?>
</p>

<?php 
$badword = $_GET['badword'];
$censored = str_replace($badword, "***", $user_text);
?>

<h2>Paragrafo con parola censurata</h2>
<p>
    <?php 
    echo $censored;
    ?>
     <!-- ad esempio http://localhost/php-badwords/?badword=sit -->
</p>
<h2>
    Lunghezza del mio paragrafo con censura
</h2>
<p>
    <?php 
    echo "La stringa censurata è lunga" . " " . $censored . " " . "caratteri";
    ?>
</p>