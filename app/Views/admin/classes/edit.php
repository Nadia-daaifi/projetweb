<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Class</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Class Information</h4>
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

                    <?php echo form_open('admin/class/update/' . $class['id']); ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Class Name</label>
                            <input type="text" class="form-control" name="name" value="<?= esc($class['name']) ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Coach</label>
                            <select class="form-control" name="coach" required>
                                <option value="">Select a Coach</option>
                                <?php foreach ($coachs as $coach): ?>
                                    <option value="<?= esc($coach['id_coach']) ?>"><?= esc($coach['username']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Start Time</label>
                            <input type="time" class="form-control" name="start_time" value="<?= esc($class['start_time']) ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>End Time</label>
                            <input type="time" class="form-control" name="end_time" value="<?= esc($class['end_time']) ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" required><?= esc($class['description']) ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!--**********************************
    Content body end
***********************************-->