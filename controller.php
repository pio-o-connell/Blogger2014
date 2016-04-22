<?php
   include("library.php");
   
  // start point for script 
  main();
   
   

   function main(){
   
      
        $cmd = "";
   
        if (isset($_POST['cmd'])){
            $cmd = $_POST['cmd'];
        }
        else if (isset($_GET['cmd'])){
            $cmd = $_GET['cmd'];
        } 
   
        echo "$cmd";
        switch($cmd){
            case "":   
                new View1(); 
                break;
            case "register":
                echo "register";
                new View4();
                break;
            case "login":
                echo "login";
                new View2();
                break;
            case "loginRequest":
                echo "loginRequest";
                handleLogin();
                
                break;
            case "addComment":       
              //  echo $_POST['id'];
                echo $_POST['postid'];
                $dummy = $_POST['postid'];
                 $DBM = new DBManager();
                 $result1 = $DBM->addComment();
                  $result1['id'] =$dummy;
                 new View3($result1);
                break;
            case "addComment1":
                echo "add Comment1";
                echo $_POST['postid'];
                $DBM = new DBManager();
                $dummy = $_POST['postid'];
                echo $_COOKIE['username'];
                $result1 = $DBM->addComment1();
                 $result1['id'] =$dummy;
                 new View31($result1);
            
                break;
            case "add":
                echo "add";
                $DBM = new DBManager();
             //   $data = $DBM->getBlogindex($_COOKIE['username']);
             //   $DBM->processblog();
             //   new Window5
                $result1 = $DBM->getBlogindex($_POST['username']);
                
                new View51($result1);
           
                break;
            case "addBlogger":
                echo "addBlogger";
                $data = handleAdduser();
                
            
                setCookie("username",$data['username'],time()+(86400*7));
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
                new View31($data);
   
                break;
            case "addPost":
                echo "AddPost";
                echo $_POST['textarea'];
            //    $data = handleAddpost();
            //    $data = handleViewBlogDetails();
                
               
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
                 handleAddpost($data);
               new View51($data);
                
                
                break;
            case "addPost1":
                echo "AddPost1";
               
                $data = handleFirstAddpost();
         //       handleViewBlogDetails($data);
         //       echo $data['id'];
                new View51($data);
                break;
                
            case "openblog":
                echo "openBlof";
                $bloggerid = $_GET['bloggerid'];
                echo $bloggerid;
                
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
              //  echo $data['reset'];
                $data['reset']=1;
                $data['bloggerid']= $bloggerid;
                new View6($data);
                
         //       echo $_COOKIE["username"];  
               /*data = handleViewBlogDetails();
            //     echo ($data['username']);
               new View5($data);
                echo "hullo";*/
                break;
            case "openblog1":
                echo "openBlof1";
                $bloggerid = $_GET['bloggerid'];
                $info['id']=$bloggerid;
               // $DBM = new DBManager();
                new View31($info);
               // new View51($info);
                //$data = $DBM->displayPreviousBlogs($info);
           //     echo $bloggerid;
                break;
            case "openblog9":
                echo "openBlog9";
                $bloggerid = $_GET['bloggerid'];
                $info['id']=$bloggerid;
                new View3($info);
                break;
            case "openblog6":
         //       echo $_GET['userid'];
                $userid=  $_GET['userid'];
                $info['id']=$userid;
         //       $DBM = new DBManager();
         //       $info = $DBM->getBlogindex($_COOKIE['username']);
                $info['reset2'] = 1;

                new View8($info);
                
                
                
                
                
                
                break;
            case "delete":
                echo "delete";
                new View51();
                break;
            case "delete1":
                echo "delete1";
               
                handleDeleteBlogs();
              
                break;
            case "delete2":
                echo "delete2";
              
                handleDeleteBlogs1();
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
             //   echo $data['reset'];
                $data['reset']=0;
                new View7($data);
                break;
            case "deleteUser":
     //           echo $_POST['b1'];
    //            echo $_POST['b2'];
                handleDeleteUsers();
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
             //   echo $data['reset'];
                $data['reset1']=0;
                new View9($data);
                break;
            case "deleterefresh":
                echo "deleterefresh";
                $bloggerid = $_GET['blogid'];
      //          echo $bloggerid;
                
                break;
            case "deleteBlogs":
                echo "delete blogs";
                $DBM = new DBManager();
                $data = $DBM->getBlogindex($_COOKIE['username']);
        //        echo $data['reset'];
                $data['reset']=0;
         //       $data['bloggerid']= $bloggerid;
                new View6($data);
                break;
            case "openblog2":
                echo "delete all Bloggs";
                $bloggerid=  $_GET['bloggerid'];
                $info['bloggerid']=$bloggerid;
         //       $DBM = new DBManager();
         //       $info = $DBM->getBlogindex($_COOKIE['username']);
                $info['reset'] = 1;

                new View7($info);
                break;
            case "openblog4":
                echo "deleting users";
          //      echo $_GET['userid'];
                $info['id']=$_GET['userid'];
         //       $DBM = new DBManager();
         //       $info = $DBM->getBlogindex($_COOKIE['username']);
                $info['reset1'] = 1;

                new View9($info);
                
                
                
                break;
            case "deleteUsers":
                echo "delete users";
                $DBM = new DBManager();
                $result1 = $DBM->getBlogindex($_COOKIE['username']);
                $result1['reset1'] = 0;
                new View9($result1);
                break;
            case "suspendBloogers":
                echo "suspend Bloogers";
                $result1 = $DBM->getBlogindex($_COOKIE['username']);
                new View8($result1);
                break;
            case "suspendUsers":
                echo "suspend users";
                $DBM = new DBManager();
                $result1 = $DBM->getBlogindex($_COOKIE['username']);
                $result1['reset2']=0;
                new View8($result1);
               
                break;
            case "Suspend":
                echo "Suspend";
         //       echo $_POST['b1'];
         //       echo $_POST['b2'];
                handleSuspendUsers();
                $DBM = new DBManager();
                $result1 = $DBM->getBlogindex($_COOKIE['username']);
                $result1['reset2']=0;
                new View8($result1);
                break;
            case "logout":
           //     echo $_COOKIE["username"];
                if(isset($_COOKIE['username'])) {
                    unset($_COOKIE['username']);
                    setcookie("username", "", time() - 3600); // empty value and old timestamp
                }
                new View1();
                //echo "logout";
  //              echo $_COOKIE["username"];
                break;
            case "add":
                echo "add";
                break;
            
                
                
                
        }
   
   }
   
   
  
   
 /*  function handleAddpost($data){
       if (isset($_COOKIE['username'])){       

           
           new InsideView($data);

       } 
       else{
           new View2();
       }
           $DBM = new DBManager();
           $DBM->processBlog();
       
       
       //new View2();
        

     
     //  return $info;
   }*/
   
  /* function handleAddpost(){
       if (isset($_COOKIE['username'])){       

           
          

       } 
       else{
        
       }
       
       
   }*/
   
   
   function handleLogin(){
           
       
       $DBM = new DBManager();
            
       $result = $DBM->processLogin($_POST['username'],$_POST['password']);
       
 
       if ($result == "rmiller"){
                setCookie("username",$_POST['username'],time()+3600 );
                $result1 = $DBM->getBlogindex($_POST['username']);
                $result1['reset']=0;
                new View7($result1);
       }
 //      if (($result =="blogger")|| ($result == "rmiller")){
        else if ($result == "blogger")   {
           // no output before setCookie
           setCookie("username",$_POST['username'],time()+3600 );
                $result1 = $DBM->getBlogindex($_POST['username']);
                
                new View51($result1);
           
               
       //    new View5($result);
           
        }else{
           
                new View2();
           
       }
       
       }  
       
       
     function handleAdduser(){    
       $DBM = new DBManager();
       $data = $DBM->addBlogger(); 
   
       return $data;
   }
   
    function handleViewBlogDetails(){
        $DBM = new DBManager();
        $data = $DBM->retrieveblogsandnotdisplay(); 
        return $data;
    }
   
   
   
    function handleAddpost($data){
        
        $DBM = new DBManager();
  //      $DBM->addBlogger();
        $data = $DBM->processBlog($data);
        
        return $data;
    }
     function handleFirstAddpost(){
       
        $DBM = new DBManager();
  //      $DBM->addBlogger();
        // $DBM->processFirstBlog();
        
       return $DBM->processFirstBlog();
       
    }
    
     function handleDeleteBlogs()
     {
         $DBM = new DBManager();
         $info = $DBM->deleteBloogs();
         return $info;
     }
     
          function handleDeleteBlogs1()
     {
         $DBM = new DBManager();
         $info = $DBM->deleteBloogs1();
         return $info;
     }
     
     function handleDeleteUsers()
     {
       $DBM = new DBManager();
         $info = $DBM->deleteUsers();
         return $info;  
     }
    
     function handleSuspendUsers()
     {
        
         $DBM = new DBManager();
         $info = $DBM->SuspendUsers();
         return $info;   
         
     }
?>   