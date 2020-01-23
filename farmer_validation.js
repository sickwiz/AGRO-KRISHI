function valid() {
    var na = document.getElementById('name').value;
    var kc = document.getElementById('kcc').value;
    var p = document.getElementById('pp').value;
    var p1 = document.getElementById('pp1').value;
    var h = document.getElementById('pin').value;


    if (!na.match(/^[a-zA-z][\w]+$/)) {


        alert("name must  contain alphabets only");
        return false;
    }
    if (!kc.match(/^[0-9]+$/)) {
        alert("kcc must  contain numbers only");
        return false;
    }
    if (!h.match(/^[0-9]+$/)) {
        alert("pincode must  contain numbers only");
        return false;
    }
    if (p.length < 5 || p.length > 20) {
        alert("password must be between the length 5-20");
        return false;
    }
    var reg = /^[a-zA-z]+[0-9]+$/;
    if (!reg.test(p)) {
        alert("password must contain alphabets,digits and special symbols");
        return false;
    }
    if (!p1.match(p)) {
        alert("passwords do not match");
        return false;
    }

    return true;
}