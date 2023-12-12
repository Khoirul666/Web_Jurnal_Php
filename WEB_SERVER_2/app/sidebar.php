<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <?php include('app/main-menu.php') ?>
        </div>

        <ul class="pcoded-item pcoded-left-item">
            <li class="<?= $posisi_page==''?'active':'' ?>">
                <a href="index.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                    <span class="pcoded-mtext">DASHBOARD</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="<?= $posisi_page=='bencana'||$posisi_page=='add_bencana'||$posisi_page=='update_bencana'?'active':'' ?>">
                <a href="index.php?data=bencana" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                    <span class="pcoded-mtext">BENCANA</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="<?= $posisi_page=='kejadian'||$posisi_page=='add_kejadian'||$posisi_page=='update_kejadian'?'active':'' ?>">
                <a href="index.php?data=kejadian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                    <span class="pcoded-mtext">KEJADIAN</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        
    </div>
</nav>