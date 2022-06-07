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
    echo "La stringa è lunga" . $text_length . "caratteri";
    ?>
</p>