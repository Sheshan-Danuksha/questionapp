function next() {

    var q = document.getElementById("q");
    var a = document.getElementById("floatingTextarea2Disabled");
    var div1 = document.getElementById("div1");

    var r = new XMLHttpRequest;

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            div1.innerHTML = t;

        }
    }

    r.open("GET", "aprocess.php", true);
    r.send();

}
function add() {

    var q = document.getElementById("exampleInputEmail1").value;
    var a = document.getElementById("floatingTextarea2Disabled2").value;

    var r = new XMLHttpRequest;

    var f = new FormData();
    f.append("a", a);
    f.append("q", q);
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                alert(t);

                document.getElementById("exampleInputEmail1").value = "";
                document.getElementById("floatingTextarea2Disabled2").value = "";
            } else {
                alert(t);

                document.getElementById("exampleInputEmail1").value = "";
                document.getElementById("floatingTextarea2Disabled2").value = "";
            }

        }
    }

    r.open("POST", "addprocess.php", true);
    r.send(f);

}


function answer() {
    document.getElementById("div2").className = "d-block form-floating mb-3"
}


function load() {
    var r = new XMLHttpRequest;

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
        }
    }
    r.open("GET", "caddprocess.php", true);
    r.send();
}
function rate() {
    var ra = document.getElementById("customRange2").value;
    var c = document.getElementById("floatingTextarea2Disabled3").value;

    var r = new XMLHttpRequest;
    var f = new FormData();
    f.append("ra", ra);
    f.append("c", c);

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                alert("Thank you Rating");

                var ra = document.getElementById("customRange2").value = "";
                var c = document.getElementById("floatingTextarea2Disabled3").value = "";
            } else {
                alert(t);
                var ra = document.getElementById("customRange2").value = "";
                var c = document.getElementById("floatingTextarea2Disabled3").value = "";
            }

        }
    }
    r.open("POST", "rateProcess.php", true);
    r.send(f);
}