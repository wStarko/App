(function () {
  var minutes = true; // change to false if you'd rather use seconds
  var interval = minutes ? 60000 : 1000;
  var IDLE_TIMEOUT = 5; // 3 minutes in this example
  var idleCounter = 0;
  document.onmousemove = document.onkeypress = function () {
      idleCounter = 0;
  };
  window.setInterval(function () {
      if (++idleCounter >= IDLE_TIMEOUT) {
          $("figure").addClass("away");
      }
      else {
        $("figure").removeClass("away");
      }
  }, interval);
}());