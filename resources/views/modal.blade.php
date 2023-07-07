<!-- Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ URL::to('save') }}" id="addform">
                <div class="mb-3">
                    <label for="firstname">first Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="enter first name" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Last  Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="enter first name" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submitbtn" class="btn btn-primary">Save </button>
                </div>
                </form>

        </div>
      </div>
    </div>
  </div>

  {{-- edit modal --}}

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ URL::to('update') }}" id="editform">
                <input type="hidden" id="memid" name="id">
                <div class="mb-3">
                    <label for="firstname">first Name</label>
                    <input type="text" name="firstname" class="form-control"  id="firstname">
                </div>
                <div class="mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="enter first name" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submit" class="btn btn-primary">update </button>
                </div>
                </form>

        </div>
      </div>
    </div>
  </div>


  {{-- delete modal --}}
  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h3 class="text-center">Are you sure you want to delete member?</h3>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="deletemember" class="btn btn-primary">Delete </button>
        </div>
      </div>
    </div>
  </div>


