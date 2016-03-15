function click_notif()
{
	$("a.delete").bind("click", function(e) {
        $attr=$(e.target);
        $conf = confirm("Are you sure you want to delete the selected record?");
        if($conf)
        {
            return window.location.href=$attr.val();
        }
    });
}