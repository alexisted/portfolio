<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Контакты</h4>
                <ul class="footer-list">
                    <li><i class="fas fa-phone-volume" style="font-size: 1.4rem;"></i><span><?=\Yii::$app->profile->phone?></span></li>
                    <li><i class="fas fa-at" style="font-size: 1.4rem;"></i><span><?=\Yii::$app->profile->email?></span></li>
                    <li><i class="fas fa-street-view" style="font-size: 1.4rem;"></i><span><?=\Yii::$app->profile->local?></span></li>
                </ul>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-8">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">
                    Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <?php foreach(\Yii::$app->profile->soc as $item):?>
            <a class="btn btn-outline-light btn-social mx-1" href="<?=$item['url']?>" target="_blank">
                <i class="<?=$item['icon']?>" style="font-size: 1.4rem;"></i>
            </a>
        <?php endforeach;?>
    </div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>