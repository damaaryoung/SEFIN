<!-- AKSES MENU -->
<?php
    $menu = json_decode($json_menu);
    for($i=0; $i<count($menu); $i++):
?>
    <li class="nav-item">
        <a href="" class="nav-link " style="color: #fff">
            <i class="nav-icon fas fa-th" style="color: #FFDE00"></i>
            <p>
                <?php echo $menu[$i]->master_menu?>
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
        <?php for($ii=0;$ii<count($menu[$i]->sub_menu);$ii++): ?>
            <li class="nav-item">
                <a id="<?php echo $menu[$i]->sub_menu[$ii]->url?>" href="javascript:void(0)" class="nav-link" style="color: #fff">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo $menu[$i]->sub_menu[$ii]->menu?></p>
                </a>
                <script>
                    $('#<?php echo $menu[$i]->sub_menu[$ii]->url?>').on('click', function(e){
                        e.preventDefault();
                        NProgress.start();

                        $.ajax({
                            url : 'menu_controller/<?php echo $menu[$i]->sub_menu[$ii]->url ?>',
                            dataType: 'html'
                        })
                        .done(function(response){
                            $('#main-content').html(response);
                            NProgress.done();
                        })
                        .fail(function(jqXHR){
                            $('#main-content').load('<?php echo base_url('Rusak') ?>');
                        NProgress.done();
                        });
                    });
                </script>
            </li>
        <?php endfor ?>
        </ul>
    </li>
<?php endfor ?>
<!-- AKSES MENU -->