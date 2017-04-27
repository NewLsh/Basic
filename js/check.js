// function setday() {
  var day = new Date();
  var y = getFullYear(day);
  var m = getMonth(day) + 1;
  var d = getDay(day);
  var dat = y +'-'+ m +'-'+d;
  document.write(dat);
  document.write("hello a nice day");
// }
