<div class="modal custom-modal fade" id="add_permission" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Permissions to {{$role->name}} role</h4>
          </div>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
    
          <div class="modal-body">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="input-block mb-0">
                      <label
                        >Search Permissions <span class="text-danger">*</span></label
                      >
                      <select class="form-control permissions" name="" multiple="multiple">
                            @foreach ($allpermissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                       </select>
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
              Add Permissions
            </button>
          </div>
       
      </div>
    </div>
  </div>
