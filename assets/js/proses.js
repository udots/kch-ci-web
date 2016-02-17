var base_url = "http://localhost/kch-ci-web/";
var map;

function getPesan(){
	$("#contentSpace").fadeOut("fast");
	$.get(base_url+"index.php/welcome/getarticles/pesan",function(data,status){
		$("#contentSpace").empty();
		var arrData = $.parseJSON(data);
		$('#contentSpace').html("<center><h3>Pesan</h3></center>");
		for (var i=0;i<=arrData.length;i++){
			$('#contentSpace').append(
				"<div style='margin: 20px 0 20px 0; padding: 30px; border:1px solid #666; border-radius: 3px; box-shadow: 10px 10px 5px #999;'>"+
				"Tanggal: "+arrData[i]['tanggal']+"<br>"+
				"Nama: "+arrData[i]['nama']+"<br>"+
				"No HP: "+arrData[i]['no_hp']+"<br>"+
				"Email: "+arrData[i]['email']+"<br>"+
				"Tipe: "+arrData[i]['tipe']+"<br>"+
				"Action: "+arrData[i]['action']+"<br>"+
				"<h3>"+arrData[i]['judul']+"</h3><br>"+
				arrData[i]['isi'].substring(0,300)+"....<br>"+
				"<a href='javascript:void(0)' onclick='getContent(2,"+arrData[i]['id']+")'>Read more</a>"+
				//"<a href='javascript:void(0)' onclick='getContent("+dbTable+","+arrData[i]['id']+")'>Read more</a>"+
				"</div>"
			);
		}
	});
	$("#contentSpace").fadeIn("fast");
	$(location).attr('href','#contentStart');	
}

function getVisitor(){
	$("#contentSpace").fadeOut("fast");
	$.get(base_url+"index.php/welcome/getvisitor",function(data,status){
		$("#contentSpace").empty();
		var arrData = $.parseJSON(data);
		$("#contentSpace").html("<h3>Data Visitor</h3><p>Total visitor: "+arrData.length);
		for (var i=0;i<=arrData.length;i++){
			$("#contentSpace").append(
				arrData[i]['id']+
				" --- Tanggal: "+arrData[i]['tanggal']+
				" --- IP Address: "+arrData[i]['ip_address']+
				" --- Counter: "+arrData[i]['counter']+
				" --- Referer: "+arrData[i]['referer']+"<br>"
			);
		}
	});
	$("#contentSpace").fadeIn("fast");
	$(location).attr('href','#contentStart');
}

function getAdmTools(id){
	if (id==1){
		getPesan();
	} else if (id==2){
		id = "buatArtikel"; 
	} else if (id==3){
		id = "editArtikel";
	} else if (id==4){
		getVisitor();
	}
}

function mapInit(){
	var latlng = new google.maps.LatLng(-6.908351,107.6091789);
	var myOptions = {
		zoom: 15, 
		center: latlng, 
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	map.setCenter(latlng);

	var infowindow = new google.maps.InfoWindow({
		content: "Krischan - BEC lt UG Blok C18 Telp. (022) 4222954<br>Double click for fullscreen maps"
	});

	var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		draggable: false,
		title: "Krischan - BEC lt UG Blok C18 Telp. (022) 4222954\nDouble click for fullscreen maps"
	});
	infowindow.open(map,marker);

	google.maps.event.addListener(marker,'click',function(){
		infowindow.open(map,marker);
	});

	google.maps.event.addListener(marker,'dblclick',function(){
		$(location).attr('href','https://www.google.co.id/maps/place/Krischan/@-6.908351,107.6091789,18z/data=!4m5!1m2!2m1!1skrischan!3m1!1s0x2e68e6380778a4f5:0x3ceeaee8d50a0fb7');
	});


}

function getContent(table,id){
	mapInit();
	if (table == 1){ table = 'content';}
	else if (table == 2){ table = 'pesan';}
	$("#contentSpace").fadeOut("fast");
	$.get(base_url+"index.php/welcome/getcontent/"+table+"/"+id,function(data,status){
		var arrData = $.parseJSON(data);
		if (arrData[0]['kategori'] === 'Tips' || arrData[0]['kategori'] === 'Artikel' || table === 'pesan'){
			$('html, body').animate({
				scrollTop: $("#contentStart").offset().top
			},'slow');
		}
		if (table === 'pesan'){
			$('#contentSpace').html(
				"Tanggal: "+arrData[0]['tanggal']+"<br>Nama: "+arrData[0]['nama']+
				"<br>Email: "+arrData[0]['email']+"<br>No HP: "+arrData[0]['no_hp']+
				"<br>"+arrData[0]['isi']);	
		} else {
			$('#contentSpace').html("<h3><center>"+arrData[0]['judul']+"</center></h3><br>"+arrData[0]['isi']);		
		}		
	});
	$("#contentSpace").fadeIn("fast");	
}

function getCounter(){
	$.get(base_url+"index.php/welcome/counter",function(data,status){
		$('#visitor').html("<p>Visitor: "+data+" visitors</p>");
	});

	getContent('content',1);
}

function getArticles(){
	$("#contentSpace").fadeOut("fast");
	$.get(base_url+"index.php/welcome/getarticles/content",function(data,status){
		$("#contentSpace").empty();
		var arrData = $.parseJSON(data);
		$('#contentSpace').html("<center><h3>Articles and Tips</h3></center>");
		for (var i=0;i<=arrData.length;i++){
			$('#contentSpace').append(
				"<div style='margin: 20px 0 20px 0; padding: 30px; border:1px solid #666; border-radius: 3px; box-shadow: 10px 10px 5px #999;'>"+
				"Tanggal: "+arrData[i]['tanggal']+"<br>"+
				"Kategori: "+arrData[i]['kategori']+"<br>"+
				"Author: "+arrData[i]['author']+"<br>"+
				"<h3>"+arrData[i]['judul']+"</h3><br>"+
				arrData[i]['isi'].substring(0,300)+"....<br>"+
				"<a href='javascript:void(0)' onclick='getContent(1,"+arrData[i]['id']+")'>Read more</a>"+
				"</div>"
			);
		}
	});
	$("#contentSpace").fadeIn("fast");
}

function showLogin(){
	$('#loginForm').fadeIn("slow");
	$('#loginFormAll').fadeIn("slow");
	$('#loginFormClose').fadeIn("slow");
}

$(document).ready(function(){

	$('#loginForm').click(function(){
		$('#loginForm').fadeOut("slow");
		$('#loginFormAll').fadeOut("slow");
		$('#loginFormClose').fadeOut("slow");		
	});			

	$('.Dropdown').hover(function(){
		$('.dropdown-menu').stop(true,true).delay(200).fadeIn();
	}, function(){
		$('.dropdown-menu').stop(true,true).delay(200).fadeOut();
	});

	/*
	$('#map_canvas').click(function(){
		$(location).attr('href','https://www.google.co.id/maps/place/Krischan/@-6.908351,107.6091789,18z/data=!4m5!1m2!2m1!1skrischan!3m1!1s0x2e68e6380778a4f5:0x3ceeaee8d50a0fb7');
	});
	*/

});