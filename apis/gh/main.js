$(document).ready(function(){
	console.log('ready');
	$('#inputUser').on('keyup',function(e){
  	let username = e.target.value;

  	$.ajax({
 		url : 'https://api.github.com/users/'+username,
 		data :{
 			client_id : '556c796539dee79f951e',
 			client_secret : '765cba53689fc2e319ba6493b1f74b18bd51cb35'
 		}
  	}).done(function(user){
  		$('#profile').html(`
  			<div class="col-md-15">

                <div class="panel panel-primary" >
                    <div class="panel-heading"><h3 class="panel-title"><a href = "${user.html_url}">
                    ${user.name}</a>, ${user.location} (${user.type})
                    </h3></div>
                    <div class="panel-body">
                        <div class="col-md-9">
                          Bio:  ${user.bio}
                        </div>
                        <div class="col-md-3">
                        <img src="${user.avatar_url}" class="thumbnail" style="width:100%;">
                        </div>
                        <hr>
                        <div class="col-md-4">
                          Followers:  ${user.followers}
                        </div>
                         <div class="col-md-4">
                           Following: ${user.following}
                        </div>
                        <div class="col-md-3">
                            Repos: ${user.public_repos}
                        </div>
                        <hr>
                        <div class="col-md-6">
                            Email: ${user.email}
                        </div>

                    </div>
                </div>
            </div>

  			  			`);
  	});
});
});