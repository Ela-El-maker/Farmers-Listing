<!-- header section start  -->
<?= renterPartial('header') ?>
<!-- header section end   -->

<!-- breedcrumb section start  -->
<?= renterPartial('breadcrumb') ?>
<!-- breedcrumb section end  -->
<?php
// inspect(basePath("views/renter/partials/sidebar.php"));
?>
<!-- dashboard section start  -->
<section class="section dashboard dashboard--user">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <?= renterPartial('sidebar') ?>
            </div>
            <div class="col-xl-9">
                <div class="dashboard-post">
                    <ul class="nav dashboard-post__nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link active" id="pills-basic-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-basic" role="tab"
                                aria-controls="pills-basic" aria-selected="true">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 9.75L12 15.75L22.5 9.75L12 3.75L1.5 9.75Z"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M1.5 13.5L12 19.5L22.5 13.5" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="white" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>

                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 01</h2>
                                    <p class="text--body-4">Basic info</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link" id="pills-advance-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-advance" role="tab" aria-controls="pills-advance"
                                aria-selected="false">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 16.5L12 21.75L21 16.5" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 12L12 17.25L21 12" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 02</h2>
                                    <p class="text--body-4">Description, Features & Images</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link" id="pills-post-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-post" role="tab" aria-controls="pills-post"
                                aria-selected="false">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 21H10.5" stroke="currentColor" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M11.5283 1.85314C9.74778 3.27947 3.79242 8.979 8.99983 18.0004H14.9998C20.099 8.98539 14.2307 3.28753 12.4688 1.85618C12.3361 1.74822 12.1703 1.68903 11.9991 1.68848C11.828 1.68793 11.6618 1.74604 11.5283 1.85314V1.85314Z"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.92492 10.4404L3.98585 13.9673C3.91243 14.0554 3.8602 14.1592 3.83316 14.2706C3.80612 14.3821 3.80499 14.4982 3.82987 14.6102L4.98889 19.8258C5.01652 19.9501 5.07536 20.0653 5.15985 20.1606C5.24435 20.2559 5.35172 20.3281 5.47184 20.3705C5.59197 20.4128 5.72089 20.4238 5.84646 20.4025C5.97203 20.3812 6.0901 20.3283 6.18956 20.2487L8.99993 18.0004"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.0186 10.3721L20.0141 13.9667C20.0875 14.0548 20.1397 14.1585 20.1668 14.27C20.1938 14.3814 20.1949 14.4976 20.1701 14.6095L19.011 19.8251C18.9834 19.9495 18.9246 20.0647 18.8401 20.16C18.7556 20.2553 18.6482 20.3275 18.5281 20.3698C18.408 20.4121 18.279 20.4232 18.1535 20.4019C18.0279 20.3806 17.9098 20.3276 17.8104 20.2481L15 17.9998"
                                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 10.125C12.6213 10.125 13.125 9.62132 13.125 9C13.125 8.37868 12.6213 7.875 12 7.875C11.3787 7.875 10.875 8.37868 10.875 9C10.875 9.62132 11.3787 10.125 12 10.125Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 03</h2>
                                    <p class="text--body-4">Post Document</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content dashboard-post__content" id="pills-tabContent">
                        <!-- Step 01 -->
                        <div class="tab-pane fade show active" id="pills-basic" role="tabpanel"
                            aria-labelledby="pills-basic-tab">
                            <div class="dashboard-post__information step-information">
                                <form action="#">
                                    <div class="dashboard-post__information-form">
                                        <div class="input-field">
                                            <label for="docname"> Document Name</label>
                                            <input type="text" placeholder="Document name" id="docname" />
                                        </div>
                                        <div class="input-field__group">
                                            <div class="input-select">
                                                <label for="cat">Category</label>
                                                <select class="js-example-basic-single w-100" id="cat"
                                                    name="category">
                                                    <option value="01">Category 01</option>
                                                    <option value="02">Category 02</option>
                                                    <option value="03">Category 03</option>
                                                    <option value="04">Category 04</option>
                                                </select>
                                            </div>
                                            <div class="input-select">
                                                <label for="subcategory">sub category</label>
                                                <select class="js-example-basic-single w-100" id="subcat"
                                                    name="subcategory">
                                                    <option value="01">Sub Category 01</option>
                                                    <option value="02">Sub Category 02</option>
                                                    <option value="03">Sub Category 03</option>
                                                    <option value="04">Sub Category 04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field__group">
                                            <div class="input-select">
                                                <label>brand</label>
                                                <select class="js-example-basic-single w-100" name="brand">
                                                    <option value="01">brand 01</option>
                                                    <option value="02">brand 02</option>
                                                    <option value="03">brand 03</option>
                                                    <option value="04">brand 04</option>
                                                </select>
                                            </div>
                                            <div class="input-select">
                                                <label>Model</label>
                                                <select class="js-example-basic-single w-100" name="model">
                                                    <option value="01">Model 01</option>
                                                    <option value="02">Model 02</option>
                                                    <option value="03">Model 03</option>
                                                    <option value="04">Model 04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field__group">
                                            <div class="input-select">
                                                <label>conditions</label>
                                                <select class="js-example-basic-single w-100" name="conditions">
                                                    <option value="01">conditions 01</option>
                                                    <option value="02">conditions 02</option>
                                                    <option value="03">conditions 03</option>
                                                    <option value="04">conditions 04</option>
                                                </select>
                                            </div>
                                            <div class="input-select">
                                                <label>authenticity</label>
                                                <select class="js-example-basic-single w-100" name="authenticity">
                                                    <option value="01">authenticity 01</option>
                                                    <option value="02">authenticity 02</option>
                                                    <option value="03">authenticity 03</option>
                                                    <option value="04">authenticity 04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <label for="tag"> Tags </label>
                                            <input type="text" placeholder="Document Tag..." id="tag" />
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme" />
                                            <label class="form-check-label" for="checkme">negotiable
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div class="dashboard-post__action-btns">
                                    <a href="#" class="btn btn--lg btn--outline">
                                        View Posting Rules
                                    </a>
                                    <a href="#" class="btn btn--lg">
                                        Next Steps
                                        <span class="icon--right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white"
                                                    stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Step 02 -->
                        <div class="tab-pane fade" id="pills-advance" role="tabpanel"
                            aria-labelledby="pills-advance-tab">
                            <div class="dashboard-post__step02 step-information">
                                <div class="input-field--textarea">
                                    <label for="description">Document description</label>
                                    <textarea placeholder="What’s your thought..." id="description"></textarea>
                                </div>
                                <div class="input-field--textarea">
                                    <label for="feature">Feature <span>(optional)</span>
                                    </label>
                                    <textarea placeholder="Write a feature in each line..." id="feature"></textarea>
                                </div>
                                <div class="upload-wrapper">
                                    <h3>Upload Photos</h3>
                                    <div class="upload-area">
                                        <div class="uploaded-items">
                                            <div class="uploaded-item">
                                                <img src="../src/images/blogs/img-02.png" alt="" />
                                                <div class="remove-icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24"
                                                        stroke="currentColor" stroke-width="2" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="css-i6dzq1">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="uploaded-item">
                                                <img src="../src/images/blogs/img-03.png" alt="" />
                                                <div class="remove-icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24"
                                                        stroke="currentColor" stroke-width="2" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="css-i6dzq1">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-new">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            <input type="file" hidden id="addNew" />
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-post__action-btns">
                                    <a href="#" class="btn btn--lg btn--outline">
                                        Previous
                                    </a>
                                    <a href="#" class="btn btn--lg">
                                        Next Steps
                                        <span class="icon--right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white"
                                                    stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Steop 03 -->
                        <div class="tab-pane fade" id="pills-post" role="tabpanel" aria-labelledby="pills-post-tab">
                            <div class="dashboard-post__ads step-information">
                                <form action="#">
                                    <div class="input-field__group">
                                        <div class="input-field">
                                            <label for="phoneNumber">phone Number</label>
                                            <input type="tel" class="telephone" placeholder="Phone"
                                                id="phoneNumber" />
                                        </div>
                                        <div class="input-field">
                                            <label for="backupPhone">Backup phone Number <span>(optional)</span>
                                            </label>
                                            <input type="tel" class="backupPhone" placeholder="Phone Number" />
                                        </div>
                                    </div>
                                    <div class="input-field__group">
                                        <div class="input-field">
                                            <label for="email">Email address</label>
                                            <input type="text" placeholder="Email Address" id="email" />
                                        </div>
                                        <div class="input-field">
                                            <label for="website">Website Link <span>(optional)</span></label>
                                            <input type="text" placeholder="your website url" id="website" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-select">
                                                <label>country</label>
                                                <select class="js-example-basic-single w-100" name="country">
                                                    <option value="01">country 01</option>
                                                    <option value="02">country 02</option>
                                                    <option value="03">country 03</option>
                                                    <option value="04">country 04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-field__group">
                                                <div class="input-select">
                                                    <label>city</label>
                                                    <select class="js-example-basic-single w-100" name="city">
                                                        <option value="01">city 01</option>
                                                        <option value="02">city 02</option>
                                                        <option value="03">city 03</option>
                                                        <option value="04">city 04</option>
                                                    </select>
                                                </div>
                                                <div class="input-select">
                                                    <label>state <span>(optional)</span> </label>
                                                    <select class="js-example-basic-single w-100" name="state">
                                                        <option value="01">state 01</option>
                                                        <option value="02">state 02</option>
                                                        <option value="03">state 03</option>
                                                        <option value="04">state 04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field__group">
                                        <div class="input-field">
                                            <label for="location">location</label>
                                            <input type="text" placeholder="Your location" id="location" />
                                        </div>
                                        <div class="input-field">
                                            <label for="maploc">Map location <span>(optional)</span></label>
                                            <input type="text" placeholder="map Location" id="maploc" />
                                        </div>
                                    </div>
                                </form>

                                <div class="dashboard-post__ads-bottom">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="savecontact" />
                                        <label class="form-check-label" for="savecontact">Save my contact
                                            information for faster posting
                                        </label>
                                    </div>

                                    <div class="dashboard-post__action-btns">
                                        <a href="#" class="btn btn--lg btn--outline">
                                            Previous
                                        </a>
                                        <a href="post-ad-success.html" class="btn btn--lg">
                                            Post Ads
                                            <span class="icon--right">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white"
                                                        stroke-width="1.6" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard section end  -->

<!-- footer section start  -->
<?= renterPartial('footer') ?>