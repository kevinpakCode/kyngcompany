<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  /*-------------------------------------------------------------------*\
  |===============================DASHBOARD=============================|
  \*-------------------------------------------------------------------*/
  $isLogin = $page->isLogin??null;
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

  $this->load->view('common/back-office/doc_header', $data);
?>

<div class="app-wrap <?=$currentModule??'';?> <?=$isLogin? 'dashboard':'';?> <?=$pageName? $pageName:'';?>" >
  <?php $isLogin?$this->load->view('common/back-office/sidebar_view', $data):null; ?>
  <div class="app-content">
    <?php $isLogin?$this->load->view('common/back-office/header_view'):null; ?>
    <main class="main">
      <?php $isLogin? $this->load->view('common/back-office/page_head_view', $data):null; ?>
      <?php $page->fileName ? $this->load->view($page->fileName.'_view'):null; ?>
    </main>
    <?php $isLogin?$this->load->view('common/back-office/footer_view'):null; ?>
  </div>
</div>

<?php $this->load->view('common/back-office/doc_footer');?>