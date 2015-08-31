<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   <script>
    var map;
    var marker_1;
    var map_position = new google.maps.LatLng(37.4769887,127.0009573);
    var factory1_pos = new google.maps.LatLng(37.4769887,127.0009573);
    var infowindow = new google.maps.InfoWindow( );
    function initialize() {
      var mapOptions = [{
    // 줌을 적용
     zoom: 16,
     // 지도의 중심지점을 설정
     center: factory1_pos,
     // 지도의 타입 설정
     mapTypeId: google.maps.MapTypeId.ROADMAP
    }];
    alert(document.getElementById('map-canvas'));
    map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions[0]);
     //마커제작
    marker_1 = new google.maps.Marker({position:factory1_pos,map:map});
      infowindow.setContent("<p>지구보존 운동연합회</p>");
      infowindow.open(map,marker_1);
     }
     google.maps.event.addDomListener(window, 'load', initialize);
    </script>	
</head>
<body>
<!-- 지도 영역 start-->

   <div style="margin-top:10px;">
    <div style=" width:740px; height:400px; border:3px solid #84c4ce;" id="map-canvas"></div>
    <!--지도 세부 설명 영역 start-->
    <table style="width:740x; border-top:3px solid #949497; margin:10px 0px; border-spacing: 0px;">
     <tr>
      <td  style="border-bottom:1px solid #c9c9c9;background-color:#ebebeb;width:100px; text-align:center;height:40px;">주소
      <td  style="border-bottom:1px solid #c9c9c9;width:640px;padding:0 10px;">서울시 서초구 방배로 22길(방배동 1024-6) 삼원빌딩 4층 
     </tr>
     <tr>
      <td  style="border-bottom:1px solid #c9c9c9;background-color:#ebebeb;width:100px; text-align:center;height:40px;">연락처
      <td  style="border-bottom:1px solid #c9c9c9;width:640px;padding:0 10px;">TEL : 02)554-3161   /  FAX :  02)556-3161
     </tr>
    </table>
   </div>
   <!--지도 세부 설명 영역 start-->
   <!-- 지도 영역 end-->

</body>
</html>