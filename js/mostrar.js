function executeCode(file) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', file, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('result').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}