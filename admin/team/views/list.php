<?php
if (isset($_SESSION["success"])) {
    $success = $_SESSION["success"];
    unset($_SESSION["success"]);
} else {
    $success = "";
}

$query = $conn->prepare("SELECT * FROM team ORDER BY created_at DESC");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

$count = 1;
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
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $member) { ?>
                        <tr>
                            <td><?php echo $count++ ?></td>
                            <td><?php echo $member['name'] ?></td>
                            <td><?php echo $member['position'] ?></td>
                            <td>
                                <?php if ($member['status'] == 1) {
                                    echo '<a class="badge bg-success">Active</a>';
                                } else {
                                    echo '<a class="badge bg-danger">Inactive</a>';
                                } ?>
                            </td>
                            <td>
                                <div class='dropdown'> <button class='btn btn-secondary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>Actions</button>
                                    <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                        <li><a class='dropdown-item' href='javascript:void(0)' onclick=''><i class='fa-solid fa-arrows-spin'></i> Change Status</a></li>
                                        <li><a class='dropdown-item' href='../team/views/edit.php?id=<?php echo $member['id'] ?>'><i class='fa fa-pencil'></i> Edit</a></li>
                                        <li><a class='dropdown-item' href='javascript:void(0)' onclick='deleteRecord()'><i class='fa fa-trash'></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true
        });
    });
</script>