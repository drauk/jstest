<?php
// http/extra.topology.org/jstest/index.php   2017-12-10   Alan U. Kennington.
// $Id: http/extra.topology.org/jstest/index.php 6d3b349aaf 2017-12-10 08:37:12Z Alan U. Kennington $

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
td, th { padding-left:3pt; padding-right:3pt; }
--></style>
<title>javascript test 1</title>
<script>\"use strict\";</script>
<script src=\"jstest1.js\"></script>
</head>

<body onload=\"body_onload();\">
<center>
<span style=\"font-size:160%;\">javascript test 1<br></span>
</center>
");

//-----------------------------------------------------------------------------
echo("
<span id=\"js_okay\">Javascript is off.</span><br>

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
= \"changed text 1\";'>change text 1</button><br>

<button type=\"button\"
onclick='document.getElementById(\"text1\").innerHTML
= \"original text 1\";'>restore text 1</button><br>

<span id=\"text1\">original text 1</span><br>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.fontSize = \"10px\";'>text 1
font = 10px</button><br>

<button type=\"button\"
onclick='document.getElementById(\"text1\").style.fontSize = \"20px\";'>text 1
font = 20px</button><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<p><hr>
Click <q>set wh</q> to replace <q>original text wh</q> with screen
width/height.<br>
<span id=\"wh_screen\">original text wh</span><br>

<button type=\"button\"
onclick='set_wh();'>set wh</button><br>

<span id=\"wh_screen2\">original text wh</span><br>

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
</script>
");

//-----------------------------------------------------------------------------
echo("\n</body></html>\n");

?>
