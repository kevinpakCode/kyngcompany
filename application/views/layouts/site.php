<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/*-------------------------------------------------------------------*\
|===============================DASHBOARD=============================|
\*-------------------------------------------------------------------*/

$pageName = $page->name??null;
$pageTitle = $page->title??null;

$data['pageName'] = $pageName;

$this->load->view('common/doc_header', $data);
?>


<div class="wrap <?=$pageName? $pageName:'';?>" >
  <?php $this->load->view('common/header_view'); ?>
  <main class="main">
    <?php $page->fileName ? $this->load->view($page->fileName.'_view'):null; ?>
  </main>
  <?php $this->load->view('common/footer_view'); ?>
</div>


<?php 
$this->load->view('common/doc_footer');
?>