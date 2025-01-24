function isChecked() {
    if (document.getElementById("surprise").checked){
        document.getElementById("howLong").value = Math.floor(Math.random() * 8) + 4;
        document.getElementById("howLong").readOnly = true;
        document.getElementById("attempts").value = Math.floor(Math.random() * 30) + 3;
        document.getElementById("attempts").readOnly = true;
    } else {
        document.getElementById("howLong").value = 5;
        document.getElementById("howLong").readOnly = false;
        document.getElementById("attempts").value = 5;
        document.getElementById("attempts").readOnly = false;
    }
}