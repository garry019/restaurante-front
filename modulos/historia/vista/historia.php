<div class="col-lg-12 col-md-12 videoHistoria">
    <video class="vidHis" autoplay loop muted playsinline>
        <source src="files/video/video.mp4" type="video/mp4"/>
    </video>
</div>
<div class="col-lg-12 col-md-12" style="margin-top: -5px;">
    <div class="row cabecera">
        <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" /> Nuestra Experiencia <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" />
    </div>
    <div class="row borderPostresDotted"></div>
    <div class="row">
        <img class="img-responsive center-block" style="width: 90%;" src="<?php echo $site->urlBase().'images/historia.jpg'; ?>" />
    </div>
    <div class="row borderPostresDotted"></div>
</div>
<div class="col-lg-12 col-md-12 <?php $site->footerClass(); ?>">
    <div class="row contentSocial">
        <?php include 'template/layout/socialContent.php'; ?>
    </div>
    <div class="row footerSocial">
        <img class="img-responsive" src="<?php echo $site->urlBase().'images/footersocial.png'; ?>" />
    </div>
</div>
