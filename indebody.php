<!-- <body>
	<div class="form_box">
		<form id="frmEnquiry" action="" method="post" enctype='multipart/form-data'>
			<div class="header">
				<span>Email With Multiple file Attachments</span><br />
			</div>
			<div id="mail-status"></div>
			<div>
				<label>Your Name:</label><br /> 
				<input type="text" name="s_name" id="userName" class="demoInputBox" placeholder="Name">
			</div>
			<div>
				<label>Your Email:</label><br /> 
				<input type="email" name="s_email" id="userEmail" class="demoInputBox" placeholder="Email">
			</div>
			<div>
				<label>Subject:</label><br /> 
				<input type="text" name="s_subject" id="subject" class="demoInputBox" placeholder="Subject">
			</div>
			<div>
				<label>Message:</label><br /> 
				<textarea name="s_message" id="content" class="demoInputBox" cols="60" rows="6" placeholder="Content"></textarea>
			</div>
			<div>
				<label>Attachment:</label><br /> 
				<input type="file" name="file[]" class="demoInputBox" multiple="multiple">
			</div>
			<div>
				<button type="submit" class="button btnAction" onclick="this.classList.toggle('button--loading')">
					<span class="button__text">Save</span>
				</button>
			</div>
		</form>
		<div style="display: none;">
			<img src="LoaderIcon.gif" />
		</div>
	</div>
</body>


<script type="text/javascript">
	$(document).ready(function (e){
		$("#frmEnquiry").on('submit',(function(e){
			e.preventDefault();
			const btn = document.querySelector(".button");
			btn.classList.add("button--loading");
			$('#loader-icon').show();
			var valid;	
			valid = validateContact();
			if(valid) {
				$.ajax({
					url: "mail-send.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					success: function(result){
						document.querySelector("#mail-status").style.color = "#156434";
						$("#mail-status").html(result.response);
						btn.classList.remove("button--loading");
						if (result.msg == 'success') {
							$('#frmEnquiry')[0].reset();
							document.querySelector("#mail-status").style.color = "#156434";
							document.querySelector("#mail-status").innerHTML = response.message;
						} else if(result.msg == 'error') {
							document.querySelector("#mail-status").style.color = "rgb(196, 18, 43)";
							document.querySelector("#mail-status").innerHTML = result.response;
						}
					}       
				});
			}
		}));
		




		function validateContact() {
			var valid = true;	
			$(".demoInputBox").css('background-color','');
			$(".info").html('');
			$("#userName").removeClass("invalid");
			$("#userEmail").removeClass("invalid");
			$("#subject").removeClass("invalid");
			$("#content").removeClass("invalid");
			if(!$("#userName").val()) {
				$("#userName").addClass("invalid");
				$("#userName").attr("title","Required");
				valid = false;
			}
			if(!$("#userEmail").val()) {
				$("#userEmail").addClass("invalid");
				$("#userEmail").attr("title","Required");
				valid = false;
			}
			if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
				$("#userEmail").addClass("invalid");
				$("#userEmail").attr("title","Invalid Email");
				valid = false;
			}
			if(!$("#subject").val()) {
				$("#subject").addClass("invalid");
				$("#subject").attr("title","Required");
				valid = false;
			}
			if(!$("#content").val()) {
				$("#content").addClass("invalid");
				$("#content").attr("title","Required");
				valid = false;
			}
			return valid;
		}
	});
</script> -->