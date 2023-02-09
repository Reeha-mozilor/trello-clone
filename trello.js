// global id for creating list
let listid=4
function openSM(){
  document.getElementById("mySidemenu").style.width ="260px";
  document.getElementById("mySidemenu").style.backgroundColor="hsla(312,11.1%,82.4%,0.9)";
  document.getElementById("pg-content").style.marginLeft = "260px";
  }
  function closeSM(){
  document.getElementById("mySidemenu").style.width = "20px";
  
  document.getElementById("mySidemenu").style.backgroundColor="rgba(0, 0, 0, .15)";
  document.getElementById("pg-content").style.marginLeft ="-10px";
  }

  function add(x){
    z=document.getElementById(x).previousElementSibling.id;
    prid=document.getElementById(z).previousElementSibling.id;
    var inputValue = document.getElementById(z).value;

    str="add.php?item="+inputValue+"&prid="+prid;
    var data;
      $.ajax({
          url:str,
          success:function(response){
            data=JSON.parse(response);
                passdata(data,z,x);}
      });

    

   
  function passdata(data,z,x){
    // alert(data);<div class="li">item</div>
    parent=document.getElementById(z).previousElementSibling.id
    var div=document.createElement("div");
    div.draggable=true
    div.id=data
    div.className="itemli"
    div.addEventListener("dragstart",onDragStart);
    div.addEventListener("dragend",onDragEnd);

      // var li = document.createElement("li");
      // li.draggable=true;
      // li.id=data;
      // li.className="itemli"
      // li.addEventListener("dragstart",onDragStart);
      // li.addEventListener("dragend",onDragEnd);
      var inputValue = document.getElementById(z).value;
      var t = document.createTextNode(inputValue);
      // li.appendChild(t);
     div.appendChild(t)
      var button =document.createElement("button");
      button.className="edit"
      button.onclick=function() {
        parentele=this.parentElement.id;
        // alert(parentele);
        str2="details.php?id="+parentele;
        $.ajax({
          url:str2,
          success:function(response){
            dat=JSON.parse(response);
            $("#id").val(dat.id);
            $("#item").val(dat.item);
            $("#date").val(dat.date);
            $("#time").val(dat.time);
          }
        });

      document.querySelector("#modal1").classList.add("active");
      // overlay.classList.remove("active");
      // ajax to get the
    };
    // alert(data+" test")
      var i =document.createElement("i")
      i.className="fa fa-edit"
      button.appendChild(i)
      // li.appendChild(button)
      div.appendChild(button)
      if (inputValue === '') {
          alert("You must write something!");
      } else {
      var br=document.createElement("br");
      br.id="linebreak"
      // li.appendChild(br);
      div.appendChild(br)
      var span=document.createElement("span");
      var sid="span"+data;
      span.id=sid;
      span.className="warner";
      var i1=document.createElement("i");
      i1.className="far fa-clock";
      span.appendChild(i1)
      // li.appendChild(span)
      // document.getElementById(parent).appendChild(li);
      div.appendChild(span)
      document.getElementById(parent).appendChild(div);
          
          document.getElementById(z).value=""
          document.getElementById(z).style.height="25px";
      document.getElementById(z).style.backgroundColor="#091e4214";
      document.getElementById(x).style.display="none";

      }

     
  }
  }

  function update(){
    document.getElementById("alert").style.display="block";
    const myTimeout = setTimeout(warnupdate, 3000);
    function warnupdate() {
      document.getElementById("alert").style.display="none";
}
    id=document.getElementById('id').value;
    item=document.getElementById('item').value;
    date=document.getElementById('date').value;
    time=document.getElementById('time').value;
    str3="update.php?id="+id+"&item="+item+"&date="+date+"&time="+time
    $.ajax({
      url:str3
    });
    const currentDate = new Date();
    const ddate = new Date(date);
    currentDate.setHours(0, 0, 0, 0)
    ddate.setHours(0, 0, 0, 0)
    const diff = (ddate-currentDate) / (1000 * 60 * 60 * 24);
    // document.getElementsByClassName("linebreak").style.display="inline-block";
    // document.getElementsByClassName("time").style.display="inline-block";
    spanid=document.getElementById(id).lastChild.id;
    document.getElementById(spanid).style.display="inline-block";
    var text = document.createTextNode(date);
    document.getElementById(spanid).textContent=""
    var i1=document.createElement("i");
    i1.className="far fa-clock";
    document.getElementById(spanid).appendChild(i1)
    document.getElementById(spanid).appendChild(text)
    if (diff<1){
      document.getElementById(spanid).style.backgroundColor="red";
      document.getElementById(spanid).style.color="white";
    }else if(diff==1){
      document.getElementById(spanid).style.backgroundColor="#f2d600";
      document.getElementById(spanid).style.color="white";
    }
    else{
      document.getElementById(spanid).style.backgroundColor="";
      document.getElementById(spanid).style.color="black";
    }

  }

  function focusta(x){
      document.getElementById(x).style.height="65px";
      document.getElementById(x).style.backgroundColor="white";
      document.getElementById(x).style.outline.none;
      y=document.getElementById(x).nextElementSibling.id;
      document.getElementById(y).style.display="block";
}
  function onDragEnd(e) {
      e.target.classList.remove("drag");
}
  function onDragStart(e){
      e.dataTransfer.setData("text",e.target.id)
      e.target.classList.add("drag");

  }

  const containers = document.querySelectorAll(".ul");
  containers.forEach((container)=>{
      container.addEventListener("dragover",function(e){
          e.preventDefault();

      });
  });

  containers.forEach((container) => {
      container.addEventListener("drop", function (e) {
        e.preventDefault();
        const textareaID = e.dataTransfer.getData("text");
        e.target.appendChild(document.getElementById(textareaID));
      });
    });
    

// modal functions

function closemodal(){
const modal = document.querySelector("#modal1");
  modal.classList.remove("active");
  // overlay.classList.remove("active");
}
function addlist(x){
  if(document.getElementById("listname").value==""){
    alert("You must write something")
  }else{
  var div=document.createElement("div")
  div.className="container"
  var button= document.createElement("button")
  var bdiv = document.createElement("div")
  bdiv.className="dotcontainer"
  var span1 = document.createElement("span")
  span1.className="dot"
  var span2 = document.createElement("span")
  span2.className="dot"
  var span3 = document.createElement("span")
  span3.className="dot"
  bdiv.appendChild(span1)
  bdiv.appendChild(span2)
  bdiv.appendChild(span3)
  button.appendChild(bdiv)
  div.appendChild(button)
  var valueid=document.getElementById(x).previousElementSibling.id
  var values=document.getElementById(valueid).value
  var t=document.createTextNode(values)
  var p=document.createElement("p")
  p.appendChild(t)
  div.appendChild(p)
  var uldiv=document.createElement("div")
  uldiv.className="ul"
  uldiv.id="list"+listid
  div.appendChild(uldiv)
  var tarea=document.createElement("textarea")
  tarea.id="ta"+listid
  // alert(tarea.id) 
  tarea.placeholder="Add a card"
  div.appendChild(tarea)
  var input=document.createElement("input")
  input.type="submit"
  input.value="Add card"
  input.id="add"+listid
  input.className="addcard"
  listid++
  div.appendChild(input)
  div.addEventListener("dragover",function(e){
    e.preventDefault();

});
  div.addEventListener("drop", function (e) {
  e.preventDefault();
  const textareaID = e.dataTransfer.getData("text");
  e.target.appendChild(document.getElementById(textareaID));
});
  document.getElementById("wrkarea").appendChild(div)

}
}