<?php
$loremipsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad praesentium cupiditate molestias, cum corrupti tempora laborum quia libero unde veniam, quod exercitationem sequi distinctio repellendus possimus culpa dignissimos, fugit earum.";

echo "<p> {$loremipsum} </p>";
echo "Panjang karakter: " . strlen( $loremipsum ) ."<br>";
echo "Panjang kata: " . str_word_count( $loremipsum ) ."<br>";
echo "<p>". strtoupper( $loremipsum ) ."</p>";
echo "<p>". strtolower( $loremipsum ) ."</p>";
?>