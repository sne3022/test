
var button=function(callback){ //callback:buttonClick()
	this.callback = callback;
}

button.prototype={ //클래스 실체가 보이지 않는다. 실체가 보이는부분 ui
	ui: null, parent:null, //멤버필드 
	init: function(parent, value){ //초기화 시켜주는 함수
		this.parent = parent; //parent: multibox 
		this.ui=$("<input>"); //jquery 객체
		this.ui.attr({type: "button", value: value}); 
		parent.ui.append(this.ui); 
		this.ui.click(this.parent, this.callback); //click:eventListener(multibox, eventhandler)
	}, //callback 함수란 외부에있는 함수를 갖다 쓰는 것.
	setcolor: function(color){ //이벤트 핸들러
		this.ui.css("color", color);
	//	this.ui.click(this.callback);
	},
	addclass: function(add){ //이벤트 핸들러
		this.ui.addClass(add); 
	},
	removeclass: function(remove){
		this.ui.removeClass(remove); 
	}
	
}

var select = function(callback){
	this.callback = callback;
}

select.prototype={
	ui:null, parent:null,
	init: function(parent, name){
		this.parent = parent;
		this.ui =$("<select>");
		this.ui.attr("name", name);
		parent.ui.append(this.ui);
		this.ui.change(this.parent,this.callback);
	},
	setOption: function(dataArray){
		
		for(index in dataArray) //dataArray 
		{
			newOption = $("<option>");
			newOption.attr("value", index);
			newOption.html(dataArray[index]);
			this.ui.append(newOption);
		}
	},
	getSelectedOption: function(){ //return : select option value 
		return this.ui.val();
	},
	
}

var textbox = function(callback){
	this.callback = callback;

}


textbox.prototype={
	ui:null, parent:null,
	init: function(parent, name){
		this.parent = parent;
		this.ui =$("<input>");
		this.ui.attr({type: "text", name: name});
		parent.ui.append(this.ui);
		this.ui.focus(this.parent,this.callback);
	},
	getValue: function(){
		return this.ui.val();
	},
	setValue: function(val){
		this.ui.val(val);
	}
	

}


var multibox = function(){

}

