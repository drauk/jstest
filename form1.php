<?php
// http/extra.topology.org/jstest/form1.php   2017-11-12   Alan U. Kennington.
// $Id$

// Substitute for the old import_request_variables("p") function (POST).
//------------------------------//
//  import_request_variables_p  //
//------------------------------//
function import_request_variables_p() {
    if ($_POST) {
        foreach ($_POST as $name => $value) {
            $x = "xpost_" . $name;
            global $$x;
            $$x = $value;
            }
        }
    } // End of function import_request_variables_p.

// Get an argument from the POST. Uses "variable variables".
//----------------------//
//      fetch_post      //
//----------------------//
function fetch_post($name) {
    $x = "xpost_" . $name;      // The text received from POST.
    $a = "post_" . $name;       // The plain text received from POST.
    $d = "dpost_" . $name;      // Text with slashes added.
    $h = "hpost_" . $name;      // Text with HTML entities.
    global $$a, $$d, $$h, $$x;
    if (!get_magic_quotes_gpc()) {
        // This is the case that the argument is passed verbatim.
        $$a = isset($$x) ? $$x : "";
        $$d = addslashes($$a);
        $$h = htmlspecialchars($$a);
        }
    else { // In this case, PHP has added slashes.
        $$d = isset($$x) ? $$x : "";
        $$a = stripslashes($$d);
        $$h = htmlspecialchars($$a);
        }
    } // End of function fetch_post.

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
<title>form 1 handler</title>
</head>

<body>
<center>
<span style=\"font-size:160%;\">form 1 handler<br></span>
</center>
");

import_request_variables_p();
fetch_post("field1");
fetch_post("field2");

echo("
Field 1 = \"$hpost_field1\"<br>
Field 2 = \"$hpost_field2\"<br>
");


//-----------------------------------------------------------------------------
echo("\n</body></html>\n");

?>
