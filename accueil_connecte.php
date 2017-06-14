<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<html>
<head>
	<title>INSA'Twitter</title>

</head>
<body >
	<?php include 'htmlnavBar.php';?>



	<div class="container">
	  <div class="row ">
			<div class="container col-md-10 col-md-offset-1" > <!--colonne 10 debut -->
		      <div class="tab-content"> <!--tab content début -->
		      	<div id="accueil" class="tab-pane fade in active"> <!--Accueil début -->
					<div class="container" style="width:100%;"> <!--container de publication début -->
					    <div class="panel panel-default"> <!--Publier début -->
					      <div class="panel-heading">
					      	<h3>Publier</h3>
					      	<form action="accueil_connecte.php" method="POST">
							    <div class="form-group ">
							      <label for="comment">Message :</label>
							      <textarea class="form-control taille-textarea" rows="5" id="comment" type="text" name="textpublie" placeholder="Entrer votre texte"></textarea><br/>
							      <div class='btn-toolbar pull-right '>
							    	<input type="submit" class="btn btn-default btn-xs button-bas-droite" name="click" value="publier">
							      </div><br/>
							    </div>
							 </form>
					  	  </div>
					    </div> <!--Publier fin -->


					    <div class="panel panel-default"> <!--Twitt début -->
					      	<div class="panel-heading"> <!--panel heading pour toutes les publications début -->
					      		<h3>Publication</h3>
					      		<br>
					      		<div class="panel-group" id="addMessage" > <!--panel group debut-->
									<?php
									include("include/publication_abonnees.php");
									include("include/publication_message.php");
									?>
                  <script
                  		src="https://code.jquery.com/jquery-3.2.1.js"
                  		integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
                  		crossorigin="anonymous"></script>
                  <script type="text/javascript">
                    $(document).ready(function () {
                      $('.jaimeb').click(function () {
                        var id_message = $(this).attr('id')
                        var dataObject = {};
                        dataObject["id_message"] = id_message;
                        dataObject["id_user"] = <?php echo $_SESSION["id"] ?>;
                        $.ajax({
                        	url:  'include/jaime.php',
                        	timeout: 30000,
                          type: 'POST',
                          data: dataObject,
                        	success: function(data) {
                            $("#" + -id_message).html(" J'aime : " + data);
                        	},
                        	error: function() {
                        		$("#" + -id_message).html(0);
                        	},
                        });
                      });
                    });
                  </script>
								</div> <!--panel group fin -->
							</div><!--panel heading pour toutes les publications fin -->
					    </div><!--Twitt fin -->
					</div> <!--container de publication fin -->
				</div><!-- Acceuil fin -->


			  </div> <!--tab content fin -->
		    </div><!--colonne 10 fin -->
	  </div><!--row fin -->
	</div><!--container fin -->


</body>
</html>
