<?php
 $title = "404 - Page not Found."; 
 $page= 10;
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
?>
<style>
    #header.header-transparent {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
}
</style>
<section class="p-5">
    <div class="container text-center">
      <img src="<?=$BASE;?>assets/img/404.svg" class="w-50 py-4">
      <h3 class="">Oops  Page not found</h3>
      <p>Oh dear, this link isn’t working. Don't worry, you can find lots about us in our <a class="inmed-color fw-bold" href="<?=$BASE;?>">homepage.</a></p>
    </div>
</section>
<?php require_once 'component/footer.php'?>