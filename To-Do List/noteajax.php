<!DOCTYPE html>
<html>

<body>
<button onclick="loadDoc()">Click</button>
<div id="demo">
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "note.php", true);
  xhttp.send();
}
</script>

</body>
</html>			