<?php 
    session_start();
    include 'connect.php';
    $conn = OpenCon();
    if(!isset($_SESSION['Loggedin']) || $_SESSION['Loggedin']!==true || !isset($_SESSION['id'])){
        header("location: login.php");
    }

?><?php include 'templates/header.html'; ?>
    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <br>
            <div class="col-12"><br>
               <h3>Send us your Feedback</h3>
               <br>
            </div>
             <div class="col-12 col-md-9 offset-md-1">
                 <form>
                     <div class="form-group row">
                         <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                         <div class="col-5 col-md-3">
                             <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                         </div>
                         <div class="col-7 col-md-7">
                             <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="emailid" class="col-md-2 col-form-label">Email</label>
                         <div class="col-md-10">
                             <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-md-6 offset-md-2">
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                 <label class="form-check-label" for="approve">
                                     <strong>May we contact you?</strong>
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-3 offset-md-1">
                             <select class="form-control">
                                 <option>Tel.</option>
                                 <option>Email</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                         <div class="col-md-10">
                             <textarea class="form-control" id="feedback" name="feedback" rows="8"></textarea>
                         </div>
                     </div>
                     <div class="form-group row text-center">
                         <div class="offset-md-2 col-md-10">
                             <button type="submit" class="btn btn-primary">Send Feedback</button>
                         </div>
                     </div>
                 </form>
             </div>
              <div class="col-12 col-md">
             </div>
        </div>
    </div>
    <?php include 'templates/footer.html'; ?>
</body>
</html>