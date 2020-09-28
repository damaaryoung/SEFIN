<form id="frm_access">
<input type="hidden" name="idx" value="<?php echo $idx ?>">
    <div class="modal-header">
        <a href="javascript:void(0)" class="btn btn-primary btn-sm w-25" onclick="set_access()"><i class="fa fa-check"></i></a>
        <a href="javascript:void(0)" class="btn btn-danger btn-sm w-25" data-dismiss="modal"><i class="fa fa-times"></i></a>
    </div>
    <div class="modal-body" style="padding:10px;height:400px; overflow-y:scroll">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>MENU</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $res): ?>
                <tr>
                    <?php if(in_array($res->id, $result_arr)): ?>
                        <td><input type="checkbox" name="menu[]" value="<?php echo $res->id ?>" checked="checked"></td>
                    <?php else: ?>
                        <td><input type="checkbox" name="menu[]" value="<?php echo $res->id ?>"></td>
                    <?php endif ?>
                    <td><?php echo $res->nama ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</form>