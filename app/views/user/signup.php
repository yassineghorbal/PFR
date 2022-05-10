<?php require APPROOT . "/views/inc/header.php"; ?>


<div class="container">
    <form id="signup_form">
        <div class="mb-3">
            <label for="fname" class="form-label">First Name <span>*</span></label>
            <input type="text" class="form-control" id="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name <span>*</span></label>
            <input type="text" class="form-control" id="lname">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address <span>*</span></label>
            <input type="text" class="form-control" id="address">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address <span>*</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password <span>*</span></label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
        <div id="redirect_link">
            already a member? <a href="http://localhost/Mobishop/user/login">Log in</a>
        </div>
    </form>
</div>

<?php require APPROOT . "/views/inc/footer.php"; ?>