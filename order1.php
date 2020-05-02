<?php
session_start();
?>






<html>
   <head>
      <title>Select Model</title>


    <style>
      .formGroup{
      text-align: center;
    }
    .centerText{
      text-align: center;
    }
    </style>
   </head>
   <body>



      <div class="pageContainer">

         <h2  class="centerText">Select Model</h2>




         <form method="post"  action="order2.php"class="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="name" class="textbox" autofocus required
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div class="formGroup">
               <label> Car model:</label>
               <div class="formElements">
                  <input type="radio" name="model" id="mustang" required value="Mustang">
                  <label for="mustang">Ford Mustang</label><br>
                  <input type="radio" name="model" id="subaru" required value="Subaru">
                  <label for="subaru">Subaru WRX STI</label><br>
                  <input type="radio" name="model" id="corvette" required value="Corvette">
                  <label for="corvette">Corvette</label><br>
                  <!--
                  Note: the "label for" tags bind the labels to the radio button. This allows users
                  to select a button by clicking on the label. This improves accessibility vs. using
                  text without a label.
                  https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/forms/Basic_form_hints
                  -->
               </div><br>

            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit" value="NEXT PAGE"> >> Next >> </button>

            </div><br>
            <div class="centerText vertGap55">
                              <button type="submit" formnovalidate>Submit without validation</button>
                              <br><br>
            <a href="?">Reload page</a>
            </div>


      </div>

   </form>

</div>
</body>
</html>
