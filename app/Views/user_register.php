<main>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 border border-primary rounded-end my-5">
                <div class="p-5 bg-white rounded-3">
                    <div class="text-center">
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('errors')): ?>
                            <div style="color: red;">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p><?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo site_url('/register'); ?>" method="post" class="user" id="registerForm">
                            <?= csrf_field() ?>
                            <div class="form-group m-3">
                                <label for="fullname" class="float-left m-0">Full name<span class="required-indicator text-danger">*</span></label>
                                <input class="form-control" type="text" id="fullname" placeholder="What is your name ?" name="fullname" required value="<?php echo set_value('fullname'); ?>">
                            </div>
                            <div class="form-group m-3">
                                <label for="emailid" class="float-left m-0">Email ID<span class="required-indicator text-danger">*</span></label>
                                <input class="form-control" type="email" id="emailid" placeholder="Tell us your Email ID" name="emailid" required value="<?php echo set_value('emailid'); ?>">
                            </div>
                            <div class="form-group m-3">
                                <label for="password" class="float-left m-0">Password<span class="required-indicator text-danger">*</span></label>
                                <input class="form-control" type="password" id="password" placeholder="(Minimum 8 Characters)" name="password" required minlength="8">
                            </div>
                            <div class="form-group m-3">
                                <label for="phoneno ms-0" class="float-left m-0">Mobile number<span class="required-indicator text-danger">*</span></label>
                                <input class="form-control" type="tel" id="phoneno" placeholder="Enter your mobile number" name="phoneno" minlength="10" required value="<?php echo set_value('phoneno'); ?>">
                                <span class="text-grey float-left fs-6">Recruiters will contact you on this number</span>
                            </div>
                            <div class="form-group m-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="experience" id="inlineRadio1" value="Experienced">
                                    <label class="form-check-label" for="inlineRadio1">Experienced</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="experience" id="inlineRadio2" value="Fresher">
                                    <label class="form-check-label" for="inlineRadio2">Fresher</label>
                                </div>

                            </div>
                            <div class="form-group m-3">
                                <button class="btn btn-success btn-block text-white d-block w-50 mx-auto" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>