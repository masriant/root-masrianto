<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">User List</li>
  </ol>
  <hr>

  <div class="row">
    <div class="col-lg-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $user->username; ?></td>
              <td><?= $user->fullname; ?></td>
              <td><?= $user->email; ?></td>
              <td><?= $user->name; ?></td>
              <td><a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">Detail</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
<?= $this->endSection(); ?>