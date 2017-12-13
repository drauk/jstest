<?php
// http/extra.topology.org/jstest/index.php   2017-12-14   Alan U. Kennington.
// $Id: http/extra.topology.org/jstest/index.php fb55e22ffb 2017-12-13 16:07:14Z Alan U. Kennington $

echo("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html lang=\"en\"><head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<meta http-equiv=\"Content-Style-Type\" content=\"text/css\">
<meta name=\"robots\" content=\"noindex,nofollow,noarchive\">
<style type=\"text/css\"><!--
blockquote { color:#000000; background-color:#eeffde;
 border-width:1px; border-style:dotted; text-align:left; padding:3px; }
body { font-family:arial,sans-serif,helvetica; }
pre { color:#000000; background-color:#eeffde;
 border-width:1px; border-style:dotted;
 margin-left:5px; margin-right:5px; text-align:left; padding:3px; }
pre.plain { background-color:transparent; border-style:none; }
table.main1 { padding:0px; margin:1px; }
table.main2 { padding:0px; margin:1px; }
table.main3 { padding:0px; margin:0px; white-space:nowrap; }
td, th { padding-left:3pt; padding-right:3pt; }
--></style>
<title>javascript test 1</title>
<script>\"use strict\";</script>
<script src=\"jstest1.js\"></script>
</head>

<body onload=\"body_onload();\" onunload=\"body_onunload();\">
<center>
<span style=\"font-size:160%;\">javascript test 1<br></span>
</center>
");

//-----------------------------------------------------------------------------
echo("
<span id=\"js_okay\">Javascript is off.<br>
This web page is probably more interesting if you turn Javascript on.</span><br>

<br>
Properties of your browser:<br>

<table class=\"main3\" cellspacing=0 cellpadding=0>
<tr>
<td>Code name:</td>
<td><span id=\"js_appCodeName\"></span></td>
</tr>

<tr>
<td>App name:</td>
<td><span id=\"js_appName\"></span></td>
</tr>

<tr>
<td>App version:</td>
<td><span id=\"js_appVersion\"></span></td>
</tr>

<tr>
<td>Cookie enabled:</td>
<td><span id=\"js_cookieEnabled\"></span></td>
</tr>

<tr>
<td>Geolocation:</td>
<td><span id=\"js_geolocation\"></span></td>
</tr>

<tr>
<td>Language:</td>
<td><span id=\"js_language\"></span></td>
</tr>

<tr>
<td>On line:</td>
<td><span id=\"js_onLine\"></span></td>
</tr>

<tr>
<td>Platform:</td>
<td><span id=\"js_platform\"></span></td>
</tr>

<tr>
<td>Product:</td>
<td><span id=\"js_product\"></span></td>
</tr>

<tr>
<td>User agent:</td>
<td><span id=\"js_userAgent\"></span></td>

<tr>
<td>Java enabled:</td>
<td><span id=\"js_javaEnabled\"></span></td>
</tr>
</table>

(There seems to be no direct way to determine the Javascript version.)<br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Properties of your computer screen:<br>

Screen dimensions set when this web page has been loaded:<br>
<span id=\"wh_screen2\">screen w/h</span><br>

<br>
Click <q>set screen w/h</q> to replace <q>screen w/h</q> with dynamic screen
width/height.<br>

<button type=\"button\" onclick='set_wh();'>set screen w/h</button>
<span id=\"wh_screen\">screen w/h</span><br>

(This is almost pointless because the screen dimensions are fixed usually.<br>
On the other hand, there are some ways to adjust the perceived screen size.)<br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Properties of your browser window:<br>

Window dimensions: <span id=\"wh_window2\">window w/h</span><br>

<br>
Window property list:
<button type=\"button\"
onclick='document.getElementById(\"window_props\").innerHTML =
 \"<br>\" + window_prop_list();'>show</button>
<button type=\"button\"
onclick='document.getElementById(\"window_props\").innerHTML =
 \"<br>\";'>hide</button>
<span id=\"window_props\"><br></span>

<br>
Window-document property list:
<button type=\"button\"
onclick='document.getElementById(\"window_doc_props\").innerHTML =
 \"<br>\" + window_doc_prop_list();'>show</button>
<button type=\"button\"
onclick='document.getElementById(\"window_doc_props\").innerHTML =
 \"<br>\";'>hide</button>
<span id=\"window_doc_props\"><br></span>

<br>
Current geometry of the window after a <q>resize</q>:<br>
<span id=\"handler_resize_out\"></span>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>

Click the following button to test the alert-button pop-up.<br>
<button type=\"button\" onclick='alert(\"alert button\");'>alert button
test</button><br>

<br>
Click the following button to test the confirm-button pop-up.<br>
<button type=\"button\" onclick='confirm_test();'>confirm-button
test</button><br>
confirm-test output: <span id=\"confirm1output\"></span><br>

<br>
Click the following button to test the prompt-button pop-up.<br>
<button type=\"button\" onclick='prompt_test();'>prompt-button test</button><br>
prompt-test output: <span id=\"prompt1output\"></span><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
<button type=\"button\"
onclick='document.getElementById(\"text1\").innerHTML
= \"changed text 1\";'>change text 1</button>

<button type=\"button\"
onclick='document.getElementById(\"text1\").innerHTML
= \"original text 1\";'>restore text 1</button>

<br>
<span id=\"text1\">original text 1</span><br>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.fontSize = \"10px\";'>text 1
font = 10px</button>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.fontSize = \"20px\";'>text 1
font = 20px</button>

<br>
<button type=\"button\"
onclick='document.getElementById(\"text1\").style.color=\"red\";'>text 1 colour
= red</button>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.color=\"green\";'>text 1
colour = green</button>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.color=\"black\";'>text 1
colour = black</button>
<br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
<span id=\"date1\">date 1</span><br>

<button type=\"button\" onclick='document.getElementById(\"date1\").innerHTML =
escapeHTML(Date());'>set date 1</button>
(reset by each click)<br>

<span id=\"dateUTC\">date UTC</span><br>

<button type=\"button\" onclick='document.getElementById(\"dateUTC\").innerHTML
= escapeHTML(date0.toUTCString());'>set date UTC</button>
(set once at beginning of script)<br>

<button type=\"button\"
onclick='this.innerHTML=escapeHTML(Date());'>get date</button><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
<button type=\"button\"
onmouseover='mouseOverCount1 += 1;
this.innerHTML=\"mouse over count = \" + String(mouseOverCount1) +
\", mouse out count = \" + String(mouseOutCount1);'
onmouseout='mouseOutCount1 += 1;
this.innerHTML=\"mouse over count = \" + String(mouseOverCount1) +
\", mouse out count = \" + String(mouseOutCount1);'
>test mouse-over</button><br>

<button type=\"button\"
onkeydown='keyDownCount1 += 1;
this.innerHTML=\"key-down count = \" + String(keyDownCount1);'
>test key-down (first click on button)</button><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Test slices (2, 4) and (&minus;4, &minus;2) of the string <q>0123456789</q>:<br>
<button type=\"button\"
onclick='test_slice();'>test slice (should give 23 and 67)</button><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Test a form-validation function.<br>
<form
name=\"form1\"
action=\"form1.php\"
onsubmit=\"return form1valid();\"
method=\"post\">
Field 1: <input type=\"text\" name=\"field1\"> must be non-empty<br>
Field 2: <input type=\"text\" name=\"field2\"> must be non-empty<br>
<input type=\"submit\" value=\"Submit\">
</form>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Test the limits from 1 to 12 for a numerical input.<br>
Returns empty string with Opera 12.16 (2013).<br>
Returns meaningful error message with:
Chrome 12.0.742.112 (2011),
Firefox 57.0.1 (2017).<br>
<input id=\"input1\" type=\"number\" min=\"1\" max=\"12\" required>
<button onclick=\"input1check()\">Enter</button><br>
Output: <span id=\"input1output\">[not yet set]</span><br>
Validity: <span id=\"input1validity\">[not yet set]</span><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<script>
// Global variables.
var mouseOverCount1 = 0;
var mouseOutCount1 = 0;
var keyDownCount1 = 0;
var date0 = new Date();

// Get screen dimensions.
var screen0 = {
w: screen.availWidth,
h: screen.availHeight,
d: screen.colorDepth,
total_w: screen.width,
total_h: screen.height,
pd: screen.pixelDepth
};

// Code to modify an element must be run after the element has appeared.
document.getElementById(\"wh_screen2\").innerHTML =
\"w = \" + String(screen0.w) +
\", h = \" + String(screen0.h) +
\", d = \" + String(screen0.d) +
\", total_w = \" + String(screen0.total_w) +
\", total_h = \" + String(screen0.total_h) +
\", pd = \" + String(screen0.pd);
// The following line does nothing on my Opera browser.
// console.log(date0);

// Get window dimensions.
var window0 = {
iw: window.innerWidth,
ih: window.innerHeight,
ow: window.outerWidth,
oh: window.outerHeight
};

// Code to modify an element must be run after the element has appeared.
document.getElementById(\"wh_window2\").innerHTML =
\"inner: w = \" + String(window0.iw) +
\", h = \" + String(window0.ih) +
\"; outer: w = \" + String(window0.ow) +
\", h = \" + String(window0.oh);

// Make a field show the current window dimensions.
// Use kludge for handling versionitis.
if (window.addEventListener) {
    window.addEventListener(\"resize\", handler_resize);
    }
else {
    document.getElementById(\"handler_resize_out\").innerHTML =
        \"window.addEventListener is undefined<br>\";
    }

</script>
");

//-----------------------------------------------------------------------------
echo("\n</body></html>\n");

?>
