<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Contact INSA'Twitter</title>

  </head>

  <body>

    <?php include 'htmlnavBar.php';?>


    <div class="container col-md-10 col-md-offset-1">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="well well-sm">
              <form class="form-horizontal" action="" method="post">
              <fieldset>
                <legend class="text-center">Contact us<br/></legend>
        
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Name</label>
                  <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control ">
                  </div>
                </div>
        
                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">Your E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>
        
                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Your message</label>
                  <div class="col-md-9">
                    <textarea class="form-control taille-textarea" type="text" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                  </div>
                </div>
        
                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-default btn-xs">Submit</button>
                  </div>
                </div>
              </fieldset>
              </form>
            </div>
          </div>
        </div>

        <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; INSA'Twitter 2017</p>
              </div>
              <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
        </footer>

      </div><!-- FIN CONTAINER -->


  </body>
</html>