function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
};
$(".mobile-login-button ul li.sub").click(function () {
    $('.mobile-login-button ul li .submenu').toggleClass("d-block");
 });
 
 $(document).ready(function () {
    let cards = document.querySelectorAll(".accordian-item");
    [...cards].forEach((card) => {
      card.addEventListener("click", function () {
        $(".accordian-item .answer")
          .not($(this).find(".answer"))
          .removeClass("open");
        $(".accordian-item i")
          .not($(this).find("i"))
          .removeClass("ion-md-remove");
        $(this).find(".accordian-link , .answer").toggleClass("open");
        $(this).find("i").toggleClass("ion-md-remove");
      });
    });
  });
  
