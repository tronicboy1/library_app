<?php 
include "shared/header.php"; 
include "shared/navbar.php";

?>

<div class="container py-3">
<ul class="list-group">
<?php

//set book to display here
if (isset($_GET["book_id"])) {
    $book = new Book($_GET["book_id"]);
    display_one($book,true);
} else {
    books_list();
}

?>
</ul>



<?php include "shared/footer.php"; ?>