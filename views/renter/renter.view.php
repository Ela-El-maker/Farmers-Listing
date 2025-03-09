<!-- header section start  -->
<?= renterPartial('header') ?>
<!-- header section end   -->

<!-- breedcrumb section start  -->
<?= renterPartial('breadcrumb') ?>
<!-- breedcrumb section end  -->

<!-- dashboard section start  -->
<section class="section dashboard dashboard--user">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <?= include("partials/sidebar.php") ?>
            </div>
            <div class="col-xl-9">

                <?= include("partials/overview.php") ?>

            </div>
        </div>
    </div>
</section>
<!-- dashboard section end  -->

<!-- footer section start  -->
<?= renterPartial('footer') ?>