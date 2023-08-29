<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

    <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item active">Edit Profile</li>
    </ol>
    <hr>
    <div class="row">
        <div class="col-lg-12">

            <!-- <div class="card mb-3" style="max-width: 540px;"> -->
            <div class="card mb-3" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>

                    <!-- <div class="col-md-8"> -->
                    <div class="col-md-10">
                        <div class="card-body">
                            <!-- <h5 class="card-title"></h5> -->
                            <form action="<?= base_url('/user/update/' . user()->id); ?>" method="post">
                                <?= csrf_field() ?>

                                <?= user()->username; ?>
                                <div class="row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?> </label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= (old('username')) ? old('username') : user()->username ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.fullname') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.fullname') ?>" value="<?= (old('username')) ? old('username') : user()->fullname ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.jabatan') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.jabatan') ?>" value="<?= (old('username')) ? old('username') : user()->jabatan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.email') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.email') ?>" value="<?= (old('username')) ? old('username') : user()->email ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.whatsapp') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.whatsapp') ?>" value="<?= (old('username')) ? old('username') : user()->whatsapp ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.active') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.active') ?>" value="<?= (old('username')) ? old('username') : user()->active ?>">

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label for="username"><?= lang('Auth.username') ?></label>
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>



                                <br>

                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.edit') ?></button>
                            </form>



                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= user()->username; ?></h4>
                                </li>
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= user()->email; ?></li>
                            </ul>
                            <hr>
                            <p class="card-text"><small class="text-body-secondary">Member since : <?= user()->created_at; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?= $this->endSection(); ?>