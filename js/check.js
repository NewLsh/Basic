function setday() {
  var mydate = new Date();
  var t2 = mydate.getFullYear();
  var t3 = mydate.getMonth();
  var t4 = mydate.getDay();
  var t5 = t2 + '-' + t3 + '-' + t4;
  document.write(t5);
}
setday();
