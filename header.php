<div class="user_header" style="background-color:grey; color:white;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php
                 echo isset($_SESSION['name']) ? "Hello " . $_SESSION['name'] : "Hello Guest";
                ?>
            </div>
        </div>
    </div>
</div>