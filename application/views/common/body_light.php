<?php if($isIndex) {$this->load->view('common/header_light');} else {$this->load->view('common/header_other');} ?>

<?php $this->load->view($page); ?>

<?php if($isIndex) {$this->load->view('common/footer_light');} else {$this->load->view('common/footer_other');} ?>
