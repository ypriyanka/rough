<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Date Picker on click of Calendar Icon</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
#ui-datepicker-div { font-size: 12px; } 
#datepicker{float:left; height:18px;}
h1{font-size: 15px;}
</style>
<script>
$(function() {
    $("#datepicker").datepicker({
       //showOn: both - datepicker will come clicking the input box as well as the calendar icon
       //showOn: button - datepicker will come only clicking the calendar icon
       showOn: 'button',
       //you can use your local path also eg. buttonImage: 'images/x_office_calendar.png'
       buttonImage: 'http://theonlytutorials.com/demo/x_office_calendar.png',
       buttonImageOnly: true,
       changeMonth: true,
       changeYear: true,
       showAnim: 'slideDown',
       duration: 'fast',
       dateFormat: 'dd-mm-yy'
    });
});
</script>
</head>
<body>
<h1>jQuery Date picker with Calendar Icon Tutorial - <a href="http://blog.theonlytutorials.com">Blog.Theonlytutorials.com</a></h1>
<input type="text" id="datepicker" value="23-11-2013">
</body>
</html>