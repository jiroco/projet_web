


$(document).ready(function(){
    $("#addMessage").click(function(){
        $("div").before(" 			<div id="addMessage" class="panel panel-default"> <!--panel 1 début-->
								      	<div class="media">
										    <div class="media-left media-top">
										      	<img src="" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;"> <!--mettre une image de profil dans src -->
											</div>
											<div class="media-body">
											    <h4 class="media-heading"><br/>Nom Prénom</h4>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <br/>
											</div>
										</div>
								   </div> <!--panel 1 fin-->
								   <hr/>");
    });

});