<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Client</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Client informations</h4>
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

                    <?php echo form_open_multipart('admin/updateClient/' . $client['id_user']); ?>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Name</label>
                            <input type="text" class="form-control" name="username"
                                value="<?= esc($client['username']) ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" value="<?= esc($client['age']) ?>">
                        </div>
                        <div class="form-group col-md-2">
                            Sexe<br><br>
                            &nbsp; <input type="radio" value="male" name="sexe"> male &nbsp;&nbsp;
                            <input type="radio" value="female" name="sexe"> female
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone_num"
                                value="<?= esc($client['phone_num']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= esc($client['email']) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control" name="photo">
                        <small>Current Photo: <img src="<?= base_url('img/' . $client['photo']) ?>" alt="Photo"
                                width="60"></small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>