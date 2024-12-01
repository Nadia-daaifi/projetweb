<div class="content-body" style="min-height: 788px;">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                    <div class="col-lg-8 col-xl-8 mx-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="<?= base_url('img/' . session()->get('photo')) ?>" width="120" height="120" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0"><?= session()->get('username') ?></h3>
                                        <p class="text-muted mb-0"><?= session()->get('type') ?></p>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <h4>About Me</h4>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span><?= session()->get('phone') ?></span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span><?= session()->get('email') ?></span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
      
            <!-- #/ container -->
        </div>