multibox.prototype ={
	ui:null, 
	button:null, 
	button2:null,
	select:null, 
	textbox:null, 
	parent:null, 
	presentImage:null, 
	sourceTab:null, 
	targetTab:null, //필드
	Optiondata:[],
	Alldata:[],
	selectpannel:null,
	check_box:null,
	img_array:[],
	tooltip:null,
	tooltipImage:null,

	init: function(parent){ //초기화 함수
		this.parent = parent; //parent:body
		this.ui = $("<div>");
		
		this.button = new button(this.buttonClick); //버튼 객체생성
		this.button2 = new button(this.buttonRemoveClick);//버튼 할때 이미지 삭제;

		this.select = new select(this.selectChange); //선택 객체생성
		this.textbox = new textbox(this.textFocus); //텍스트박스 객체생성
		this.selectpannel = new selectpannel(this.selectpannelChange); //선택패널 객체생성
		this.check_box = new checkbox(this.selectclick); //체크박스 객체생성
		this.tooltip = new tooltip(this.imageMouseover);


		this.sourceTab = new tab();
		this.targetTab = new tab();
		this.sourceTab.init(this);
		this.targetTab.init(this);

		this.sourcepannelArea = new pannel(300,300);
		this.targetpannelArea = new pannel(300,300);
		this.sourcepannelArea.init(this.sourceTab);
		this.targetpannelArea.init(this.targetTab);
		for(index=0; index<3; index++)
		{
				sourcepannel = new pannel(300,300);
				sourcepannel.init(this.sourcepannelArea);
				sourcepannel.addclass("sourcepannel");
				this.sourceTab.add("tab"+index, sourcepannel);
			//	targetpannel = new pannel(300,300);	

			//	targetpannel.init(this.targetpannelArea);

				
			//	targetpannel.addclass("targetpannel");

				
			//	this.targetTab.add("tab"+index, targetpannel);
				sourcepannel.moveto(0,0);				
		}

		this.textbox.init(this, "text");
		this.ui.append("<br>");
		this.select.init(this, "select");
		this.ui.append("<br>");
		this.button.init(this, "button");
		this.ui.append("<br>");
		this.button2.init(this, "remove");
		this.ui.append("<br>");
		this.selectpannel.init(this, "selectpannel");
		this.check_box.init(this,0);
		this.tooltip.init(this);
 	
		mbox = this;


		$.ajax({ 
			url : "process.php", //어디 요청할것 인가? 
	        method : "post",
	        data : "" //{}:오브젝트 
		}).done(function(data){ // 요청 끝나고 응답(data)을 여기에 받는곳
			data = JSON.parse(data); 
			//index = data;
			
			//Optiondata = {apple:"apple", banana: "banana", orange: "orange"};	
			for(index in data)
			{	
				dataArraykey = "http://localhost/sneboard/"+data[index].file_path+"/"+data[index].file_name;
				dataArrayvalue = data[index].file_name;
				mbox.Optiondata[dataArraykey] = dataArrayvalue;
				
				mbox.Alldata[dataArraykey]= data[index];

				
			}
			mbox.select.setOption(mbox.Optiondata); //파일 객체
			mbox.selectpannel.setChange(mbox.Optiondata); //select pannel이미지 넣어주고


		})

		//alert(dataArraykey);
		parent.append(this.ui);
	}, //멀티박스에서 체크박스 생성되게끔


	textFocus: function(event)
	{

	},

	selectChange: function(event)
	{
		mbox = event.data;
		mbox.textbox.setValue(mbox.select.getSelectedOption());
	},
	buttonClick: function(event)
	{
		mbox = event.data;
		pannel = mbox.sourceTab.getActiveTab();
		img1 = new img(mbox.textbox.getValue());

		img1.draw(pannel,100,100);

		img1.setCheckbox();
		img1.setData(mbox.Alldata[mbox.textbox.getValue()]);
		mbox.img_array.push(img1);

		img1.ui.mouseenter(mbox, mbox.imageMouseenter); //파라미터 전달은 event.data안에 들어있다.
		img1.ui.mouseleave(mbox, mbox.imageMouseleave);
		
		
		if(mbox.presentImage!=null){ //이미지가 널이 아닐때
		//mbox.presentImage.remove();
		}
		mbox.presentImage=img1;
	},

	selectpannelChange: function(event)
	{	
		mbox = event.data; //multibox
		select_li = event.target; //element 

		mbox.textbox.setValue(select_li.data);
	},

	selectclick:function(event) 
	{
      mbox = event.data; //multibox
      if(mbox.check_box.getvalue() == 1){
         mbox.check_box.setvalue(0);      
      }else{
         mbox.check_box.setvalue(1);
      }

   },

   buttonRemoveClick: function(event)
   { //체크된 이미지 삭제
   	
     mbox = event.data; //multibox  	

     for(index in mbox.img_array)
     {

     	if(mbox.img_array[index].img_check.getvalue())
		{
			
			mbox.img_array[index].remove();
			mbox.img_array = mbox.img_array.slice(0,index); //slice 함수는 (start, end)end인 요소를 제외한 데이터 추출.
			
		}

     }
   },
 
   imageMouseenter: function(event)
   {

   	  mbox =event.data;
   	  path =$(event.target).attr("src"); //이미지에 대한 정보가져온다.*/

   	  for(index in mbox.img_array)
   	  {
   	   	  if(path == mbox.img_array[index].src)
   	   	  {
   	   	  	mbox.tooltip.setItem(mbox.Alldata[path]);
   	   	  	mbox.tooltip.ui.show();
   	   	  	mbox.tooltip.moveto(event.target.x+$(event.target).width(), event.target.y);
   	   	  }   	
   	  }
   },
   imageMouseleave: function(event)
   {
   	mbox = event.data;
   	mbox.tooltip.hide();
   }
   


}




var checkbox = function(callback){
   this.callback = callback;
}

checkbox.prototype={
   ui:null,
   parent:null,
   check_store:null,

   init:function(parent,value){
      this.parent = parent;
      newdiv = $("<div>");
      this.check_store = $("<input>");
      this.check_store.attr({type:"checkbox",value:value});
      newdiv.append(this.check_store);

      this.ui = newdiv;
      this.ui.click(this.parent,this.callback);
      this.parent.ui.append(this.ui);   
   },
   setvalue:function(val){
      this.check_store.val(val);
   },
   getvalue:function(){
      return this.check_store.is(':checked');
   },
   getText:function(){
   		this.ui.append("tab select");
   	//	this.parent.ui.append(this.ui);
   }
}


var img = function(src){ //var 붙이면 지역변수 안붙이면 전역변수
	this.src = src
}

img.prototype={
	ui:null, parent:null,data:null,img:null, img_check:null,
	draw: function(parent, width, height)
	{
		this.parent = parent;
		this.ui= $("<div>");
		this.img = $("<img>");
		this.img.attr("class", this.src);
		this.img.attr("src", this.src);
		this.ui.draggable(); //드래그
		this.ui.append(this.img);
		this.parent.ui.append(this.ui);
		this.resize(width, height)
	},
	generate: function(event, data, callback)
	{
		this.img.bind(event,data,callback);
	},

	remove: function()
	{
		this.ui.remove();
	},
	resize: function(width, height)
	{
		this.ui.width(width);
		this.ui.height(height);
		this.img.width(width);
		this.img.height(height);
	},
	setData: function(arr)
	{
		this.ui[0].data = arr;
	},
	setCheckbox: function()  //체크박스 생성
	{
		this.img_check = new checkbox(this.call);
		this.img_check.init(this,0);
		this.img_check.check_store.css("position", "absolute");
		this.img_check.check_store.css("right", 0);
		this.img_check.check_store.css("bottom", 0);
		
	},
	call: function()
	{

	}
	
}

