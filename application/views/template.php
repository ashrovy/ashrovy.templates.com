<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	  <meta name="Hak Cipta" content="fixed oleh ashrovy"/>
    <title><?php echo $title; ?></title>
    <!-- css -->
    <?php $this->load->view('components/css'); ?>
  </head>
  <body class="bg-faded">
    <!-- header -->
    <?php $this->load->view('headers/header'); ?>
    <!-- navigation -->
    <?php $this->load->view('navs/navigation');?>
    <!-- section 1 -->
    <?php $section_1; ?>
    <!-- section 2 -->
    <!-- content -->
    <?php ?>
    <!-- script -->
    <?php $this->load->view('components/js'); ?>
  </body>
</html>
