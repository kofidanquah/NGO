<main>
    <div class="headings mb-5">
        <h2>New Team Member</h2>
        <div class="buttons" style="float:left;">
            <a onclick="saveRecord()" class="btn btn-success"><i class="fa fa-check"></i> Save</a>
            <a href="?page=team" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="../team/controllers/add.php" enctype="multipart/form-data" id="myform">
                <div class="row">

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6"></div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Name</label><span class="text-danger">*</span>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Position/Role</label><span class="text-danger">*</span>
                            <input type="text" name="position" id="position" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Contact</label><span class="text-danger">*</span>
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Email</label><span class="text-danger">*</span>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>

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
        const image = $("#image").val();
        const email = $("#email").val();

        if(!name || !position || !contact || !image || !email){
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
</script>