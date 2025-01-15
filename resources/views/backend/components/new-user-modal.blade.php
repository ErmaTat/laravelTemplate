<div class="modal custom-modal fade" id="new-user" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">New User</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>Display Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Users name"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" placeholder="example@email.com"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>Phone Number </label>
                                <input type="text" class="form-control" name="phone" placeholder="e.g 07099999999"
                                     />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>User Role <span class="text-danger">*</span></label>
                                <select class="form-control permissions" name="role" required>
                                    <option value="">--Select Role --</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>Password  <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" placeholder="********"
                                  required   />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-block mb-2">
                                <label>Password Confirmation <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="********"
                                  required   />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">
                        Close
                    </button>
                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
