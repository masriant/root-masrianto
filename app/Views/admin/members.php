<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">User Member List</li>
  </ol>
  <hr>

  <div class="row">
    <div class="col-lg-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($members as $mbr) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $mbr->username; ?></td>
              <td><?= $mbr->email; ?></td>
              <td><?= $mbr->name; ?></td>
              <td>
              <select class="form-select" id="aktivasi" name="aktivasi">
              <!-- <option selected><w?= (old('aktivasi')) ? old('aktivasi') : $mbr->aktivasi; ?></option> -->
              <option <?= ($mbr->aktivasi == '1') ? 'selected' : ''; ?><?= (old('aktivasi')) ? old('aktivasi') : $mbr->aktivasi; ?>" value="1">Nonaktif</option>
              <option <?= ($mbr->aktivasi == '1') ? 'selected' : ''; ?><?= (old('aktivasi')) ? old('aktivasi') : $mbr->aktivasi; ?>" value="0">Aktif</option>
            </select>
                
              <?= $mbr->aktivasi; ?></td>
              <td><a href="<?= base_url('admin/member/' . $mbr->slug); ?>" class="btn btn-info">Detail</a></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
<?= $this->endSection(); ?>