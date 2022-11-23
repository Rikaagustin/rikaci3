<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
   <div class="row">
   <div class="col-Ig-8">

   <?= $this->session->flashdata('message'); ?>
   <form action="<?=base_url('user/changepassword'); ?>"method="post">
       <div class="from-group">
           <label for="current_password">Curent Password</label>
           <input type ="password"class="form-control" id="current_password"
           name="currennt_password">
           <?=form_error('current_password','<small class="text-danger pi-3">','</small>'); ?>
    </div>
    <div class="form-group">
          <label for="New-password1">New Password</label>
          <input type="password"class="form-control"id="new_password1" name="new_password1">
          <?=form_error('new_password1','<small class="text-danger p1-3">','</small>'); ?>
    </div>
    <div class="form-group">
    <label for="new_password2">Repeat Password</label>
    <input type="password" class="form-control" id="new_password2" name="new_password2">
    <?=form_error('new_password2','<small class="text-danger p1-3">','</small>'); ?>
    </div>
    <div class="form-group">
         <button type="submit"class="btn-btn-primary">Change Password</button>
                </div>

           </form>

       </div>
</div>  