<div class="side-bar">
    <div class="logo-details" title="AniZone">
        <h2 class="logo-name"></h2>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../admin/dashboard.php" class="" title="Dashboard">
                <i class='bx bx-grid-alt' ></i>
                <span class="links-name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="../account/account.php" class="" title="Accounts">
                <i class='bx bxs-user-account'></i>
                <span class="links-name">Accounts</span>
            </a>
        </li>
        <li>
            <a href="../girl/girl.php" class="" title="Polls">
                <i class='bx bx-poll'></i>
                <span class="links-name">Girls</span>
            </a>
        </li>
        <li>
        <a href="#" class="" title="Polls Answer">
                <i class='bx bx-task' ></i>
                <span class="links-name">Request</span>
            </a>
        </li>
        <li>
        <hr class="line">
        <li id="logout-link">
            <a class="logout-link" href="../login/logout.php" title="Logout">
                <i class='bx bx-log-out'></i>
                <span class="links-name">Logout</span>
            </a>
        </li>
    </ul>
</div>
<div id="logout-dialog" class="dialog" title="Logout">
    <p><span>Are you sure you want to logout?</span></p>
</div>
<script>
    $(document).ready(function() {
        $("#logout-dialog").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".logout-link").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");
            $("#logout-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "No" : function() {
                    $(this).dialog("close");
                }
            });
            $("#logout-dialog").dialog("open");
        });
    });
</script>