var pannel = function(width, height)
{
	this.width = width;
	this.height = height;
}

pannel.prototype ={
	ui:null, parent:null, 

	init: function(parent){
		this.parent = parent;
		this.ui = $("<div>"); //실체 가 생기는 부분 jquery 객체 생성 된다.
		this.resize(this.width, this.height);
		this.parent.ui.append(this.ui);
		this.ui.css("position", "relative");
		this.ui.droppable({
			drop:function(event, ui){
			area2 = ui.draggable.detach(); //detach()붙이다 area2: elements 
			$(area2).css("left", 0);
			$(area2).css("top", 0);
			//$(area).selectable();
			$(this).append(area2); //눈에 보이게 된다. 

			$("body").append($(area2)[0].data.file_path); 
			
			}
		});

	},
	resize: function(width, height)
	{
		this.ui.width(width);
		this.ui.height(height);
	},
	moveto: function(top, left)
	{
		this.ui.css({"position": "absolute", "top": top+"px", "left": left+"px"});
	},
	addclass: function(className)
	{
		this.ui.addClass(className);
	}
}

var tab = function(){

}

tab.prototype ={
	ui:null, parent:null, items:[], activeTab:null, check:null,
	init: function(parent)
	{
		this.parent = parent;
		this.ui = $("<ul>");
		this.parent.ui.append(this.ui);
	
	},
	add: function(tabName, pannel)
	{
		pannel.ui.hide();
		newtab = $("<li>");
	
		this.items.push(pannel);

		newtab[0].tabIndex = this.items.length-1;
		newtab.append(tabName); //html에 li 생성
		
		if(this.items.length == 1)
		{
			this.ui.prepend(newtab);
		}
		else
		{
			this.ui.children("li").last().after(newtab);
		}

		newtab.click(this, this.showtab); 
	},

	remove: function(tabIndex)
	{
		this.items.slice(tabIndex, 1); //slice(start, end)
		this.ui.chidren("li").each( //each= foreach 와 같고, ul의 자식 li
			function()
			{
				if(this.tabIndex==tabIndex)
				{
					$(this).remove();
				}
			}
		); 
	},
	showtab: function(event)
	{
		if($("#check_box").prop("checked")) //체크 확인
		{	
			return false;
		}
	

		tab = event.data;
		tabIndex = event.target.tabIndex; 

		if(tab.activeTab !=null) 		
		{
			tab.items[tab.activeTab].ui.hide();
		}
		
		for(index in tab.items)
		{
			if(index == tabIndex)
			{
				tab.items[index].ui.show();
			}
		}
		tab.activeTab = tabIndex;
	},
	addclass: function(className) //추가 클래스
	{
		this.ui.addClass(className);
	},
	removeclass: function(className) //제거 클래스
	{
		this.ui.removeClass(className);
	},
	getActiveTab: function()
	{
		if(this.activeTab == null)
		{
			return this.items[0];
		}
		else
		{
			return this.items[this.activeTab];
		}
	}

}

var selectpannel = function(callback){ 
this.callback = callback;
}

selectpannel.prototype ={
	ui:null, parent:null, newUl:null,
	init:function(parent, name){
		this.parent = parent;
		this.ui = $("<div>");
		this.ui.attr("class",name);
		parent.ui.append(this.ui);
	},

	setChange: function(imageArray){
		newUl = $("<ul>");
		for(index in imageArray)
		{
			newOption = $("<li>");
			newOption[0].data = index; //newOption[0]: element:<> 접근
			newOption.html(imageArray[index]);
			newUl.append(newOption);
			newOption.click(this.parent, this.callback); //this.callback()호출은 외부에 데이터를 사용하기위해.
		}
		this.ui.append(newUl); 

	},

}

var tooltip = function()
{
}

tooltip.prototype ={
	id:null,parent:null,

	init:function(parent) //parent =multibox
	{
		this.ui=$("<div>");
		this.parent = parent;
		this.ui.addClass("tooltip");
		this.ui.css("background", "yellow");
		this.ui.css("border", "1px solid blue");
		this.parent.ui.append(this.ui);
	},
	setItem: function(imageArray) //이미지 파일 객체를 받는다. 
	{
		html= imageArray.file_path+"<br>"+imageArray.file_name+"<br>"+imageArray.file_idx+"<br>"+imageArray.file_origin_name+"<br>";//경로
		this.ui.html(html);
	},
	
	moveto: function(left, top)
    {
		this.ui.css({"position": "absolute", "top": top+"px", "left": left+"px"});
    },
    hide: function()
    {
    	this.ui.hide();
    }
}








