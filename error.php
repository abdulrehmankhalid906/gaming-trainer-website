<?php
    //success message
    if(isset($_SESSION['status'])){
        ?>
        <div class="col-lg-12 col-md-6 col-sm-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php
        unset($_SESSION['status']);
    }
?>

<?php
//danger message
if(isset($_SESSION['status-error'])){
    ?>
        <div class="col-lg-12 col-md-6 col-sm-10">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['status-error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php
    unset($_SESSION['status-error']);
}
?>
