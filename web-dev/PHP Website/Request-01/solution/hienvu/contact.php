 <!DOCTYPE html>
 <html lang="en">

 <head>
   <title>Liên hệ</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </head>
 <style>

 </style>

 <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dropdown
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#">Disabled</a>
         </li>
       </ul>
       <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
     </div>
   </nav>
   <div class="container">
     <div class="jumbotron py-3" style="margin-bottom:0;">
       <h2 style="margin-left:-20px;">Turtle's Shop</h2>
       <p><i class="fas fa-map-marker fa-fw"></i>VietNam</p>
       <p><i class="fas fa-phone"></i>+8408022605</p>
       <p><i class="fas fa-envelope fa-fw"></i><a href="mailto:turtle@gmail.com">turtle@gmail.com</a></p>
     </div>
     <br />
     <div class="row">
       <div class="col-sm-4">
         <form action="/action_page.php">
           <div class="form-group">
             <div class="col-sm-14">
               <div class="card bg-light">
                 <div class="card-header"><i class="fas fa-edit"></i>Leave your note</div>
                 <div class="card-body text-center">
                   <div class="col-sm-6"><input type="text" class="form-control" placeholder="*Name" id="name"></div>
                   <div class="col-sm-6"><input type="text" class="form-control" placeholder="*Phone" id="phone"></div>
                   <div class="col-sm-12"><input type="text" class="form-control" placeholder="Email" id="email"></div>
                   <div class="col-sm-12"><input type="text" class="form-control" placeholder="Address" id="address"></div>
                   <div class="col-sm-12"><textarea class="form-control" placeholder="*Leave your note here" rows="5"></textarea></div>
                   <div class="col-sm-2"><button type="button" class="btn btn-success">Send</button></div>
                 </div>
               </div>
             </div>
           </div>
         </form>
       </div>
       <div class="col-sm-8">
         <div class="card bg-light">
           <div class="card-header"><i class="fas fa-map"></i>Map to us</div>
           <div class="card-body1">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8575610708003!2d106.68530841411678!3d10.82221066130785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e0!3m2!1svi!2s!4v1589526128038!5m2!1svi!2s" width="100%" height="357" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
         </div>
       </div>
     </div>
     
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </div>
 </body>

 </html>