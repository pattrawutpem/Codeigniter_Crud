<form action="<?= site_url('crud/Crud_emp/insert_emp'); ?>" method="post">
  <div class="row p-5">
    <h3 class="text-center fs-1 fw-bold">เพิ่มไขข้อมูล</h3>
    <div class="col-6 mb-3">
      <label class="form-label">Name :</label>
      <input type="text" class="form-control" name="employee_name" placeholder="Enter Name" required>
    </div>
    <div class="col-6 mb-3">
      <label class="form-label">Surname :</label>
      <input type="text" class="form-control" name="employee_surname" placeholder="Enter Surname" required>
    </div>
    <div class="col-12 mb-3">
      <label class="form-label">Position :</label>
      <select class="form-select" name="employee_position">
        <option>Select Position</option>
        <option value="นักศึกษา">นักศึกษา</option>
        <option value="อาจารย์">อาจารย์</option>
        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
      </select>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= site_url('crud') ?>" class="btn btn-danger">Cancel</a>
    </div>
  </div>
</form>