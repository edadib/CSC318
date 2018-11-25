<?php include('header.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="design.css">
	<title>CARMAX</title>
</head>
<body>
    <div class="w3-content w3-display-container">
        <center>
            <img class="mySlides" src="assets/images/488%20GTB.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB2.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB3.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB4.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB5.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB6.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/488%20GTB7.jpg" style="width: 800px; height: 500px">
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
        <br><br>
        <center>
            <table style="width:800px;border: 1px solid red;">
              <tr style="border: 1px solid red;">
                <th>Base Line</th>
                <th><center>Included</center></th>
                <th>High Line</th>
                <th><center>Included</center></th>
              </tr>
              <tr>
                <td>Twin Turbo V8</td>
                <td><center>/</center></td>
                <td>Twin Turbo V8</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Fiorano bodykit</td>
                <td><center>X</center></td>
                <td>Fiorano bodykit</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>20" BBS Special Star</td>
                <td><center>X</center></td>
                <td>20" BBS Special Star</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Leather Bucket</td>
                <td><center>X</center></td>
                <td>Leather Bucket</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Special Fiorano Red Colour</td>
                <td><center>X</center></td>
                <td>Special Fiorano Red Colour</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Price</td>
                <td><center>230000</center></td>
                <td>Price</td>
                <td><center>230000</center></td>
              </tr>
            </table>
            <br>
        </center>
</body>
</html>

<?php include('footer.php') ?>