<main>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center min-vh-100">
                <div class="col-md-5 col-sm-12 col-lg-5 col-xs-12">
                    <div class="p-5 bg-white rounded-3">
                        <div class="text-center">
                            <h5 class="text-dark mb-4">Welcome Back!</h5>
                            <?php if (session()->getFlashdata('error')): ?>
                                <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
                            <?php endif; ?>
                        </div>
                        <form action="<?php echo base_url('/login'); ?>" method="post" class="user" id="loginForm">
                            <div class="form-group m-3">
                                <input class="form-control" type="tel" id="userInputPhone" aria-describedby="phoneHelp" placeholder="Enter Phone Number..." name="phoneno" pattern="[0-9]{10}" required value="<?php echo set_value('phoneno');?>">
                            </div>
                            <div class="form-group m-3">
                                <input class="form-control single-input" type="password" id="userInputPassword" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group m-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme">
                                    <label class="form-check-label" for="rememberme">Remember Me</label>
                                </div>
                            </div>
                            <button class="btn btn-warning btn-block text-white d-block w-50 mx-auto" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>