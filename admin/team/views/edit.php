<?php 
require "../../layouts/adminSidebar.php";
require "../../../config.php";

$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM team WHERE id = :id");
$sql->bindParam(':id', $id);
$status = $sql->execute();

$result = $sql->fetch(PDO::FETCH_ASSOC);

$name = $result['name'];
$position = $result['position'];
$contact = $result['contact'];
$email = $result['email'];
$image = $result['image'];
?>

<main>
    <div class="headings mb-5">
        <h2>Edit Team Member</h2>
        <div class="buttons" style="float:left;">
            <a onclick="saveRecord()" class="btn btn-success"><i class="fa fa-check"></i> Save</a>
            <a onclick="goBack()" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controllers/edit.php" enctype="multipart/form-data" id="myform">
                <div class="row">

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <img src="../../../uploads/<?php echo $image ?>" width="300px" height="200px">
                            <input type="file" name="image" id="image" class="form-control" value="<?php echo $image ?>">
                            <!-- <input type="file" name="image" id="image" class="form-control" value=""> -->
                        </div>
                    </div>

                    <div class="col-md-6"></div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Name</label><span class="text-danger">*</span>
                            <input type="text" name="name" id="name" class="form-control" 
                            value="<?php echo $name ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Position/Role</label><span class="text-danger">*</span>
                            <input type="text" name="position" id="position" class="form-control" 
                            value="<?php echo $position ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Contact</label><span class="text-danger">*</span>
                            <input type="text" name="contact" id="contact" class="form-control" 
                            value="<?php echo $contact ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Email</label><span class="text-danger">*</span>
                            <input type="email" name="email" id="email" class="form-control" 
                            value="<?php echo $email ?>">
                        </div>
                    </div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
                </div>
            </form>

        </div>
    </div>
</main>

<script>
    function saveRecord() {
        const name = $("#name").val();
        const position = $("#position").val();
        const contact = $("#contact").val();
        const email = $("#email").val();

        if(!name || !position || !contact || !email){
            swal.fire({
            title: 'Warning',
            text: 'Fill all required fields',
            icon: 'warning',
            })
        }else{
            swal.fire({
                title: 'Save',
                text: 'Confirm Saving this Record?',
                icon: 'question',
                showCancelButton: true,
                confirmButton: true,
            }).then(function(result) {
                if (result.isConfirmed) {
                    $("#myform").submit();
                }
            })
        }
    }

    function goBack() {
    window.history.back();
}

</script>