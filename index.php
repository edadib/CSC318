<?php include('header.php');
?>
<!-- Content start here -->
<div class="container" style="margin-top:50px">
<center><h2>Welcome to Carmax</h2>
<div class="w3-content w3-display-container">
        <center>
            <img class="mySlides" src="assets/images/812%20Superfast4.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20Spyder2.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/CaliforniaT.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso5.jpg" style="width: 800px; height: 500px">
        </center>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          </div>
        </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusSlides(n) {
              showDivs(slideIndex += n);
            }
            
            function currentSlide(n) {
              showDivs(slideIndex = n);
            }
    
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              if (n > x.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" active", "");
              }
              slideIndex++;
              if(slideIndex>x.length) {slideIndex=1}
              x[slideIndex-1].style.display = "block";  
              setTimeout(showDivs, 4000);
            }
        </script>
</div>
<br><br>
<?php
include('footer.php');
?>
