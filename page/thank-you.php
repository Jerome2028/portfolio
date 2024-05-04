<?php
 $title = "Email Sent - Inmed Corporation."; 
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
<section class="thank-you">
    <div class="container text-center p-5">
        <img src="<?=$BASE;?>assets/img/sent.svg" class="w-25 py-4">
        <h1 class="fw-bold mb-0">THANK YOU!</h1>
        <p>Your message was sent successfully</p>
        <a class="btn btn-warning waves-effect waves-light" href="<?=$BASE;?>">Back to Home</a>
    </div>
</section>
<?php require_once 'component/footer.php'?>