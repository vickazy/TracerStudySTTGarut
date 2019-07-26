
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Formtracer      <small><?= cclang('detail', ['Formtracer']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/formtracer'); ?>">Formtracer</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
     
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">

               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                    
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Formtracer</h3>
                     <h5 class="widget-user-desc">Detail Formtracer</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_formtracer" id="form_formtracer" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nomor Mahasiswa </label>

                        <div class="col-sm-8">
                           <?= _ent($formtracer->nomor_mahasiswa); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kode Pt </label>

                        <div class="col-sm-8">
                           <?= _ent($formtracer->kode_pt); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Tahun Lulus </label>

                        <div class="col-sm-8">
                           <?= _ent($formtracer->tahun_lulus); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kode Prodi </label>

                        <div class="col-sm-8">
                           <?= _ent($formtracer->kode_prodi); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama </label>

                        <div class="col-sm-8">
                           <?= _ent($formtracer->nama); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('formtracer_update', function() use ($formtracer){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit formtracer (Ctrl+e)" href="<?= site_url('administrator/formtracer/edit/'.$formtracer->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Formtracer']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/formtracer/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Formtracer']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->

      </div>
   </div>
</section>
<!-- /.content -->