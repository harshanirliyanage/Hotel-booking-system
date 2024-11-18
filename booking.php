<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width, intial-scale=1.0">
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <TITLE>Getset booking form</TITLE>
    <link rel="stylesheet" href="styleBooking.css">
</HEAD>
<BODY>
    <header>
        <div class="logo">
          <img src="photo1686316618.jpeg">
        </div>
        <nav>
          <ul>
          
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Feedback</a></li>
            
          </ul>
        </nav>
        <div class="login">
          <button>Login/Register</button>
        </div>
      </header>
      
      
     <div class="container">
        <form class="form-group" method="POST" action="process_booking.php">
            <div id="form">
                <h1 style="color:rgb(243, 233, 233); font-size:200%; text-align:center;"><b>Booking Now</b> </h1>
             
             
                <div id="first-group">
                    <div id="content">
                        <i class="fa fa-solid fa-user"></i>
                       
                    <input type="text" id="input-group" placeholder="First name">

                
                </div>
                <div id="content">
                    
                    <i class="fa fa-solid fa-phone"></i>
                    <input type="text" id="input-group" placeholder="Phone number">

                </div>
                <div id="content">
                    
                    <i class="fa fa-solid fa-calendar-days"></i>
                    <input type="text" id="input-group" placeholder="Departure date">

                </div>
                <div id="content">
                    
                    <i class="fa fa-duotone fa-users "  aria-hidden="true"></i>
                    <select id="input-group">
                    <option value="">No of guests</option>
                    <option value="">1-5</option>
                    <option value="">6-10</option>
                    <option value="">11-20</option> 
                </select>

                </div>
                <div id="content">
                    
                    <i class="fa fa-regular fa-id-card"></i>
                    <input type="text" id="input-group" placeholder="ID number">

                </div>
            
                </div>
                
                <div id="secand-group">
                    <div id="content">
                        <i class="fa fa-solid fa-user"></i>
                       
                    <input type="text" id="input-group" placeholder="Last name">

                
                </div>
                
                <div id="content">
                    
                    <i class="fa fa-solid fa-envelope"></i>
                    <input type="text" id="input-group" placeholder="Email address">

                </div>
                <div id="content">
                    
                    <i class="fa fa-solid fa-calendar-days"></i>
                    <input type="text" id="input-group" placeholder="Arrival date">

                </div>


                <div id="content">
                    
                    <i class="fa fa-duotone fa-users "  aria-hidden="true"></i>
                    <select id="input-group" >
                    <option value="">Country</option>
                    <option value="">Australia</option>
                    <option value="">Indunesia</option>
                    <option value="">Sri-Lanka</option> 
                    <option value="">India</option>
                    <option value="">China</option>
                    <option value="">Japan</option>
                    <option value="">Singappore</option> 
                </select>

                </div>
                <div id="content">
                    
                    <i class="fa fa-solid fa-calendar-days"></i>
                    <input type="text" id="input-group" placeholder="Arrival date">

                </div>
                </div>
                <div id="content">
                <input type="text" id="input-group" placeholder="Note:">
                </div>
                <br>
                <input type="checkbox" id="condition" name="condition" value="agree">
                <label for="condition" style="color: aliceblue; font-size: large;"> Agree with terms and conditions</label><br>
                <button type="submit" value="submit" id="submit-btn1"><a href="Untitled-1.html">Confirm</a></button>
                
              
              
                    </div>
                      
        </form>
    </div>
</body>
</html>