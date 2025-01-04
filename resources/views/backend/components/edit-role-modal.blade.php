<div class="modal custom-modal fade" id="edit_role{{$role->id}}" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Role</h4>
          </div>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form action="{{route('roles.update',$role->id)}}" method="POST">
            @csrf
            @method('Patch')
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="input-block mb-0">
                  <label
                    >Role Name <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter Role Name"
                    required
                    value="{{$role->name}}"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              data-bs-dismiss="modal"
              class="btn btn-back cancel-btn me-2"
            >
              Close
            </button>
            <button
              type="submit"
              data-bs-dismiss="modal"
              class="btn btn-primary paid-continue-btn"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
