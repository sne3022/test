var moviecontroller = angular.module("moviecontrollers", ["movieservice"]);
moviecontroller.$inject =["$scope", "$element", "baseUrl", "movieFactory"];

moviecontroller.controller("moviecontroller", function($scope, $element, baseUrl, movieFactory){
	var movies =TAFFY();
	movies.store("movie");//휘발성 local 저장 
	$scope.movie = {};

	$scope.save = function(){
		movies.insert($scope.movie);
		$scope.movie = {};
		alert("저장되었습니다");
	}
	$scope.showdata = function(){
		var data = movies().get();
	}
})

moviecontroller.controller("theatercontroller", function($scope, $element, baseUrl, movieFactory){
	var theaters =TAFFY();
	theaters.store("theater");//휘발성 local 저장 
	$scope.theater = {};

	$scope.save = function(){
		alert("저장");
		theaters.insert($scope.theater);
		$scope.theater = {}; //초기화
	}
	$scope.showdata = function(){
		var data = theaters().get();
	}
});

moviecontroller.controller("screencontroller", function($scope, $element, baseUrl, movieFactory){
	var screens = TAFFY();
	var movies = TAFFY();
	var theaters = TAFFY();

	screens.store("screen"); //휘발성 local 저장 
	movies.store("movie"); //휘발성 local 저장 
	theaters.store("theater"); //휘발성 local 저장 

	$scope.movielist = movies().get();
	$scope.theaterlist = theaters().get();
	$scope.times =[];
	$scope.screen = {};

	$scope.save = function(){
		$scope.screen.theater = $scope.screen.theater.name;
		$scope.screen.movie = $scope.screen.movie.subject;
		$scope.screen.code = $scope.screen.theater +"|"+ $scope.screen.movie +"|"+ $scope.screen.date +"|"+ $scope.screen.time;
		screens.insert($scope.screen);
		$scope.screen = {}; //초기화
		alert("저장되었습니다");
	}

	$scope.showdata = function(){
		var data = srceens.get();
	}

	$scope.addtime = function(){
		$scope.times.push({});
	}

	$scope.saveAuto = function(){
		var startDate = $scope.screen.movie.startdate;
		var endDate = $scope.screen.movie.enddate;
		var strDate = startDate;

		startDate = calcDay(new Date(startDate).valueOf());
		endDate = calcDay(new Date(endDate).valueOf());


		$scope.screen.theater = $scope.screen.theater.name;
		$scope.screen.movie = $scope.screen.movie.subject;

		for(index=startDate; index<=endDate; index++)
		{	
			angular.forEach($scope.times, function(value){
	
				var screenObj = {};
				screenObj.theater = $scope.screen.theater;
				screenObj.movie =$scope.screen.movie;
				screenObj.date = strDate;
				screenObj.time = value.time;
				screenObj.code = screenObj.theater +'|'+ screenObj.movie +'|'+ screenObj.date +'|'+screenObj.time;
				screens.insert(screenObj);
			})

			strDate = nextDate(strDate);

		}
	}

	function calcDay(millisecond)
	{
		return millisecond/1000/60/60/24; //날짜출력
	}

	function nextDate(date)
	{
		var currentDate = new Date(date);
		currentDate.setDate(currentDate.getDate()+1);
		
		var day = currentDate.getDay(); //일
		var year = currentDate.getFullYear(); //년
		var date = currentDate.getDate();  // 
		var month = currentDate.getMonth()+1;//월

		var prefixmonth = month <10 ? '-0': '-';
		var prefixday = day <10 ? '-0': '-';
		var date = year + prefixmonth + month + prefixday + date;
		return date;
	}

	

	$('.menu .item').tab();

})

moviecontroller.controller("seatcontroller", function($scope, $element, baseUrl, movieFactory){
	var screens = TAFFY();
	var movies = TAFFY();
	var theaters = TAFFY();

	screens.store("screen"); //휘발성 local 저장 
	$scope.screenlist = screens().get();
	
	angular.forEach($scope.screenlist, function(value){
		value.checked=false; //false로 초기화
	})

	$scope.delete = function(){
		alert("삭제");
		angular.forEach($scope.screenlist, function(value){
			if(value.checked == true)
			{
				screens({___id:value.___id}).remove();
			}
		})
		$scope.screenlist = screens().get(); //자료 리갱신
	}
	$scope.save = function(){
		alert("저장");
		angular.forEach($scope.screenlist, function(value){
			var db = screens(value.___id);
			if(db.get().count!=value.count)
			{
				db.update({count:value.count});
			}
		})
	}

	$scope.check = function(screen){
		screen.checked = !screen.checked;
	}

})

