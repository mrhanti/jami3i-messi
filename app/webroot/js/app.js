$(document).ready(function() {
	$('#loader').hide();
	$('#CommentAddForm').submit(function() {
		
		$('#loader').show();
		var dataString = $('#CommentAddForm').serializeArray();
		
		$.ajax({
		  type: 'POST',
		  url: '/jami3i/comments/add',
		  data: dataString,
		  success: function(data) {
		  	var container = $('<div>').addClass('left comment');
		  	
		  	container.append($('<span id="name"></span>').text(data.Comment.name));
		  	container.append($('<span id="created"></span>').text(' le 12-20-2012'));
		  	container.append($('<div>').attr('id', 'content').text(data.Comment.content)).delay(3000);
		  	
		  	$('#noComments').remove();
		  	container.appendTo('#comments');
		  	
		  	$('#loader').hide();
		  },
		  dataType: 'json'
		});
		return false;
	});

	$('#getTitles').live('click', function() {
		$.get(
			'/jami3i/home/ajaxRequest',
			function(data) {
				var object = jQuery.parseJSON(data);
                $.each(object, function(i,item) {
                	console.log(item.Post.title);
                	console.log(item.Post.id);
				});
            }
		);
		return false;
	});
	
});
