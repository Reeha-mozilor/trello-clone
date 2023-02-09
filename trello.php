<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://css.gg/bell.css' rel='stylesheet'>
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <a href="#">
                    <i class="material-icons" style="font-size:26px">apps</i></a> 
                <a href="#" ><div class="logo"></div></a> 
                <a href="#">Workspaces <i class="arrow down"></i></a>
                <a href="">Recent <i class="arrow down"></i></a>
                <a href="">Starred <i class="arrow down"></i></a>
                <a href="">Templates <i class="arrow down"></i></a>
                <a href="">Create</a>
                <div class="search"><input type="text" placeholder="Search"></div>                  
                <!-- <div class="bell">
                        <i class="gg-bell"></i></div>
                <div class="qstn">
                        <i class="fa fa-question" style="font-size:20px"></i>    
                    </div> -->
            </div>

            <div class="mainarea">
                <div id="mySidemenu" class="sidemenu" class="close" >
                    <a href="javascript:void(0)" class="close" onclick="closeSM()"><i class="arrows left"></i></a>
                    <div class="sp">
                        <div class="st">
                            <h1 class="sbg">T</h1>
                        </div>
                        <div class="st"><p>Trello Workspace<br><span class="stf">Free</span></p>   
                        </div>
                    </div>
                    <div class="sm-wrapper">
                        <ul>
                            <li><i class="fa fa-trello" style="font-size:14px"></i><a href="#">Boards</a></li>
                            <li><i class='fa fa-user-o' style="font-size:14px"></i><a href="#">Members</a><button>+</button></li>
                            <li><i class="fa fa-gear" style="font-size:14px"></i><a href="#">Settings</a><button><i class="arrow down"></i></button></li>
                        </ul>
                    </div>
                    <div class="sm-wrapper">
                        <p>Workspace views</p>
                        <ul>
                            <li><i class="fa fa-trello" style="font-size:14px"></i><a href="#"><i>Tables</i></a></li>
                            <li><i class='fa fa-user-o' style="font-size:14px"></i><a href="#"><i>Calender</i></a></li>
                        </ul>
                    </div>
                    <div class="sm-wrapper">
                        <p>Your boards</p>
                        <ul>
                            <li><i class="fa fa-trello" style="font-size:14px"></i><a href="#">Test</a></li>
                        </ul>
                    </div>
                </div>
                <div id="pg-content">
                    <div class="circle"><div style="cursor:pointer;color:#5b5b5b" onclick="openSM()"> <a href="#"><i class="arrows right"></i></a></div></div>
                    <div><input type="text" placeholder="Enter list " id="listname">
                    <input type="submit" value="Create list" id="addbut" onclick="addlist(this.id)">
                </div>
                    <!-- main content area -->
                    <div class="workarea" id="wrkarea">
                        <div class="container">
                            <button>
                                <div class="dotcontainer">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                               </button>
                            <p>To Do</p>
                            <div id="list1" class="ul">
                            </div>
                                <textarea id="ta1" onfocus="focusta(this.id)"  placeholder="Add a card"></textarea>
                                <input type="submit" value="Add card" id="add1" onclick="add(this.id)" class="addcard">
                        </div>
                        <div class="container">
                            <button>
                                <div class="dotcontainer">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                               </button>
                            <p>Doing</p>
                            <div id="list2" class="ul">
                            </div>
                                <textarea id="ta2" onfocus="focusta(this.id)"  placeholder="Add a card"></textarea>
                                <input type="submit" value="Add card" id="add2"  onclick="add(this.id)" class="addcard">
                          
                        </div>
                        <div class="container">
                            <button>
                                <div class="dotcontainer">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                               </button>
                            <p>Done</p>
                            <div id="list3" class="ul">
                            </div>
                                <textarea id="ta3" onfocus="focusta(this.id)"   placeholder="Add a card"></textarea>
                                <input type="submit" value="Add card" id="add3" onclick="add(this.id)" class="addcard">
                        </div>
                    </div>
                    
                </div>
            </div>
</div>
<!-- code for editing modal -->
<div class="modal" id="modal1">
      <div class="header">
        <div class="title">EDIT TASK DETAILS</div>
        <button class="btn close-modal" id="closemodal" onclick="closemodal()">&times;</button>
      </div>
      <div class="body">
        <span id="alert">Updates made successfully!</span>
           <div class="space">
            <input type="text" id="id" placeholder="Enter your Task" name="id" style="display:none;">
           </div>
            <div class="space">
            <input type="text" placeholder="Enter your Task" id="item" name="item"><br>
            </div>
            <div class="space">
            <label for="date">Due date</label><br>
            <input type="date" id="date" name="date">
            </div>
            <div class="space">
            <label for="time">Proposed Time</label><br>
            <input type="time" id="time" name="time">
            </div>
            <div class="space">
                <input type="submit" value="UPDATE" onclick="update()">
            </div>
       
      </div>
      <div id="overlay"></div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="trello.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>