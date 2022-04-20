<?php require APPROOT . "/views/inc/header.php"; ?>



<div class="container">
    <form id="login_form">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary w-100">Submit</button>
    <div id="redirect_link">
        not a member yet? <a href="http://localhost/PFR/user/signup">Sign up</a>
    </div>
    </form>
</div>

<?php require APPROOT . "/views/inc/footer.php"; ?>