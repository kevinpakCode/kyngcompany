<?php $pageModal? $this->load->view($pageModal.'_view'):'';?>
<?php $this->load->view('admin/global_modal_view');?>

<div class="cpn-form-message" id="formMessage">
  <button class="cpn-form-message__btn-close" id="formMessageBtnClose"><i class="icon-close"></i></button>
  <div class="cpn-form-message__head"></div>
  <div class="cpn-form-message__body js-formMessageBody">
    Votre message a été bien envoyé!
  </div>
</div>

<!-- Bootstrap Css-->
<script src="<?=base_url().'/assets/librairies/bootstrap/bootstrap.min.js'?>"></script>

 <!-- Select2 Js -->
<script src="<?=base_url().'assets/librairies/select2/select2.min.js';?>"></script>

<!-- jqueryUI css -->
<script src="<?=base_url().'assets/librairies/jquery-ui/jquery-ui.min.js';?>"></script>

<!-- Validate Form Js-->
<script src="<?=base_url().'assets/librairies/ValidateForme/jquery.validate.min.js';?>"></script>
<script src="<?=base_url().'assets/librairies/ValidateForme/MyscriptsValidateForm.js';?>"></script>

<!-- Spinner Js-->
<script src="<?=base_url().'assets/librairies/spinner/jm.spinner.js';?>"></script>

<!-- Dropify Js-->
<script src="<?=base_url().'assets/librairies/dropify/js/dropify.min.js';?>"></script>

<!-- Charts Js -->
<script src="<?=base_url().'assets/js/back-office/charts/apexcharts.js?v='.$refrech;?>"></script>

<!-- Jquery-tablesort-master Js-->
<script src="<?=base_url().'assets/librairies/jquery-tablesort-master/jquery.tablesort.js';?>"></script>

<!-- Jquery-Mask Js-->
<script src="<?=base_url().'assets/librairies/jquery-mask/jquery.mask.min.js';?>"></script>


<!-- Default Js -->
<script type="module" src="<?=base_url().'assets/js/back-office/default.js?v='.$refrech;?>"></script>
<script type="module" src="<?=base_url().'assets/js/back-office/admin.js?v='.$refrech;?>"></script>
</body>
</html>