<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">User Details</li>
  </ol>
  <hr>
  <div66 class="row">
    <div class="col-lg-8">

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
        
            <img src="<?= base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->username; ?>">
            <p class="card-text text-center"><small class="text-body-secondary">Member since :<br> <?= user()->created_at; ?></small></p>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <!-- <h5 class="card-title"></h5> -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4><?= $user->username; ?></h4>
                </li>
                <?php if ($user->fullname) : ?>
                  <li class="list-group-item"><?= $user->fullname; ?></li>
                <?php endif; ?>
                <li class="list-group-item"><?= $user->email; ?></li>
                <li class="list-group-item">
                  <span class="badge text-bg-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                </li>
                <li class="list-group-item">
                  <small> <a href="<?= base_url('admin'); ?>">&laquo; back to user list</a></small>
                </li>
              </ul>
              <hr>
              <p class="card-text"><small class="text-body-secondary">Last updated : <?= $user->updated_at; ?></small></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div66>



</div>
<?= $this->endSection(); ?>