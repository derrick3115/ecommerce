<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Derrick</title>
        <!--Bulma-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

 <style>
  li a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
 </style>
    </head>
    <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <?php @include 'C:\Users\Derrick\Documents\Projects\derrickweb\resources\views\nav.php' ?>
          </nav>


    <div style="width: 500px;height: 400px;">
    <div style="font-style: normal;background-color: darkgrey;border-style:hidden;margin-top: -24px;width: 250px;height: 350px;">
        <article class="content" style="padding: 40px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5 style="margin-left: -30px;">Navigation</h5>
            <ul style="margin-left: -10px;">
                <li><a href="">Home</a></li>
                <li><a href="">Friends</a></li>
                <li><a href="">Support</a></li>
                </ul>
        
        
            
            
            </article>  
   
    <aside style="border-style:hidden;background-color: #f2f2f2;width: 1100px;padding: 10px;height: 336px;margin-left: 250px;margin-top: -230px;">
    
                <center><br><br>
            <button type="submit" class="button is-primary" style="margin-left: -240px;" >Signin</button>
            <button type="submit" class="button is-primary" >Signup</button>  
<button type="submit" class="button is-primary" >Logout</button>
        </form>

    


</div>
    </aside>
</div>

    
        <footer class="footer" style="margin-top: -50px;"><center>
            <p>&times;
                derrick .M &copy; 2020</p>


        </footer>
       
    </body>
</html>
