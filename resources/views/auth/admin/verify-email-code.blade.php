  <div class="modal-dialog">
      <form id="verificationForm">
          @csrf
          <div class="modal-content">
              <div class="modal-header">
                  <div class="row">
                      <div class="col-md-12">
                          <h5 class="modal-title" id="emailVerificationModalLabel">We send you a verification code on your
                              email</h5>
                      </div>
                      <small>Please enter valid code otherwise you account will be DeActive.</small>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="mb-3">
                              <input type="text" placeholder="Email Code" name="email_verified_code"
                                  class="form-control" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                     <a id="verifyCode" class="btn btn-primary" 
                            data-verification-url="{{ route('admin.email.verified.code') }}" 
                            data-dashboard-url="{{ route('admin.dashboard') }}">
                        Verify
                    </a>
              </div>
          </div>
      </form>
  </div>