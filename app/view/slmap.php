
<div role="tabpanel" class="tab-pane fade in active" id="slmap">
    <div class="sub-menu">
        <ul class="nav nav-tabls">
            <li role="presentation"><a class="sl_mp" href="../app/controllers/slmap_tab.php?id=reservoir">Reservoir</a></li>
            <li role="presentation"><a class="sl_mp" href="../app/controllers/slmap_tab.php?id=river">River</a></li>
            <li role="presentation"><a class="sl_mp" href="../app/controllers/slmap_tab.php?id=rainfall">Rainfall</a></li>
        </ul>
    </div>
    <div id="sl_dmap">

    </div>

</div>


<script type="text/javascript">
    $(function() {
        $("a.sl_mp").on("click", function(e) {
            e.preventDefault();
            $("#sl_dmap").load(this.href);
        });
    });
    window.onload = $("#sl_dmap").load('../app/controllers/slmap_tab.php');
</script>