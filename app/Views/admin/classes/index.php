<!--********************************** 
    Content body start
***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Classes</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Class List</h4>
                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Coach</th>
                                        <th style="width: 10px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($classes)): ?>
                                        <?php foreach ($classes as $class): ?>
                                            <tr>
                                                <td><?= esc($class['id']) ?></td>
                                                <td><?= esc($class['name']) ?></td>
                                                <td><?= esc($class['description']) ?></td>
                                                <td><?= esc($class['start_time']) ?></td>
                                                <td><?= esc($class['end_time']) ?></td>
                                                <td><?= esc($class['coach_name']) ?></td>
                                                <td style="width: 10px;">
                                                    <span>
                                                        <a href="<?= base_url('admin/class/edit/' . $class['id']) ?>"
                                                           data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin/class/delete/' . $class['id']) ?>"
                                                           data-toggle="tooltip" data-placement="top" title="Delete"
                                                           onclick="return confirm('Are you sure you want to delete this class?')">
                                                            <i class="fa fa-close text-danger"></i>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7">No class data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--********************************** 
    Content body end
***********************************-->
