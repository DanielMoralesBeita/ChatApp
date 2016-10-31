<?php include "templates/header.php"; ?>
    <article class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
                    <div class="login-area">
                        <div class="output"></div>
                        <form action="core/doCalculation.php" method="post">
                            <div class="form-group">
                                <select name="service" id="service" class="form-control">
                                    <option value="0" selected="selected">Select Service</option>
                                    <option value="1">Service One</option>
                                    <option value="2">Service Two</option>
                                    <option value="3">Service Three</option>
                                    <option value="4">Service Four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="vat" id="vat" placeholder="Vat" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="qnt" id="qnt" placeholder="Quntity" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="total" id="total" placeholder="Total Amount" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" id="calsubmit" value="Add Services" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- End of Content Area -->
<?php include "templates/footer.php" ?>