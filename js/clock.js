document.addEventListener('DOMContentLoaded', function() {
    function updateTime() {
      var now = new Date();
      var timeString = now.toLocaleTimeString();
      document.getElementById('clock').textContent = timeString;
      console.log(timeString);
    }
    setInterval(updateTime, 1000); // Update time every second
    updateTime(); // Initial call to set the time immediately

  });
  