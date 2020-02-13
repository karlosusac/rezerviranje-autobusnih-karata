<nav  class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
  <a class="navbar-brand ml-3" href="index.php?controller=Frontpage&method=index">Herc-Bus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Frontpage&method=index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Schedule&method=index">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=BuyTicket&method?index">Buy a Ticket</a>
      </li>
      <?php if(isset($_SESSION["id"])){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.php?controller=Settings&method=index" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php print($account->getAccountName()); ?> </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?controller=Profile&method=index">Profile</a>
          <a class="dropdown-item" href="index.php?controller=Settings&method=index">Settings</a>
          <a class="dropdown-item" href="index.php?controller=Schedule&method=logout">Log out</a>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header d-flex justify-content-center bg-dark">
      <h1 class="text-light">Settings:</h1>
    </div>
    

      <form action="index.php?controller=Settings&method=changeUserInfo" method="POST">
          <label class="d-flex justify-content-center text-muted">Change Account Name: </label>
          <input class="form-control" type="text" name="chngUserName" value="<?php print($account->getAccountName()); ?>" >
          <label class="d-flex justify-content-center text-muted">Change First Name: </label>
          <input class="form-control" type="name" name="chngFirstName" value="<?php print($account->getName()); ?>" >
          <label class="d-flex justify-content-center text-muted">Change Last Name: </label>
          <input class="form-control" type="name" name="chngLastName" value="<?php print($account->getlastname()); ?>" >
          <label class="d-flex justify-content-center text-muted">Change E-mail: </label>
          <input class="form-control" type="email" name="chngEmail" value="<?php print($account->getEmail()); ?>" >
          <label class="d-flex justify-content-center text-muted">Change Phone number: </label>
          <input class="form-control" type="name" name="chngPhoneNumber" value="<?php print($account->getPhoneNumber()); ?>" >
          <label class="d-flex justify-content-center text-muted">Enter your password to confirm: </label>
          <input class="form-control" type="password" name="chngPassword">
          
          <div class="container">
          <div class="float-right my-3">
          <a href="index.php?controller=Profile&method=index"><button type="submit" class="btn btn-outline-success">Confirm</button>
          </div>

          <div class="float-left my-3">
            <a href="index.php?controller=ChangePassword&method=index"><button class="btn btn-outline-primary">Change password</button></a>
          </div>
        </div>
          
      </form>
    </div>
  </div>
</div>


<script src="asts/javaScript/registerPasswordValidation.js">