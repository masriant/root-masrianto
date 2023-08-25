<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4"><?= lang('Auth.loginTitle') ?></h3>
                </div>
                <div class="card-body">
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-floating mb-3">
                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="email" placeholder="<?= lang('Auth.email') ?>" />
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                                <label for="login"><?= lang('Auth.email') ?></label>
                            </div>
                        <?php else : ?>
                            <div class="form-floating mb-3">
                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="text" placeholder="<?= lang('Auth.emailOrUsername') ?>" />
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                            </div>
                        <?php endif; ?>

                        <div class="form-floating mb-3">
                            <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?= lang('Auth.password') ?>" />
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                            <label for="password"><?= lang('Auth.password') ?></label>
                        </div>


                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-check mb-3">
                                <label class="form-check-label"><?= lang('Auth.rememberMe') ?></label>
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                            </div>
                        <?php endif; ?>

                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <?php if ($config->activeResetter) : ?>
                                <a class="small" href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?>?</a>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary" href="index.html"><?= lang('Auth.loginAction') ?></button>
                        </div>


                    </form>
                </div>

                <div class="card-footer text-center py-3">
                    <div class="small">

                        <?php if ($config->allowRegistration) : ?>
                            <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>