moviecontroller.controller("ticketingcontroller", function($scope, $element){
	var screens = TAFFY().store("screen");
	var movies = TAFFY().store("movie");;
	var theaters = TAFFY().store("theater");

	//전체검색 하기위한 screenlist, 수정하면서 보여주기위해 currentScreenlist 
	$scope.currentScreenlist = $scope.screenlist = screens().get();
	$scope.currentMovielist = $scope.movielist = movies().get();
	$scope.currentTheatherlist = $scope.theaterlist = theaters().get();

	
	gradeinit();

	function gradeinit()
	{
		angular.forEach($scope.movielist, function(value){
			
			if(value.grade =="r12")
			{
				value.r12=true;
			}
			else if(value.grade=="r15")
			{
				value.r15=true;
			}
			else if(value.grade=="r18")
			{
				value.r18=true;
			}
			else
			{
				value.all=true;
			}
		})
	}

	var currentDate = new Date();
	$scope.day = currentDate.getDay();
	$scope.year = currentDate.getFullYear();
	$scope.date = currentDate.getDate(); 
	$scope.month = currentDate.getMonth()+1;

	$scope.selectedDate = null;
	$scope.selectedMovie = null;
	$scope.selectedTheater = null;
	$scope.selectedSeat = null;
	$scope.datelist = [];
	var day = $scope.day;
	for(var index = $scope.date; index <=31; index++)
	{
		if($scope.month ==2 && index ==29)
		{
			break;
		}
		if(($scope.month ==4 || $scope.month ==6 || $scope.month ==9 || $scope.month ==11) && index==31)
		{
			break;
		}
		var date = {};
		date.date = index;

		switch(day)
		{
			case 0: date.day = "일";break;
			case 1: date.day = "월";break;
			case 2: date.day = "화";break;
			case 3: date.day = "수";break;
			case 4: date.day = "목";break;
			case 5: date.day = "금";break;
			case 6: date.day = "토";break;
		}
		day++;

		if(day >=7)
		{
			day=0;
		}		
		if(index >=31)
		{
			index++;
		}
		$scope.datelist.push(date);
	}


	

	$scope.reflash = function(category, searchWord){

		if(category =="movie"){
			$scope.selectedMovie = searchWord; //단어검색
			$scope.selectedTheater =null;

			var screenlist = $.grep($scope.screenlist, function(value){ //해당 문자열 검색 filter
				return value.movie == searchWord; //return true, false;
			});

			$scope.currentTheatherlist = $.grep($scope.theaterlist, function(value){ //문자열 검색
				for(index in screenlist)
				{
					if(screenlist[index].theater == value.name)
					{
						return true;
					}
				}
			})


		}
		else if(category =="theater")
		{
			$scope.selectedTheater = searchWord;
			if($scope.selectedDate != null && $scope.selectedMovie != null)
			{
				showSeat();
			}
		}
		else if(category =="date")
		{
			var prefixmonth = $scope.month <10 ? '-0': '-';
			var prefixday = searchWord <10 ? '-0': '-';
			$scope.selectedDate = $scope.year +prefixmonth+$scope.month+prefixday+searchWord;
			if($scope.selectedMovie !=null && $scope.selectedTheater != null)
			{
				showSeat();
			}
		}

		

	}
	
	

	function showSeat()
	{
		$scope.currentScreenlist = $.grep($scope.screenlist, function(value){
			var code = value.code.split("|");
			if(code[0]==$scope.selectedTheater && code[1] == $scope.selectedMovie && code[2] == $scope.selectedDate) 
			{
				value.time = code[3];
				$(".seatmovie").removeClass("hidden");
				return true;
			}
			else
			{
				hideSeat();
			}
		})

	}

	function hideSeat()
	{
		$(".seatmovie").addClass("hidden");
	}

	
})

moviecontroller.directive("pointingmenu", function(){
	return{
		restrict: 'A',
		link: function(scope, element, attr){

			element.mouseenter(function(){
				element.addClass('active');
			});
			element.mouseleave(function(){
				
				if(element.data('active')== null || element.data('active')== "false")
				{
					element.removeClass('active');
				}
			});

			element.click(function(){
				$("[pointingmenu]").data('active', "false");
				$("[pointingmenu]").removeClass('active');
				element.data('active', "true");
				element.addClass("active");
			});
		}

	}
})

moviecontroller.directive("moviemenu", function(){
	return{
		restrict: 'A',
		link: function(scope, element, attr){
			element.click(function(){
				$("[linkmenu]").removeClass('active');//전체 지우고
				element.addClass("active");	
			});
		}
	}
})

moviecontroller.directive("theatermenu", function(){
	return{
		restrict: 'A',
		link: function(scope, element, attr){
			element.click(function(){
				$("[theatermenu]").removeClass('active');//전체 지우고
				element.addClass("active");	
			});
		}
	}
})

moviecontroller.directive("datemenu", function(){
	return{
		restrict: 'A',
		link: function(scope, element, attr){
			
			element.click(function(){

				$("[datemenu]").each(function(){ //각 datemenu 에 
					
					if($(this).data('blue')==true)
					{
						$(this).find('.ui.label').addClass('blue');
					}

				})
				if(element.find('.ui.label').hasClass('blue')) //클래스 있는지여부
				{
					element.data('blue',true); 
					element.find('.ui.label').removeClass('blue');
				}
				

				$("[datemenu]").removeClass('active');//전체 지우고
				element.addClass("active");

				$("[datemenu]").find('.ui.label').removeClass('yellow');//전체 지우고
				element.find('.ui.label').addClass("yellow");
			

			});
		}
	}
})


moviecontroller.directive("seatmenu", function(){

	return{
		restrict: 'A',
		link: function(scope, element, attr){
			
			element.click(function(){
				$("[seatmenu]").find('.ui.label').removeClass('black');//전체 지우고
				element.find('.ui.label').addClass("black");
			})
		}
	}
})