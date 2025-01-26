<div class="contrainner">
    <div class="row justify-content-md-center">
        <div class="text-center">
            <h1>Hello World </h1>
            <p>Codeigniter HMVC Test</p>
        </div>
        
        <div class="col-10">
            <table class="table" id="myTable">
            <div class="float-end ">
                <a href="<?= site_url('crud/Crud_emp/index'); ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</i></a>
            </div>
                <thead class="table-dark text-center">
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach ($employee_list as $emp): ?>
                        <tr>
                            <td><?php echo $emp->employee_name; ?></td>
                            <td><?php echo $emp->employee_surname; ?></td>
                            <td><?php echo $emp->employee_position; ?></td>
                            <td>
                                <a href="<?= site_url('crud/Crud_emp/edit_form/').$emp->employee_id; ?>" class="btn btn-warning edit_sale"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= site_url('crud/Crud_emp/remove_emp/').$emp->employee_id; ?>" class="btn btn-danger" onclick="return confirm('confirm');"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>