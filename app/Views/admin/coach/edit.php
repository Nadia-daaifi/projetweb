<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Coach</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Coach informations</h4>
                <div class="basic-form">
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)): ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php echo form_open_multipart('admin/updateCoach/' . $coach['id_coach']); ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="username"
                                value="<?= esc($coach['username']) ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= esc($coach['email']) ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_num"
                                value="<?= esc($coach['phone_num']) ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Salary</label>
                            <input type="number" class="form-control" name="salary" value="<?= esc($coach['salary']) ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="adress" value="<?= esc($coach['adress']) ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" accept="image/*" class="form-control" name="photo">
                        <small>Current Photo: <img src="<?= base_url('img/' . $coach['photo']) ?>" alt="Photo"
                                width="60"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>