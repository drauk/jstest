// http/extra.topology.org/jstest/jstest1.js   2017-12-11   Alan U. Kennington.
// $Id: http/extra.topology.org/jstest/jstest1.js 06812be459 2017-12-10 13:19:58Z Alan U. Kennington $
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
window_prop_list
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
if (typeof(str) != "string")
    return str;
else
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
document.getElementById("js_okay").innerHTML = "Javascript is on.";

var js_props = [
    "appCodeName",
    "appName",
    "appVersion",
    "cookieEnabled",
    "geolocation",
    "language",
    "onLine",
    "platform",
    "product",
    "userAgent"
    ];
var n_js_props = js_props.length;
for (var i = 0; i < n_js_props; i += 1) {
    document.getElementById("js_" + js_props[i]).innerHTML =
     "<tt>" + escapeHTML(navigator[js_props[i]]) + "</tt>";
    }
// "JavaEnabled" is a method.
document.getElementById("js_javaEnabled").innerHTML =
 "<tt>" + escapeHTML(navigator.javaEnabled()) + "</tt>";
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
// Show the validity parameter(s).
object1validity.innerHTML = "";
var v_params = [
    "customError",
    "patternMismatch",
    "rangeOverflow",
    "rangeUnderflow",
    "tooLong",
    "typeMismatch",
    "valueMissing",
    "valid"
    ];
var n_v_params = v_params.length;
for (var i = 0; i < n_v_params; i += 1) {
    // Assume that all of the properties are boolean.
    if (object1.validity[v_params[i]]) {
        if (object1validity.innerHTML != "")
            object1validity.innerHTML += ", ";
        object1validity.innerHTML += v_params[i];
        }
    }
}

//----------------------//
//   window_prop_list   //
//----------------------//
function window_prop_list() {
var wind_props = [
    "closed",
    "defaultStatus",
    "document",
    "frameElement",
    "frames",
    "history",
    "innerHeight",
    "innerWidth",
    "length",
    "localStorage",
    "location",
    "name",
    "navigator",
    "opener",
    "outerHeight",
    "outerWidth",
    "pageXOffset",
    "pageYOffset",
    "parent",
    "screen",
    "screenLeft",
    "screenTop",
    "screenX",
    "screenY",
    "sessionStorage",
    "scrollX",
    "scrollY",
    "self",
    "status",
    "top"
    ];
var n_wind_props = wind_props.length;
var str_wind_props = "";
for (var i = 0; i < n_wind_props; i += 1) {
    str_wind_props += wind_props[i] + ": " + escapeHTML(window[wind_props[i]])
        + "<br>";
    }
return str_wind_props;
}
