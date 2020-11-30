



$(document).ready(function () {
  let daily = document.querySelectorAll('.daily-news')

  let weekly = document.querySelectorAll('.weekly-news')
  let dailyBtn = document.querySelector('.daily-btn')
  let weeklyBtn = document.querySelector('.weekly-btn')
  weeklyBtn.addEventListener("click", function () {

    for (i = 0; i < weekly.length; ++i) {
      if(weekly[i].style.display === "none"){
        weekly[i].style.display = "block";
      }
        for (j = 0; j < daily.length; ++j) {
        daily[j].style.display = "none";
      }
    }
    dailyBtn.classList.remove('active')
    weeklyBtn.classList.add('active')
  });
  
  dailyBtn.addEventListener("click", function () {
    for (i = 0; i < weekly.length; ++i) {
      if(weekly[i].style.display === "block"){
        weekly[i].style.display = "none";
        
      }
      for (j = 0; j < daily.length; ++j) {
        daily[j].style.display = "block";
      }
    }
    dailyBtn.classList.add('active')
    weeklyBtn.classList.remove('active')
  });
})
