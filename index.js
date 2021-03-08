function datavalidation() {
  var p, q, text, status;

  p = document.getElementById("blue").value;
  q = document.getElementById("black").value;

  if (isNaN(p) || p < 1 || p > 10 || isNaN(q) || q < 1 || q > 5 ) {
    text = "Input not valid";
    status =  false;
  } else {
    text = "Input OK";
    status =  true;
  }
  document.getElementById("output").innerHTML = text;
  return status;
}
