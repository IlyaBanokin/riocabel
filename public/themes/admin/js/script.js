/* Author:

*/

$(document).ready(function()
{
	//$(window).resize(resizeAdminMain);
	//resizeAdminMain();
});

function resizeAdminMain()
{
	var windowWidth=$(document).width();
	$('.maincontent').width(windowWidth-250);
}