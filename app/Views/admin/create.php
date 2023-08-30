<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid px-4">

  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">User Member List</li>
  </ol>
  <hr>
  <form action="/admin/member/create" method="post" enctype="multipart/form-data">
    <div class="row g-2">
     
        <?= csrf_field(); ?>
        
     
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" autofocus >
            <div class="invalid-feedback">
              <?= $validation->getError('name'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control text-danger " id="username" username="username" readonly>
            <div class="invalid-feedback">
              <?= $validation->getError('username'); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="kelamin" class="col-sm-2 col-form-label">L/P</label>
          <div class="col-sm-10">
            <select class="form-select" id="kelamin" name="kelamin">
              <option selected></option>
              <option value="0">Other</option>
              <option value="1">Laki-laki</option>
              <option value="2">Perempuan</option>
            </select>
            <div class="invalid-feedback">
              <?= $validation->getError('kelamin'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            <br>
            <select class="form-select" id="jabatan" name="jabatan">
              <option selected></option>
              <option value="0">Other</option>
              <option value="1">Wakil</option>
              <option value="2">Sekretaris</option>
              <option value="3">Anggota</option>
              <option value="4">Bendahara</option>
            </select>
            <div class="invalid-feedback">
              <?= $validation->getError('jabatan'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="instansi" name="instansi">
            <div class="invalid-feedback">
              <?= $validation->getError('instansi'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="kab_kota" class="col-sm-2 col-form-label">Kab./Kota</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kab_kota" name="kab_kota">
            <div class="invalid-feedback">
              <?= $validation->getError('kab_kota'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="propinsi" class="col-sm-2 col-form-label">Propinsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="propinsi" name="propinsi">
            <div class="invalid-feedback">
              <?= $validation->getError('propinsi'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="partai" class="col-sm-2 col-form-label">Partai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="partai" name="partai">
            <div class="invalid-feedback">
              <?= $validation->getError('partai'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="whatsapp" name="whatsapp">
            <div class="invalid-feedback">
              <?= $validation->getError('whatsapp'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
            <div class="invalid-feedback">
              <?= $validation->getError('email'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="checkin_at" class="col-sm-2 col-form-label">CheckIN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="checkin_at" name="checkin_at">
            <div class="invalid-feedback">
              <?= $validation->getError('checkin_at'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="user_image" class="col-sm-2 col-form-label">QRCode</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="user_image" name="user_image">
            <div class="invalid-feedback">
              <?= $validation->getError('user_image'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="checkout_at" class="col-sm-2 col-form-label">CheckOut</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="checkout_at" name="checkout_at">
            <div class="invalid-feedback">
              <?= $validation->getError('checkout_at'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="event" class="col-sm-2 col-form-label">Event</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="event" name="event">
            <div class="invalid-feedback">
              <?= $validation->getError('event'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="status_event" class="col-sm-2 col-form-label">StatusEvent</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="status_event" name="status_event">
            <div class="invalid-feedback">
              <?= $validation->getError('status_event'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="refferal" class="col-sm-2 col-form-label">Referensi</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control" id="refferal" name="refferal" value="<d?= (old('refferal')) ? old('refferal') : $member['refferal'] ?>"> -->
            <select class="form-select" id="refferal" name="refferal">
              <option selected></option>
              <option value="0">Tidak</option>
              <option value="1">Ya</option>
            </select>
            <div class="invalid-feedback">
              <?= $validation->getError('refferal'); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="aktivasi" class="col-sm-2 col-form-label">Aktivasi</label>
          <div class="col-sm-10">
            <!-- <h?= ($member->aktivasi == '0') ? 'Aktif' : 'Non - Aktif'; ?> -->
            <select class="form-select" id="aktivasi" name="aktivasi">
              <option selected></option>
              <option value="0">Nonaktif</option>
              <option value="1">Aktif</option>
            </select>
            <div class="invalid-feedback">
              <?= $validation->getError('aktivasi'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group row mb-4">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/images/" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input 'sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
              <label class="custom-file-label" for="Sampul"></label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary d-inline">Ubah Data</button>
        <a href="/admin/member/" class="btn btn-secondary d-inline">Back to details</a>
        <a href="/admin/members" class="btn btn-success d-inline">Back to List Orang</a>
  </form>
</div>
</div>


</div>
<?= $this->endSection(); ?>