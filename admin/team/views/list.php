<?php
if (isset($_SESSION["success"])) {
    $success = $_SESSION["success"];
    unset($_SESSION["success"]);

}else{
    $success = "";
}
?>

<main>
    <div class="headings mb-4">
        <h2>Team</h2>
        <a href="?page=team.new" class="btn btn-primary my-2 py-2"><i class="fa fa-plus"></i> New</a>
    </div>

    <?php if ($success) {
    ?>
        <div class="alert alert-success">
            <h5><?php echo $success ?></h5>
        </div>
    <?php
    }
    ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</main>