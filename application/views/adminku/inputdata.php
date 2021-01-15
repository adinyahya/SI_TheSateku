<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<form action="<?php base_url('admin/data_control/add') ?>" method="post" enctype="multipart/form-data" >
    
    <label>Name*</label>
    <input class="form-control" type="text" name="nama_data" />
        <div class="invalid-feedback">
            <?php echo form_error('nama_data') ?>
        </div>
    </div>

    <label>Npm*</label>
    <input class="form-control" type="text" name="telp_data" />
        <div class="invalid-feedback">
            <?php echo form_error('npm_data') ?>
        </div>
    </div>
    
    <label>Telp*</label>
    <input class="form-control" type="text" name="telp_data" />
        <div class="invalid-feedback">
            <?php echo form_error('telp_data') ?>
        </div>
    </div>

    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
</form>
