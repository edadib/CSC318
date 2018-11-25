<?php 
include('check_member.php'); //load header content for member page
include('header_member.php'); //load header content for member page
include("connection.php"); // connction to database
?>
<center>
    <div>
        
    </div>
    <div class="calc">
      <div class="header">
        <p>
            <input type="text" id="price" name="price" placeholder="Price">
            <label for="price" class="fa fa-usd"></label>
        </p>
            
            <p>
                <input type="text" id="amount2" name="amount2" placeholder="Loan Amount">
                <label for="amount2" class="fa fa-usd"></label>
            </p>
            <p>
            <button class="btn" onclick="myFunction2()">Eligibility</button>
        </p>
            <p id="output2">Monthly Payment</p>
      </div>
      <h1>Auto Loan Calculator</h1>
        <p>
            <input type="text" id="amount" name="amount" placeholder="Loan Amount">
            <label for="amount" class="fa fa-usd"></label>
        </p>
        <p>
            <input type="text" id="months" placeholder="Months">
          <label for="amount" class="fa fa-calendar"></label>
        </p>
        <p>
            <input type="text" id="years" placeholder="Years">
          <label for="amount" class="fa fa-calendar"></label>
        </p>
        <p>
            <input type="text" id="interest" placeholder="Interest Rate">
            <label for="amount" class="fa interest"></label>
        </p>
       <p>
            <input type="text" id="down" placeholder="Down Payment">
            <label for="amount" class="fa fa-arrow-down"></label>
        </p>
        <p>
            <button class="btn" onclick="myFunction()">Calculate</button>
        </p>
        <p id="output">Monthly Payment</p>
        
        <br><br>
        
        <a href="member.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Member Home</a>
        
    </div>
    <script>
        function myFunction2() {
            var carpri = $('#price').val(),
                loan = $('#amount2').val(),
                amount = parseInt(loan),
                price = parseInt(carpri),
                total = price*0.9
                if(loan<=total)
                {
                    document.getElementById("output2").innerHTML = "Eligible";
                }
                else
                {
                    document.getElementById("output2").innerHTML = "Not Eligible";
                }
                
        }
        function myFunction() {
        var loan = $('#amount').val(),
            month = $('#months').val(),
            int = $('#interest').val(),
            years = $('#years').val(),
            down = $('#down').val(),
            amount = parseInt(loan),
            months = parseInt(month),
            down = parseInt(down),
            annInterest = parseFloat(int),
            monInt = annInterest / 1200,
            calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down || 0))).toFixed(2);
      
        document.getElementById("output").innerHTML = calculation;
    }
    
    
    $(function(){
    	var month = $(this).val(),
          doneTypingInterval = 500,
          months = parseInt(month),
          typingTimer;
    
      $('#months').keyup(function(){
          month = $(this).val();
          months = parseInt(month);
      
          clearTimeout(typingTimer);
          if (month) {
              typingTimer = setTimeout(doneTyping, doneTypingInterval);
          }
      });
    
      function doneTyping () {
        $('#years').val(months/12);  
      }
    })
    
    $(function(){
    	var month = $(this).val(),
          doneTypingInterval = 500,
          months = parseInt(month),
          typingTimer;
    
      $('#months').keyup(function(){
          month = $(this).val();
          months = parseInt(month);
      
          clearTimeout(typingTimer);
          if (month) {
              typingTimer = setTimeout(doneTyping, doneTypingInterval);
          }
      });
    
      function doneTyping () {
        $('#years').val(months/12);  
      }
    })
    
    $(function(){
    	var year = $(this).val(),
          doneTypingInterval = 500,
          years = parseInt(year),
          typingTimer;
    
      $('#years').keyup(function(){
          year = $(this).val();
          myears = parseInt(year);
      
          clearTimeout(typingTimer);
          if (year) {
              typingTimer = setTimeout(doneTyping, doneTypingInterval);
          }
      });
    
      function doneTyping () {
        $('#months').val(year * 12);  
      }
    })
    
    
    
    </script>
</center>
<?php include('footer.php') 
?>