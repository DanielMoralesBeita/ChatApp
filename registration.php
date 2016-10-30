<?php include "templates/header.php"; ?>
    <article class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
                    <div class="login-area">
                        <form action="core/doRegistration.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Registration" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- End of Content Area -->
<?php include "templates/footer.php" ?>