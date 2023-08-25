<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

    <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item active">My Profile</li>
    </ol>
    <hr>
    <div class="row">
        <div class="col-lg-8">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title"></h5> -->
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