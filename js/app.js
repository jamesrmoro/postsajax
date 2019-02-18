jQuery(function($){

	var page = 1;
	// Listar posts
	var listarPostsAjax = function(page){
		$.ajax({
			url : ajaxPosts.siteURL + "/wp-admin/admin-ajax.php",
			type: 'GET',
			data: {
				action: 'postsList',
				page: page
			},
			success:function(resposta){
				if ($(resposta).hasClass('item')) {
		  			$(".list-posts-js").append(resposta);
		  			pagestatus = false
		  		} else {
		  			$(".list-posts-js").append(resposta);
		  			pagestatus = true
		  		}
		  	},
		  	error: function(errorThrown){
		    	console.log("Erro");
		  	}
		})
	}

	setTimeout(function(){
		window.onscroll = function() {
			var altura = $('.list-posts-js').height();
			var posicao = $(".scroll-js").offset().top;
			console.log("Posição:", posicao);
			console.log("Altura:", posicao);
		    if (posicao + 600 > altura && pagestatus == false) {
		    	alert("Executa função para rodar paginação");
		    	page++
		    	listarPostsAjax(page);
		    	pagestatus = true
		    }
	    }
	}, 300);

	listarPostsAjax(page);

	// $(".more-posts").on("click", function(){
	// 	listarPostsAjax(page);
	// })

	// $("body").on("click", ".page-item", function(){
	// 	number = $(this).html();
	// 	listarPostsAjax(number);
	// 	$(".page-item").removeClass("active");
	// 	$(this).addClass("active");
	// })

})