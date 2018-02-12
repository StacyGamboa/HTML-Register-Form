Register form steps:

You may find the html here: HTML for Register Form

1 - That HTML should be pasted it in the body of the register form. Make it fit.

2 - As we suppose to be using Bootstrap, most of the styles are going to adapt themselves to the template. 

3 - You should take care of the button’s style and the other elements which doesn’t look good in order to make it look like according to the template you are using.


4 - Not all templates comes with a pricing table, so in case you need one, check the HTML for Register Form and abstract the one in it which starts in the line 149 like this <section id="pricing-section" class="pricing-section"> and ends in the line 268, then copy and paste this CSS in a CSS file CSS for the Pricing Table in order to stylish it.


5- In the <head></head> of the register.html you would have to include this Two Scripts so the Form will work correctly and sent the information to the customer.

  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

 <script>
    $(document).on('ready',function(){

      $('#btn-send').click(function(){
        var url = "register.php";

        $.ajax({
           type: "POST",
           url: url,
           data: $("#register-submit").serialize(),
           success: function(data) {
            $("#register-submit")[0].reset();
            window.location.href = 'confirmation-register.html';
          },
         });
      });
    });
    </script>




6 - In case that the template comes with a pricing table: Remember that when the pricing table is on the register.html, you should change its buttons and place radio buttons instead, remember to change its values to the ones offered by the plan. For example:


<div class="col-md-3 col-sm-3">
         <div class="single_pricing">
              <div class="top_text">
                   <h2>Tech Support</h2>
                      <span><i class="fa fa-plus-square-o" aria-hidden="true"></i> 
                               Hourly Rates </span>
              </div>
              <ul>
                  <li><input type="radio" value="1 hour: $45"  name="plan">1 hour: $45</li>
                  <li><input type="radio" value="5 hours: $90" name="plan">5 hours:$90</li>
                  <li><input type="radio" value="20 hours: $135" name="plan">
                   20 hours: $135</li>
                 <li><input type="radio" value="40 hours: $180"  name="plan">
                   40 hours: $180</li>
                 <li><input type="radio" value="60 hours: $225"  name="plan">
                  60 hours: $225</li>

             </ul>

       <div class="text-center">
            <label for="plan4" class="btn btn-primary btn-sm">CHOOSE
                   <input type="radio" value="$180.00"  name="chose">
               </div>
        </div>
  </div>

The text colored with blue this would allow the customer to select an Hourly service and not the whole plan.
In this case the plan above offers an hourly rate. 














But if the plan offers a $75/Monthly Rate for example, then it should be:

<div class="text-center">
                   <label for="plan4" class="btn btn-primary btn-sm">CHOOSE
      <input type="radio" value="[Tech Support for Unlimited Devices &    Issues - Expert Technicians -100% Money Back Guarantee on 1st Issue-Phone Support - Chat Support via Quick Connect Icon - Training & Guidance-Unlimited Computer Tune-Ups - ] ---> ESSENTIAL = $40.00"    name="plan">
     </div>


<div class="text-center" style="margin: 20px 0px;">
           <label for="plan4" class="btn btn-primary btn-sm">CHOOSE
                  <input type="radio" value="[Tech Support for Unlimited Devices & Issues -    Expert Technicians -100% Money Back Guarantee on 1st Issue-Phone Support - Chat Support via Quick Connect Icon - Training & Guidance-Unlimited Computer Tune-Ups - Tech Support Space Virus Slayer Anti-Virus Software (2 PC) - Cloud Data Backup (Can be shared across multiple computers) 250GB ] ---> PLUS = $80.00"  name="plan">
          </div>
The text colored with pink above are the services of each plan.
The input with the value will be receive by the customer once they submit the form, so it is important to include all respective services, plan’s name and price.

Or something that reflects the real value of the plan. 

7 - You will see this at the end of the html for the register form: <img src="images/cc_logos.png" alt="Cards Logo">
It will only display the alt=”” attribute and not the image, since you have to look for the image of the credit cards on Google (should be only Mastercard and Visa) or at any other project.

8 — Please, do not change any of the ids either the name attributes of the inputs, textareas, checkboxes and buttons.

9 - The point 8 is merely because everything in those lines of code is already generic in order to work with the current register form.

10 - Please create a confirmation-register.html in the project so once the customer complete and submit the register form it will show the confirmation-register.html page.

11  - In order for this to work I have created a PHP file which works in the backend and connects the backend with the server in order to return an email  to the user once the registration went through. Here it is: Register PHP. 
 Also you should include an sendemail.php file. here it is: SENDEMAIL.PHP
these two php files are needed for both forms (register and contact form)  to work correctly.
 If you properly follow the steps above, everything is going to be fine.







































Contact form steps:

You may find the html here: HTML for Contact Form

1 - That HTML should be pasted it in the body of the contact form. Make it fit.

2 - As we suppose to be using Bootstrap, most of the styles are going to adapt themselves to the template. 

3 - You should take care of the button’s style and the other elements which doesn’t look good in order to make it look like according to the template you are using.

5- In the <head></head> of the contact.html you would have to include this Two Scripts so the Form will work correctly and sent the information to the customer.

 <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

 <script>
  $(document).on('ready',function(){

    $('#btn-send').click(function(){
      var url = "sendemail.php";

      $.ajax({
         type: "POST",
         url: url,
         data: $("#formulario").serialize(),
         success: function(data) {
            console.log('sucess', data);
            $("#formulario")[0].reset();
            $('#resp').html(data);
            window.location.href = 'confirmation.html';
         },
         
      });
    });
  });
  </script>


8 — Please, do not change any of the ids either the name attributes of the inputs, textareas, checkboxes and buttons.

9 - The point 8 is merely because everything in those lines of code is already generic in order to work with the current contact form.

10 - Please create a confirmation.html in the project so once the customer complete and submit the contact form it will show the confirmation.html page.

11  - In order for this to work I have created a PHP file which works in the backend and connects the backend with the server in order to return an email  to the user once the registration went through. Here it is: Register PHP. 
 Also you should include an sendemail.php file. here it is: SENDEMAIL.PHP
these two php files are needed for both forms (register and contact form)  to work correctly.
 If you properly follow the steps above, everything is going to be fine.

