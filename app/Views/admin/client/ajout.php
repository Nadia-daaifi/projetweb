<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add client</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid mt-3">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Client informations</h4>
                <div class="basic-form">
                    <?php
                    $errors = session()->getFlashdata('erreurs');
                    if (!empty($errors)) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <?php
                    if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success" role="alert">
                            Client successfuly added
                        </div><?php } ?>
                    <?php
                    echo form_open('/addClient', ['enctype' => 'multipart/form-data']);
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Name</label>
                            <input type="text" class="form-control" name="username" placeholder="Name">
                        </div>

                        <div class="form-group col-md-5">
                            <label>Photo</label>
                            <input type="file" accept="image/*" name="photo" class="form-control">
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
                            <input type="text" class="form-control" name="phone_num" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" placeholder="age">
                        </div>
                    </div>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn mb-1 btn-rounded btn-primary">ADD</button>
            <?php
            echo form_close('');
            ?>
        </div>
    </div>
</div>
</div>
</div>