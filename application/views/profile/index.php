<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10"><?php echo $title ?></h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>"><i class="feather icon-home"></i></a></li>
              <li class="breadcrumb-item"><a>Profile</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="container">
      <div class="card" style="width:280px" class="">
        <?php echo $this->session->flashdata('message'); ?>
        <img class="card-img-top" src="<?php echo base_url('assets/back') ?>/assets/images/<?php echo $user['image'] ?>" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"><?php echo $user['name'] ?></h4>
          <h6 class="card-title"><?php echo $user['kelas'] ?></h6>
          <p class="card-text"><?php echo $user['nis'] ?></p>


          <!-- button trigger modal -->

          <a href="" class="" data-toggle="modal" data-target="#formModal">Detail</a>
        </div>

      </div>
    </div>




  </div>
</div>



<!-- modal box -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('user/profile'); ?>


        <div class="form-group">

          <input type="text" name="name" id="name" class="form-control" placeholder="Insert Your Name" value="<?php echo $user['name'] ?>" required>

        </div>
        <div class="form-group">

          <input type="text" name="kelas" id="Kelas" class="form-control" placeholder="Insert Your Class" value="<?php echo $user['kelas'] ?>" required>

        </div>
        <?php echo form_error('name', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>

        <div class="form-group">

          <input type="text" name="nis" id="nis" class="form-control" placeholder="Insert Your nis" required value="<?php echo $user['nis'] ?>" disabled>

        </div>




        <div class="form-group">


          <select class="form-control" name="gender">
            <option value="<?php echo $user['gender'] ?>">Gender : <?php echo $user['gender'] ?></option>
            <option value="L">L</option>
            <option value="P">P</option>
          </select>


        </div>

        <?php echo form_error('gender', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>

        <div class="form-group">

          <input type="text" name="address" id="address" class="form-control" placeholder="Insert Your address" value="<?php echo $user['address'] ?>">

        </div>

        <?php echo form_error('address', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>

        <div class="form-group">

          <input type="text" name="telp" id="telp" class="form-control" placeholder="Insert Your telp" value="<?php echo $user['telp'] ?>">

        </div>

        <?php echo form_error('telp', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>

        <div class="form-group">

          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo base_url('assets/back/assets/images/') . $user['image'] ?>" class="img-thumbnail">
            </div>

            <div class="col-md">
              <div class="form-group ">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>

                  </div>
                </div>
              </div>
            </div>


          </div>



        </div>

        <?php echo form_error('image', '<small class="text-danger pt-3 pl-2">', '</small>'); ?>



      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Update</button>
        <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>


      </div>
      </form>
    </div>
  </div>
</div>
<!-- end -->