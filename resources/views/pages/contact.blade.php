<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mia`s Blog - Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IEB support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--Default nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiNLf6OArMkPLPMf5zyATWHLnq7wSUr7X12bqCJ6HNFihbRLOi" width="50" height="30" class="d-inline-block align-top" alt="logo">
              Mia's Blog
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
             <ul class="nav navbar-nav navbar-right">             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        My Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> 
             </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h1>Contact Me</h1>
               <hr>
               <form>
                   <div class="form-group">
                       <label name="email">Email:</label>
                       <input id="email" name="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <label name="subject">Subject:</label>
                       <input id="email" name="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <label name="message">Message:</label>
                       <textarea id="message" name="message" class="form-control">Type your message here...</textarea> 
                   </div>
                   <input type="submit" value="Send message" class="btn btn-success">
               </form>
            </div>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>