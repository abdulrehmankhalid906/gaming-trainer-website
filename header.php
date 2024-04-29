<div class="user_header" style="background-color:grey; color:white;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php
                    if(isset($_SESSION['name']))
                    {
                    ?>
                    Hello! <b><?php echo $_SESSION['name'];?> </b>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>