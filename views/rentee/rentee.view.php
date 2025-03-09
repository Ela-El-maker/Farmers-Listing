<?= renteePartial('header') ?>


<!-- breedcrumb section start  -->
<?= renteePartial('breadcrumb') ?>
<!-- breedcrumb section end  -->

<!-- dashboard section start  -->
<section class="section dashboard dashboard--user">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <?= renteePartial('sidebar') ?>
            </div>
            <div class="col-xl-9">

                <?= renteePartial('overview') ?>
            </div>
        </div>
    </div>
</section>
<!-- dashboard section end  -->

<?= renteePartial('footer') ?>