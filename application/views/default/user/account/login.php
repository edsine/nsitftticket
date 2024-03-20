<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
  <!--begin::Authentication - Sign-in -->
  <div class="d-flex flex-column flex-column-fluid flex-lg-row justify-content-center align-items-center h-100">
    <!--begin::Body-->
    <div class="card cardy w-md-550px">
      <!--begin::Card-->
      <div class="card shadow rounded-3 w-md-450px">
        <!--begin::Card body-->
        <div class="card-body ">
          <!--begin::Wrapper-->
          <div class="d-flex flex-center flex-column-fluid">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="<?php echo env_url('actions/account/login'); ?>" method="post" data-csrf="manual">
              <!--begin::logo-->
              <div class="text-center mb-11">
                
                <a href="<?php echo base_url(); ?>">
                  <?php if (!empty(db_config('site_logo'))) { ?>
                    <span class="app-brand-logo demo">
                      <img class="logo" src="<?php echo general_uploads(html_escape(db_config('site_logo'))); ?>" alt="<?php echo html_escape(db_config('site_name')); ?>" style="width:100px;">
                    </span>
                  <?php } else { ?>
                    <span class="app-brand-logo demo">
                      <h3 class="p-0 mb-0"><?php echo html_escape(db_config('site_name')); ?></h3>
                    </span>
                      <?php } ?>
                </a>
              </div>
              <!--end::logo-->

              <!--begin::Heading-->
              <div class="text-center mb-11">
                <!--begin::Title-->
                <h5 class="fw-bolder mb-3 fs-3 text" style="text-align:center; font-weight:bold; line-height:1.4;">Nigeria Social Insurance Trust Fund Enterprise Business Suite (SERVICOM)</h5>
                <!--end::Title-->
              </div>
              <!--end::Heading-->

              <div class="response-message"><?php echo alert_message(); ?></div>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

              <!--begin::Input group=-->
              <div class="input-group mb-4">
                <input type="email" name="username" placeholder="<?php echo lang('username_email_address'); ?>" required class="form-control form-control-lg @error('email') is-invalid @enderror">
                <div class="input-group-append">
                  <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                </div>
              </div>
              <!--end::Input group=-->
              <div class="input-group mb-4">
                <input type="password" name="password" placeholder="<?php echo lang('password'); ?>" required class="form-control form-control-lg @error('password') is-invalid @enderror">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <!--end::Input group=-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div class="col-6">
                  <div class="text-success icheck-primary">
                    <input type="checkbox" class="form-check-input" id="remember-me" name="remember_me">
                    <label class="rmbrme-and-fgtpwd" for="remember">Remember Me</label>
                  </div>
                </div>
                <!--begin::Link-->
                <a href="<?php echo env_url('forgot_password'); ?>" class="text-success rmbrme-and-fgtpwd">Forgot Password ?</a>
                <!--end::Link-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Submit button-->
              <div class="d-grid mb-5">
                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg" style="background: #02a14d; color: #fff">
                  <!--begin::Indicator label-->
                  <span class="indicator-label">Sign In</span>
                  <!--end::Indicator label-->
                  <!--begin::Indicator progress-->
                  <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  <!--end::Indicator progress-->
                </button>
              </div>
              <!--end::Submit button-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Card-->
      <!-- Dots Images -->
      <div class="dots-top-left">
        <div class="dots-img"></div>
      </div>
      <div class="dots-bottom-right">
        <div class="dots-img-down-svg"></div>
      </div>
    </div>
    <!-- End Dots Images -->
  </div>
  <!--end::Body-->
</div>
<!--end::Authentication - Sign-in-->