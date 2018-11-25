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
            <img class="mySlides" src="assets/images/GTC4Lusso.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso2.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso3.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso4.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso5.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso6.jpg" style="width: 800px; height: 500px">
            <img class="mySlides" src="assets/images/GTC4Lusso7.jpg" style="width: 800px; height: 500px">
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
                <td>Naturally aspirated V8</td>
                <td><center>X</center></td>
                <td>Twin Turbo v6</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>AeroDynamic Kit</td>
                <td><center>X</center></td>
                <td>AeroDynamic Kit</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>20" Gold Rays Te37</td>
                <td><center>X</center></td>
                <td>20" Gold Rays Te37</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Leather Bucket</td>
                <td><center>X</center></td>
                <td>Leather Bucket</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Special Matte Black Colour</td>
                <td><center>X</center></td>
                <td>Special Matte Black Colour</td>
                <td><center>/</center></td>
              </tr>
              <tr>
                <td>Price</td>
                <td><center>60000</center></td>
                <td>Price</td>
                <td><center>60000</center></td>
              </tr>
            </table>
            <br>
        </center>
</body>
</html>

<?php include('footer.php') ?>