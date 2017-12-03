// http/extra.topology.org/jstest/jstest1.js   2017-11-17   Alan U. Kennington.
// $Id$
// Some Javascript functions.
/*-------------------------------------------------------------------------
Functions in this source file.

set_wh
test_slice
body_onload
form1valid
input1check
-------------------------------------------------------------------------*/

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
var object2 = document.getElementById("input1output");
if (object1.checkValidity() == false) {
    var msg1 = object1.validationMessage;
    if (msg1 == null)
        object2.innerHTML = "[null]";
    else if (msg1 == "")
        object2.innerHTML = "[empty]";
    else
        object2.innerHTML = msg1;
    }
else {
    object2.innerHTML = "fine";
    }
}

/*
var confirmed = confirm("confirmation");
if (confirmed) {
    alert("confirmed");
    }
else {
    alert("not confirmed");
    }
var str1 = prompt("string test", "default");
alert(str1);
*/
