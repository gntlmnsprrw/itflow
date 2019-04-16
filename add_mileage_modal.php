<div class="modal" id="addMileageModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-car-side"></i> Add Mileage</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" autocomplete="off">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-7">
              <label>Date</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d"); ?>" required>
              </div>
            </div>
            <div class="form-group col-5">
              <label>Miles</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-car-side"></i></span>
                </div>
                <input type="number" class="form-control" name="miles" required autofocus="autofocus">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Starting Location</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
              </div>
              <input type="text" class="form-control" name="starting_location" required>
            </div>
          </div>
          <div class="form-group">
            <label>Destination</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-arrow-right"></i></span>
              </div>
              <input type="text" class="form-control" name="destination" required>
            </div>
          </div>
          <div class="form-group">
            <label>Purpose</label>
            <textarea rows="4" class="form-control" name="purpose" required></textarea>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="roundtrip" value="1" >
            <label class="custom-control-label" for="customControlAutosizing">Roundtrip</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="add_mileage" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>