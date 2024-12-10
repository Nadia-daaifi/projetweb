<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Show Coach</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Coach List</h4>
                        <?php if (session()->getFlashdata('succes')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('succes') ?>
    </div>
<?php endif; ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Salary</th>
                                        <th style="width: 10px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (!empty($coachs)): ?>
                                        <?php foreach ($coachs as $coach): ?>
                                            <tr>
                                                <td>
                                                    <img src="<?= base_url('img/' . $coach['photo']) ?>" alt="Photo" width="60">
                                                </td>
                                                <td><?= esc($coach['username']) ?></td>
                                                <td><?= esc($coach['email']) ?></td>
                                                <td><?= esc($coach['phone_num']) ?></td>
                                                <td><?= esc($coach['adress']) ?></td>
                                                <td><?= esc($coach['salary']) ?></td>
                                                <td style="width: 10px;"><span>
                                                        <a href="<?= base_url('admin/editCoach/' . $coach['id_coach']) ?>"
                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                        </a>

                                                        <a href="<?= base_url('admin/deleteCoach/' . $coach['id_coach']) ?>"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this coach?')">
                                                            <i class="fa fa-close text-danger"></i>
                                                        </a>

                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7">No coach data available</td>
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
    <!-- #/ container -->
</div>