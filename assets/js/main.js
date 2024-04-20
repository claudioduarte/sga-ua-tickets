// RELOAD EVERY 60 SECONDS
// DISABLED DUE TO IN PERSON APPOINTMENT

//window.setTimeout(function(){document.location.reload(true); }, 60000);


$(document).ready(function() {
  function getMonthName(monthNumber){
    var month = new Array();
    month[0]="janeiro";
    month[1]="fevereiro";
    month[2]="março";
    month[3]="abril";
    month[4]="maio";
    month[5]="junho";
    month[6]="julho";
    month[7]="agosto";
    month[8]="setembro";
    month[9]="outubro";
    month[10]="novembro";
    month[11]="dezembro";

    return month[monthNumber];
  }

  function handleSingleDigit(num) {
    return ((num.toString().length === 1) ? "0" + num : num);
  }

  function getFormattedDate() {
    var date = new Date(Date.now());

    var formattedDate = handleSingleDigit(date.getDate()) + " "
                      + handleSingleDigit(getMonthName(date.getMonth())) + " "
                      + date.getFullYear() + " ";
  
    var formattedTime = handleSingleDigit(date.getHours()) + ":"
                      + handleSingleDigit(date.getMinutes()) + ":"
                      + handleSingleDigit(date.getSeconds());
  
    return formattedDate + formattedTime;
  }
  
  function updateClock() {
    document.getElementById('clock').innerHTML = getFormattedDate();
  }
  
  updateClock();
  setInterval(updateClock, 1000);

  function checkDayOfWeek() {
    var date = new Date(Date.now());
    var dayOfWeek = date.getDay();

    if (dayOfWeek === 0 || dayOfWeek === 6) {
      console.log("closed");
    } else {
      console.log("open");
    }
  }

  checkDayOfWeek();
});