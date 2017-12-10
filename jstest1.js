// http/extra.topology.org/jstest/jstest1.js   2017-12-10   Alan U. Kennington.
// $Id: http/extra.topology.org/jstest/jstest1.js 6d3b349aaf 2017-12-10 08:37:12Z Alan U. Kennington $
// Some Javascript functions.
// This is totally rubbish test-code, written in haste.
// Please ignore the code quality!!
// I do know how to write good code with good layout.
/*-------------------------------------------------------------------------
Functions in this source file.

escapeHTML
confirm_test
prompt_test
set_wh
test_slice
body_onload
form1valid
input1check
-------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------
Make a string safe to include as text within HTML.
-------------------------------------------------------------------------*/
//----------------------//
//      escapeHTML      //
//----------------------//
function escapeHTML(str) {
var map1 = {
    "&":    "&amp;",
    "<":    "&lt;",
    ">":    "&gt;",
    '"':    "&quot;",
    "'":    "&#x27;",
    "/":    "&#x2F;"
    };
return str.replace(/[&<>"'\/]/g, function(s) { return map1[s]});
}

//----------------------//
//     confirm_test     //
//----------------------//
function confirm_test() {
var confirm1output = document.getElementById("confirm1output");
var confirmed = confirm("confirmation");
if (confirmed) {
    confirm1output.innerHTML = "confirmed";
    }
else {
    confirm1output.innerHTML = "not confirmed";
    }
}

//----------------------//
//      prompt_test     //
//----------------------//
function prompt_test() {
var prompt1output = document.getElementById("prompt1output");
var str1 = prompt("string test", "default");
prompt1output.innerHTML = "<q>" + escapeHTML(str1) + "</q>";
}

//----------------------//
//        set_wh        //
//----------------------//
function set_wh() {
var w_screen = screen.availWidth;
var h_screen = screen.availHeight;
document.getElementById("wh_screen").innerHTML =
"w_screen = " + String(w_screen) +
", h_screen = " + String(h_screen);
}

//----------------------//
//      test_slice      //
//----------------------//
function test_slice() {
var str1 = "0123456789";
var str2 = str1.slice(2, 4);
var str3 = str1.slice(-4, -2);
alert("Found str2 = \"" + str2 + "\", str3 = \"" + str3 + "\"");
}

//----------------------//
//      body_onload     //
//----------------------//
function body_onload() {
document.getElementById("js_okay").innerHTML =
"Javascript is on.";
}

//----------------------//
//       form1valid     //
//----------------------//
function form1valid() {
var field1 = document.forms["form1"]["field1"].value;
var field2 = document.forms["form1"]["field2"].value;
if (field1 == "") {
    alert("field 1 must be a non-empty string");
    return false;
    }
if (field2 == "") {
    alert("field 2 must be a non-empty string");
    return false;
    }
return true;
}

//----------------------//
//      input1check     //
//----------------------//
function input1check() {
var object1 = document.getElementById("input1");
var object1output = document.getElementById("input1output");
var object1validity = document.getElementById("input1validity");
if (object1.checkValidity() == false) {
    var msg1 = object1.validationMessage;
    if (msg1 == null)
        object1output.innerHTML = "[null]";
    else if (msg1 == "")
        object1output.innerHTML = "<q></q> [empty string]";
    else
        object1output.innerHTML = "<q>" + escapeHTML(msg1) + "</q>";
    }
else {
    object1output.innerHTML = "[success]";
    }
object1validity.innerHTML = "";
if (object1.validity.rangeOverflow) {
    if (object1validity.innerHTML != "")
        object1validity.innerHTML += " ";
    object1validity.innerHTML += "rangeOverflow";
    }
}
