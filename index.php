<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SMTP Tester</title>
</head>
<body>
  <div class="container">
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="text-center">SMTP Tester</h1>
      <form action="send.php" method="post" class="form from-group">
         
          <div class="row">
              <div class="col-md-6"><div class="label">SMTP Host</div></div>
              <div class="col-md-6"><input type="text" name="host" class="form-control"></div>
          </div>
          
          <div class="row">
              <div class="col-md-6"><div class="label">SMTP port</div></div>
              <div class="col-md-6"><input type="text" name="port" class="form-control"></div>
          </div>
          
          
          <div class="row">
              <div class="col-md-6"><div class="label">Username</div></div>
              <div class="col-md-6"><input type="text" name="username" class="form-control"></div>
          </div>
          
          <div class="row">
              <div class="col-md-6"><div class="label">Password</div></div>
              <div class="col-md-6"><input type="text" name="password" class="form-control"></div>
          </div>
          
          <div class="row">
              <div class="col-md-6"><div class="label">From email</div></div>
              <div class="col-md-6"><input type="text" name="from" class="form-control"></div>
          </div>
          
          <div class="row">
              <div class="col-md-6"><div class="label">To email</div></div>
              <div class="col-md-6"><input type="text" name="to" class="form-control"></div>
          </div>
          
          <div class="row">
              <div class="col-md-6"><div class="label">Subject</div></div>
              <div class="col-md-6"><input type="text" name="subject" class="form-control" value="hey are u free?"></div>
          </div>
          <div class="row">
              <div class="col-md-6"><div class="label">Test</div></div>
              <div class="col-md-6"><input type="submit" name="submit" class="btn btn-success" value="Send mail"></div>
          </div>
          
      </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    
     
  </div>
   
    
</body>
</html>