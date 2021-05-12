<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  /*-------------------------------------------------------------------*\
  |===============================DASHBOARD=============================|
  \*-------------------------------------------------------------------*/
  $isPublic = $page->isPublic??null;
  $pageName = $page->name??null;
  $pageTitle = $page->title??null;
  $pageModal = $page->modal??null;
  $titleIcon = $page->titleIcon??null;

  $data['pageName'] = $pageName;
  $data['pageTitle'] = $pageTitle;
  $data['pageModal'] = $pageModal;
  $data['titleIcon'] = $titleIcon;
  $data['time'] = $time = time();
  $data['refrech'] = $time??0;

  $data['currentModule'] = $currentModule = $this->uri->segment(1)??null;

  $this->load->view('common/public/doc_header', $data);
?>

<div class="wrapper <?=$currentModule??'';?>">

    <?php $isPublic?$this->load->view('common/public/header_view'):null; ?>
    <main class="main">
      <?php $page->fileName ? $this->load->view($page->fileName.'_view'):null; ?>
    </main>
    <?php $isPublic?$this->load->view('common/public/footer_view'):null; ?>

</div>

<?php $this->load->view('common/public/doc_footer');?>