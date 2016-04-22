<?php





abstract class OutsideView{
        

        function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"mystyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Header</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=login\">Login</a> &nbsp;                
                       <a href=\"controller.php?cmd=register\">Register</a>
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                 
                   $DBM = new DBManager();
                   $DBM->retrieveallblogsanddisplay();  
            
            echo "</div>"
            ;
           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }
        
       

 
    
        

        
    }

 class InsideView{
       
     public function __construct($info){
            $this->top();
            $this->menu();
            $this->content($info);
            $this->bloggerList();
            
 
          
            
            
            $this->bottom();

            
        }
        

        public function content($info){

            echo " 

	<div id=\"content\">
                  <h1> Add a post!!</h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">

                 
                        <input type=\"hidden\" name=\"cmd\" value=\"addPost\">
                       // <textarea>
                       <textarea name=\"textarea\" ROWS=6 COLS=50>
                        Add post here!
                        </textarea>

                            
        
                <input type=\"submit\" value=\"addPost\">
            </FORM>
              
                
            </div>
            ";
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Header</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=login\">Add</a> <br>               
                       <a href=\"controller.php?cmd=register\">Delete</a><br>
                       <a href=\"controller.php?cmd=register\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
           
            echo "
                 <div id=\"bloggerlist\">               
                    <h3> blogger list </h3>";
          //echo "in bloggerlist";
           // $DBM = new DBManager();
          //  $DBM->retrieveblogs();
 // get the blogs from the database
 /*               $query = "select * from post";
                $resultSet = $this->db->query($query);
               
    
                for($i=0;$i<$resultSet->rowCount();$i++){
                    
                    echo " here at least";
                    $blogger = $resultSet->fetch();
                    
                    echo "<a href=\"controller.php?cmd=openblog\"> blogger['bloggerid']</a><br>";
                    
         //           if ($username == $blogger['username']){
                       
                  }
*/

                
            echo "</div>";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }   
    
    
}    
    

// splash screen view
class View1 extends OutsideView{
        
    
        public function __construct(){
            $this->top();
            $this->menu();
            $this->bloggerList();
            
 
            $this->content();
            
            
            $this->bottom();

            
        }
        

        public function content(){

            echo "

	<div id=\"content\">
                  <h1> Welcome to blogger.com </h1>
                  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                   blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  blah blah  
                
            </div>
            ";
  
        }

        public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->outerretrieveallblogsanddisplay();
            echo "</div>
            ";
        }
        

        
    }
// login view    
class View2 extends OutsideView{
        
    
        public function __construct(){
            $this->top();
            $this->menu();
            $this->bloggerList();
            
 
            $this->content();
            
            
            $this->bottom();

            
        }
        

        public function content(){

            echo "

	<div id=\"content\">
                  <h1> login </h1>
                   <FORM METHOD=\"post\" ACTION=\"controller.php\">

                 
                        <input type=\"hidden\" name=\"cmd\" value=\"loginRequest\">
                
                Username: <input type=\"text\" name=\"username\"> <br>
                Password: <input type=\"password\" name=\"password\"> <br>
                <input type=\"submit\"\ value=\"loginRequest\">
            </FORM>

                
            </div>
            ";
  
        }
        
        public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->outerretrieveallblogsanddisplay();
            echo "</div>
            ";
        }
    
        

        
    }
    
class View3 extends OutsideView {
    public function __construct($info){
            $this->top();
        //    $this->menu();
        //    $this->bloggerList();
            
 
            
            $this->bloggerList();
            $this->content($info);
            
            $this->bottom();

            
        }
        
       public function content($info){

        /*   echo " 

	<div id=\"content\">
                  <h1> Welcome Guest  </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"10\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <input type=\"hidden\" name=\"blogtitle\" > "; */
                    
            /*     echo " <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                                                                   </textarea>
                    <input type=\"submit\" value=\"send data\">";*/
                     $DBM = new DBManager();
                
                     $data = $DBM->displayPreviousBlogs($info);
                    
                    
      /*      echo "</FORM>  
                       
              
                
           </div>
            ";*/
           
                    


             
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=delete\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->outerretrieveallblogsanddisplay();
            echo "</div>
            ";
        }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}  

class View31 extends OutsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            
           $this->bloggerList();
            $this->content($info);
        //    $this->bloggerList();
            $this->bottom();

            
        }
        
       public function content($info){

           echo " 

	<div id=\"content\">
                  <h1> Welcome Guest  </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"addPost1\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <input type=\"hidden\" name=\"blogtitle\" > "; 
                    
                echo " <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                                                                   </textarea>
                    <input type=\"submit\" value=\"send data\">";
                     $DBM = new DBManager();
                
                     $data = $DBM->displayPreviousBlogs1($info);
                    
                    
            echo "</FORM>  
                       
              
                
           </div>
            ";
           
                    


             
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=delete\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";
        }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}   








/*class View31 extends OutsideView {
    public function __construct($info){
            $this->top();
         //
           $this->menu();
        //    $this->bloggerList();
            
 
            
            
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
   /*    public function content($info){

           echo " 

	<div id=\"content\">
                  <h1> Welcome  to blooger#{$info['id']} 's blogs </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"addPost\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <input type=\"hidden\" name=\"blogtitle\" >";
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>
                    <input type=\"submit\" value=\"send data\">";
            
                    $DBM = new DBManager();
                
                     $data = $DBM->displayPreviousBlogs($info);



echo"

</FORM>
               
                
            </div>
            ";
  
        }
     public function content($info){

          echo " 

	<div id=\"content\">
                  <h1> Welcome Guest  </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"10\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <input type=\"hidden\" name=\"blogtitle\" > "; 
                    
                 echo " <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                                                                   </textarea>
                    <input type=\"submit\" value=\"send data\">";
                     $DBM = new DBManager();
                
                     $data = $DBM->displayPreviousBlogs($info);
                    
                    
           echo "</FORM>  
                       
              
                
           </div>
            ";
           
                    


             
  
        }
    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=delete\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">Back</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}     */  
// register view   


class View4 extends OutsideView{
        
    
        public function __construct(){
            $this->top();
            $this->menu();
            $this->bloggerList();
            
 
            $this->content();
            
            
            $this->bottom();

            
        }
        

        public function content(){

            echo "

	<div id=\"content\">
                  <h1> Register </h1>
                    <form action=\"controller.php\" method=\"post\">
                <input type=\"hidden\" name=\"cmd\" value=\"addBlogger\">
                <table>
                    <tr>
                        <td>username:</td>
                        <td><input type=\"text\" name=\"username\"> </td>

                    </tr>
                    <tr>
                        <td>password:</td>
                        <td><input type=\"password\" name=\"password\"></td>
                    </tr>
                    <tr>
                        <td>e-mail address:</td>
                        <td><input type=\"email\" name=\"email\"></td>
                    </tr>
                    <tr>
                        <td>Blog title:</td>
                        <td><input type=\"text\" name=\"blogtitle\"></td>
                    </tr>
                    <tr>
                        <td><input type=\"submit\" value=\"Add User\"></td>
                        <td></td>

                    </tr> 
                    
                
            </div>
            </form>
            ";
  
        }

           public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->outerretrieveallblogsanddisplay();
            echo "</div>
            ";
        }
        

        
    }  
    
class View5 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

            echo "  $info[blogtitle] $info[id]

	<div id=\"content\">
                  <h1> $info[blogtitle]  </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"addPost\">
                    <input type=\"hidden\" name=\"id\" value=$info[id]>
                    <input type=\"hidden\" name=\"blogtitle\" value=$info[blogtitle]>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>
                    <input type=\"submit\" value=\"send data\">
                    
            </FORM>
           ";
 
          
          $DBM = new DBManager();
          $DBM->displayPreviousBlogs($info);   
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=deleteBlogs\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}
class View51 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

         
        echo "
	<div id=\"content\">
                  <h1>   </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"addPost\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <tr>
                        <td>Blog title:</td>
                        <td><input type=\"text\" name=\"blogtitle\"></td>
                    </tr>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>
                    <input type=\"submit\" value=\"send data\">
                    
            </FORM>
           ";
                    
         
           $DBM = new DBManager();
           $DBM->displayPreviousBlogs($info);
  //         $DBM->processComments();   
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=deleteBlogs\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}


// delete blogs
class View6 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

            echo " 

	<div id=\"content\">
                  <h1> Delete Blogs -- click link to view contents </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"delete1\">
                    <input type=\"hidden\" name=\"id\" value=\"{$info['id']}\">
                    <input type=\"hidden\" name=\"blogtitle\" value=>";
           
           $DBM = new DBManager();
           $DBM->retrieveuserblogsanddisplay($info);
           
           if ($info['reset'] != 0)
           {/*echo "</tr>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>" ; */
           //    echo "here".$info['bloggerid'];
               $DBM = new DBManager();
               $DBM->retrievebody($info);
                    
           }            
           echo"         <input type=\"submit\" value=\"Delete1\">
                    
                    </FORM>
           ";
         
     //      $DBM->processComments();   
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=deleteBlogs\">Delete</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}
class View7 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

            echo " 

	<div id=\"content\">
                  <h1> Administrator  -Delete Blogs</h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"delete2\">
                   
                    <input type=\"hidden\" name=\"blogtitle\" value=>";
              $DBM = new DBManager();
              $DBM->retrieveallblogsanddisplay1($info);
              
              if ($info['reset'] != 0)
           {/*echo "</tr>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>" ; */
           //    echo "here".$info['bloggerid'];
               $DBM = new DBManager();
               $DBM->retrievebody($info);
                    
           }             
               echo"     <input type=\"submit\" value=\"send data\">
                    
            </FORM>
           ";
            
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">             
                       <a href=\"controller.php?cmd=deleteUsers\">Delete <br> Users</a><br>
                       <a href=\"controller.php?cmd=suspendUsers\">Suspend<br> Users</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "<div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
                
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}
class View8 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

            echo " 

	<div id=\"content\">
                  <h1> Administrator -- Suspend Users </h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"Suspend\">
                    <input type=\"hidden\" name=\"id\" value=>
                    <input type=\"hidden\" name=\"blogtitle\" value=>";
                    
    //                  $DBM = new DBManager();
    //                 $DBM->displayBloggers($info) ;
                $DBM = new DBManager();
           //     $DBM->displayUsers($info); 
             
                $DBM->retrieveallusersdisplay1($info);
            
              if ($info['reset2'] != 0)
               {/*echo "</tr>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>" ; */
           //    echo "here".$info['bloggerid'];
               $DBM = new DBManager();
               $DBM->retrieveuserdetails($info);
                    
               }           

                     
                     echo"     <input type=\"submit\" value=\"send data\">
                    
            </FORM>
           ";
           
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Suspend</a> <br>               
                       <a href=\"controller.php?cmd=deleteUsers\">Delete<br>User</a><br>
                       <a href=\"controller.php?cmd=suspendUsers\">Suspend<br>User</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}

class View9 extends InsideView {
    public function __construct($info){
            $this->top();
            $this->menu();
        //    $this->bloggerList();
            
 
            $this->content($info);
            $this->bloggerList();
            
            $this->bottom();

            
        }
        
       public function content($info){

            echo " 

	<div id=\"content\">
                  <h1> Administrator  Delete Users</h1>
                  <FORM METHOD=\"post\" ACTION=\"controller.php\">
                    <input type=\"hidden\" name=\"cmd\" value=\"deleteUser\">
                    <input type=\"hidden\" name=\"id\" value=>
                    <input type=\"hidden\" name=\"blogtitle\" value=>";
                    
                    
              $DBM = new DBManager();
              $DBM->retrieveallusersdisplay($info);
            
              if ($info['reset1'] != 0)
               {/*echo "</tr>
                    
                       <textarea name=\"textarea\" ROWS=6 COLS=50> Add post here!
                        </textarea>" ; */
           //    echo "here".$info['bloggerid'];
               $DBM = new DBManager();
               $DBM->retrieveuserdetails($info);
                    
               }           

      echo "   <input type=\"submit\" value=\"delete users\">   </FORM>
           ";
       //    $DBM = new DBManager();
      //     $DBM->processComments();   
           echo "</div>";
            
            
  
        }

    
    
     function top(){
            
            
            echo "
            
            <html>

            <head>

	<link rel=\"stylesheet\" href=\"insidestyles.css\">
            </head>

            <body>

	<div id=\"main\">
		<div id=\"header\">
			<h1>Blogger.com</h1>
		</div>
            
            ";
            
        }
        
       public function menu(){
            echo "
                 <div id=\"menu\">
                <a href=\"controller.php?cmd=add\">Add</a> <br>               
                       <a href=\"controller.php?cmd=deleteUsers\">Delete<br>Users</a><br>
                       <a href=\"controller.php?cmd=suspendUsers\">Suspend<br>Users</a><br>
                       <a href=\"controller.php?cmd=logout\">logout</a><br>
                       
            </div>


            ";
            
            
        }
        
       public function bloggerList(){
           
            echo "
                 <div id=\"bloggerlist\">
                    <h3> blogger list </h3>";
                    
          //        echo"  in blofferlist";
                  $DBM = new DBManager();
                  $DBM->retrieveallblogsanddisplay();
            echo "</div>
            ";

           
           
       }
        
        function bottom(){
            echo "
            </div>

            </body>
            </html>        
            ";
        }    
}


class DBManager{
        
        private $db;
        
        
        public function __construct(){
            
          // $address = 'mysql:host=localhost:3306;dbname=blogger';
           $address = 'mysql:host=localhost:3306;dbname=blogger';
           $username = 'root';
           $password = '';
            
           try {
            $this->db = new PDO($address, $username, $password);
    
           }catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
           } 
           
           
           
           
           
           
           
        }
        
        public function processLogin($username, $password){
            
            // get the login details and query database
            
            
            $query = "select * from user";
            
            $resultSet = $this->db->query($query);
    
            while($row = $resultSet->fetch()){
        
                if ( ($row['username']==$username)&& ($row['password']==$password)){
                    if ($username == "rmiller"){
                        return "rmiller";
                    }
                    else{
                        return "blogger";      
                    }
                }
            }
 
            return "invalid";
        }  
        
        public function getBlogindex($username)
        {
            
         $query1 = "select * from user";
            
                
                $resultSet = $this->db->query($query1);
               
                $id=0;
                
                for($i=0;$i<$resultSet->rowCount();$i++){
                    
             
                    $blogger = $resultSet->fetch();
                    
                   
                    if ($username == $blogger['username']){
                       
                        $id = $blogger['id'];
                        $blogtitle = $blogger['blogtitle'];
                //        $textarea = $blogger['textarea'];
                      
                        $data['id']= $id;
                        $data['textarea']= " ";
                        $data['blogtitle'] = $blogtitle;
                        $date['username'] = $username;
                    }
                    
                }
                $data['reset']= 1;
              
                return $data;   
        }
        public function addBlogger(){
                
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $blogtitle = $_POST['blogtitle'];
                $suspend = 0;
 //               $body = "bejaysus";
                $blogger = array();
                $data = array();
                $data['blogtitle']=$blogtitle;
    
                $query = "INSERT INTO user (username, password,blogtitle,email,suspend)
                            VALUE ('$username','$password','$blogtitle','$email','$suspend')";
                $this->db->exec($query);               
                
                $query1 = "select * from user";
            
                
                $resultSet = $this->db->query($query1);
               
                $id=0;
                for($i=0;$i<$resultSet->rowCount();$i++){
                    
                
                    $blogger = $resultSet->fetch();
                    
                   
                    if ($username == $blogger['username']){
                       
                        $id = $blogger['id'];
                        
                        $data['id']= $id;
                    }
                    
                }
              
               
                
                $data['blogtitle']= $blogtitle;
                $data['username']=$username;
                $data['id']=$id;
          //      return $id;
                return $data;
              
                }
                
              public function addComment(){  
                  echo $_POST['id'];
                  echo $_POST['comments'];
                  $dummy ="Guest";
                  $userid = $_POST['id'];
                $comments = $_POST['comments'];
                
                $query = "INSERT INTO comments (postid,body,author)
                            VALUE ('$userid','$comments','$dummy')";
                $this->db->exec($query);   
                  
              }
              
              
              
              public function addComment1(){  
                  echo $_POST['id'];
                  echo $_POST['comments'];
                  $dummy = $_COOKIE['username'];
                  $userid = $_POST['id'];
                $comments = $_POST['comments'];
                
                $query = "INSERT INTO comments (postid,body,author)
                            VALUE ('$userid','$comments','$dummy')";
                $this->db->exec($query);   
                  
              }

  /*         public function retrieveblogsandnotdisplay(){
               
               
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                     $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             //     
                    $dummy = "blooger"."{$blogger['bloggerid']} <br>";
            //
            
                    
                    
                    
                         

                    }
           }*/
           
           
             public function retrieveallblogsanddisplay(){
               
               
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                     $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             
                    $dummy = "blooger"."{$blogger['bloggerid']} <br>";
           
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                  
                    echo "<a href=\"controller.php?cmd=openblog1&amp;bloggerid={$blogger['bloggerid']}\"> $dummy</a>";
                   // echo "<input type=\"checkbox\" name=\"{$blogger['bloggerid']}\" value=\"{$blogger['bloggerid']}\"";
                    
                    
                    
                         

                    }
           }
           
           public function outerretrieveallblogsanddisplay(){
               
               
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                     $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             
                    $dummy = "blooger"."{$blogger['bloggerid']} <br>";
           
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                  
                 //   echo "<a href=\"controller.php?cmd=openbloga&amp;bloggerid={$blogger['bloggerid']}\"> $dummy</a>";
                   // echo "<input type=\"checkbox\" name=\"{$blogger['bloggerid']}\" value=\"{$blogger['bloggerid']}\"";
                    echo "<a href=\"controller.php?cmd=openblog9&amp;bloggerid={$blogger['bloggerid']}\"> $dummy</a>";
                    
                    
                         

                    }
           }
          
           public function retrieveuserblogsanddisplay($info){
               
                    
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
                    
                    echo "Delete blogs <br>";
                    echo " Y\tN <br>";
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             
                    if ($info['id'] == $blogger['bloggerid']){
                    $dummy = "blog #"."{$blogger['id']}  "."{$blogger['title']}  <br>";
                    $dummy1= "b".$i;
                    echo $dummy1;
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                 //  echo "{$blogger['id']}  herer";
               //     echo "<a href=\"controller.php?cmd=deleterefesh&amp;blogid={$blogger['id']}\"> $dummy</a>";
               //    echo "<a href=\"controller.php?cmd=openblog&amp;bloggerid={$blogger['id']}\"> $dummy</a>";
                  // echo "<input type=\"checkbox\" name=\"$dummy1\" value=\"{$blogger['id']}\" checked>";
 //
                  echo "<input type=\"radio\" name=\"$dummy1\" value=\"Y\" checked>";
                  echo "<input type=\"radio\"name=\"$dummy1\" value=\"N\">";
                   echo "<a href=\"controller.php?cmd=openblog&amp;bloggerid={$blogger['id']}\"> $dummy</a><br>";
                   
                   
                    }
                    }
           }
                   
           
           
           
                public function retrieveallblogsanddisplay1($info){
               
                    
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
                    
                    echo "Delete blogs <br>";
                    echo " Y\tN <br>";
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             
                 //   if ($info['id'] == $blogger['bloggerid']){
                    $dummy = "blog #"."{$blogger['id']}  "."{$blogger['title']}  <br>";
                    $dummy1= "b".$i;
                    echo $dummy1;
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                 //  echo "{$blogger['id']}  herer";
               //     echo "<a href=\"controller.php?cmd=deleterefesh&amp;blogid={$blogger['id']}\"> $dummy</a>";
               //    echo "<a href=\"controller.php?cmd=openblog&amp;bloggerid={$blogger['id']}\"> $dummy</a>";
                  // echo "<input type=\"checkbox\" name=\"$dummy1\" value=\"{$blogger['id']}\" checked>";
 //
                  echo "<input type=\"radio\" name=\"$dummy1\" value=\"Y\" >";
                  echo "<input type=\"radio\"name=\"$dummy1\" value=\"N\" checked>";
                   echo "<a href=\"controller.php?cmd=openblog2&amp;bloggerid={$blogger['id']}\"> $dummy</a><br>";
                   
                   
              //      }
                    
                    
                         

                    }
           }
           
           
           public function retrieveallusersdisplay($info){
               
                    
                    $user = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from user";
                    $resultSet = $this->db->query($query);
                    
                    echo "Delete users <br>";
                    echo " Y\tN <br>";
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $user = $resultSet->fetch();
             
     //               if ($info['id'] == $blogger['bloggerid']){
                    $dummy = "user #"."{$user['id']}"."{$user['username']}"."{$user['password']}" ."{$user['email']}"."<br>";
                    $dummy1= "b".$i;
                    echo $dummy1;
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                 //  echo "{$blogger['id']}  herer";
               //     echo "<a href=\"controller.php?cmd=deleterefesh&amp;blogid={$blogger['id']}\"> $dummy</a>";
               //    echo "<a href=\"controller.php?cmd=openblog&amp;bloggerid={$blogger['id']}\"> $dummy</a>";
                  // echo "<input type=\"checkbox\" name=\"$dummy1\" value=\"{$blogger['id']}\" checked>";
 //
                  echo "<input type=\"radio\" name=\"$dummy1\" value=\"Y\" >";
                  echo "<input type=\"radio\"name=\"$dummy1\" value=\"N\" checked>";
                   echo "<a href=\"controller.php?cmd=openblog4&amp;userid={$user['id']}\"> $dummy</a><br>";
                   
                   
                //    }
                    }
           }
           
           
           
                     public function retrieveallusersdisplay1($info){
               
                    
                    $user = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from user";
                    $resultSet = $this->db->query($query);
                    
                    echo "Suspend users <br>";
                    echo " Y\tN <br>";
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                     $user = $resultSet->fetch();
             
     //               if ($info['id'] == $blogger['bloggerid']){
                     $dummy = "user #"."{$user['id']}"."{$user['username']}"."{$user['password']}" ."{$user['email']}"."<br>";
                     $dummy1= "b".$i;
                      echo $dummy1;
            //         echo "<a href=\"controller.php?cmd=openblog\">$dummy </a>";
                 //  echo "{$blogger['id']}  herer";
               //     echo "<a href=\"controller.php?cmd=deleterefesh&amp;blogid={$blogger['id']}\"> $dummy</a>";
               //    echo "<a href=\"controller.php?cmd=openblog&amp;bloggerid={$blogger['id']}\"> $dummy</a>";
                  // echo "<input type=\"checkbox\" name=\"$dummy1\" value=\"{$blogger['id']}\" checked>";
 
                      if ($user['suspend']){
                        echo "<input type=\"radio\" name=\"$dummy1\" value=\"Y\" checked >";
                        echo "<input type=\"radio\"name=\"$dummy1\" value=\"N\" >";
                      }
                      else {
                        echo "<input type=\"radio\" name=\"$dummy1\" value=\"Y\" >";
                        echo "<input type=\"radio\"name=\"$dummy1\" value=\"N\" checked>";  
                      }
                      echo "<a href=\"controller.php?cmd=openblog6&amp;userid={$user['id']}\"> $dummy</a><br>";
                   
                   
                //    }
                    }
           }
           
           
           
           
           
           
          public function retrievebody($data){
             $query = "select * from post";
             $resultSet = $this->db->query($query);
             
             
             
             
             for($i=0;$i<$resultSet->rowCount();$i++){
              $blogger = $resultSet->fetch();  
              if($blogger['id'] == $data['bloggerid'])
              {echo " <textarea name=\"textarea\" ROWS=6 COLS=50>".
              $blogger['body']." </textarea>" ; 
              
             }       
              
          }
          }
          
          
          
          
          public function retrieveuserdetails($data){
             echo "in retrieve id .. ".$data['id'];
              $query = "select * from user";
             $resultSet = $this->db->query($query);
             
             
             
             
             for($i=0;$i<$resultSet->rowCount();$i++){
              $user = $resultSet->fetch();  
             if($user['id'] == $data['id']){
              echo " <textarea name=\"textarea\" ROWS=6 COLS=50>";
              echo "UserId : {$user['id']}
                  Username : {$user['username']}
              UserPassword : {$user['password']}
                     Email : {$user['email']}";
              echo " </textarea>" ; 
              
             }       
              
     //     }
          }
             } 
          
           
           public function getDetailsanddisplay(){
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            
                    $blogger = $resultSet->fetch();
             
                    $dummy = "blooger"."{$blogger['bloggerid']} <br>";
            
                    echo $dummy;
                   
                    }
           }
           
   /*        public function getDetailsandnotdisplay(){
                    $blogger = array();
                    $dummy = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
            //        echo "retrieveblogs";
                    $blogger = $resultSet->fetch();
             //       echo "{$blogger['blogid']} <br>";
                    $dummy = "blooger"."{$blogger['bloggerid']} <br>";
            //
            //        echo $dummy;
                    }
           }
            */
           
           
           
            public function processBlog($info){
                $data = array();
                
                $blogtitle = $info['blogtitle'];
                $textarea = $info['textarea'];
                $id=$info['id'];
                $data['blogtitle']= $info['blogtitle'];
                $data['textarea']=$info['textarea'];
                $data['id']=$info['id'];
                
                
               
                    
                echo "proces blog feck $id $blogtitle $textarea"
                        ;
              
                $query ="INSERT into post(bloggerid,title,body)
                           VALUES ( '$id','$blogtitle','$textarea')";
                $this->db->exec($query); 
                 return $data;
            }
            
            public function processFirstBlog(){
                $data = array();
                        
                $blogtitle = $_POST['blogtitle'];
               $textarea = $_POST['textarea'];
               $id=$_POST['id'];
               $data['id'] =$id;
               $data['textarea']=$textarea;
               $data['blogtitle'] =$_POST['blogtitle'];
                   
                echo "we are in first blog";
                echo $_POST['blogtitle'];
                
              
                $query ="INSERT into post(bloggerid,title,body)
                           VALUES ( '$id','$blogtitle','$textarea')";
                $this->db->exec($query); 
                return $data;
            }
            
            
            
            
            
            
            

            public function displayUsers($info){
                
                $query = "select DISTINCT * from user";
                $resultSet = $this->db->query($query);
                for($i=0;$i<$resultSet->rowCount();$i++){
                    $user = $resultSet->fetch();
               //     echo "{$user['username']} {$user['password']} <br>";  
                echo "<input type=checkbox name={$user['username']} value={$user['username']}> {$user['username']}<br>";
                }
                return $resultSet;
            }
            
 
            
            
            public function displayPreviousBlogs($info){
                   echo "<br><br><b>Previous Blogs <br> <br>";
                   echo "i'm in display previous blogs";
                   echo "info ".$info['id'];
                    $user_id = $info['id'];
                    $post = array();
                    $dummy = array();
                    $comments1 = array();
                    $dummy1 = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
                            $post = $resultSet->fetch();
                            $dummy = "comment"."{$post['id']} <br>";
                     
                            if ($post['bloggerid'] == $user_id ){
                                
                             $dummy2 = $post['id'] ;
                             $dummy3 = $post['bloggerid'];
                             echo"           <div id=\"content\">                      
                             <FORM METHOD=\"post\" ACTION=\"controller.php\">
                                  <input type=\"hidden\" name=\"cmd\" value=\"addComment\">
                                   <input type=\"hidden\" name=\"id\" value=$dummy2>
                                   <input type=\"hidden\" name=\"blogcomment\" value=comments > 
                                    <input type=\"hidden\" name=\"postid\" value=$dummy3 > ";
                                
                                    echo "<hr align=\"left\"width=\"100%\">";
                                    echo "<br><br><br>Title:{$post['title']}<br>";
                                    echo "<textarea readonly name=\"txtarea1\" ROWS=6 COLS=40> {$post['body']}
                                    </textarea> <br><br><br>";

                               echo "<textarea id= {$post['bloggerid']} name=\"comments\" >Add Comment here </textarea><br>";
                               echo "<input type=\"submit\" value=\"Save\" >";
                               $query1 = "select * from comments";
                               $resultSet1 = $this->db->query($query1);
                               for($i=0;$i<$resultSet1->rowCount();$i++){
                                  $comments1 = $resultSet1->fetch();
                                  if ($comments1['postid']== $post['id'] ){
                                       $dummy1 = "&nbsp&nbsp&nbsp<i>comment# "."{$comments1['id']}"."{$comments1['body']}</i> <br>";
                                       echo $dummy1;
                                    } 
                           
                             }
                              echo "</FORM>  
                        </div>
            ";
                        }
                         
                }    
            }
            
            
            public function displayPreviousBlogs1($info){
                   echo "<br><br><b>Previous Blogs <br> <br>";
                   echo "i'm in display previous blogs";
                   echo "info ".$info['id'];
                    $user_id = $info['id'];
                    $post = array();
                    $dummy = array();
                    $comments1 = array();
                    $dummy1 = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
                            $post = $resultSet->fetch();
                            $dummy = "comment"."{$post['id']} <br>";
                     
                            if ($post['bloggerid'] == $user_id ){
                                
                             $dummy2 = $post['id'] ;
                             $dummy3 = $post['bloggerid'];
                             echo"           <div id=\"content\">                      
                             <FORM METHOD=\"post\" ACTION=\"controller.php\">
                                  <input type=\"hidden\" name=\"cmd\" value=\"addComment1\">
                                   <input type=\"hidden\" name=\"id\" value=$dummy2>
                                   <input type=\"hidden\" name=\"blogcomment\" value=comments > 
                                    <input type=\"hidden\" name=\"postid\" value=$dummy3 > ";
                                
                                    echo "<hr align=\"left\"width=\"100%\">";
                                    echo "<br><br><br>Title:{$post['title']}<br>";
                                    echo "<textarea readonly name=\"txtarea1\" ROWS=6 COLS=40> {$post['body']}
                                    </textarea> <br><br><br>";

                               echo "<textarea id= {$post['bloggerid']} name=\"comments\" >Add Comment here </textarea><br>";
                               echo "<input type=\"submit\" value=\"Save\" >";
                               $query1 = "select * from comments";
                               $resultSet1 = $this->db->query($query1);
                               for($i=0;$i<$resultSet1->rowCount();$i++){
                                  $comments1 = $resultSet1->fetch();
                                  if ($comments1['postid']== $post['id'] ){
                                       $dummy1 = "&nbsp&nbsp&nbsp<i>comment# "."{$comments1['id']}"."{$comments1['body']}</i> <br>";
                                       echo $dummy1;
                                    } 
                           
                             }
                              echo "</FORM>  
                        </div>
            ";
                        }
                         
                }    
            }
            
            
            
            
  /*           public function displayPreviousBlogs($info){
                   echo "<br><br><b>Previous Blogs <br> <br>";
            //        echo "i'm in display previous blogs";
            //        echo "info ".$info['id'];
                    $user_id = $info['id'];
                    $post = array();
                    $dummy = array();
                    $comments1 = array();
                    $dummy1 = array();
                    // get the blogs from the database
                    $query = "select * from post";
                    $resultSet = $this->db->query($query);
               
                    
                    for($i=0;$i<$resultSet->rowCount();$i++){
                    
                            $post = $resultSet->fetch();
                            $dummy = "comment"."{$post['id']} <br>";
                     
                            if ($post['bloggerid'] == $user_id ){
                                
                                echo "<hr align=\"left\"width=\"100%\">";
                                echo "<br><br><br>Title:{$post['title']}<br>";
                                echo "<textarea name=\"textarea\" ROWS=6 COLS=40> {$post['body']}
                                </textarea> <br><br><br>";
                                $query1 = "select * from comments";
                                $resultSet1 = $this->db->query($query1);
                                for($i=0;$i<$resultSet1->rowCount();$i++){
                                     $comments1 = $resultSet1->fetch();
                                     if ($comments1['postid']== $post['id'] ){
                                         $dummy1 = "&nbsp&nbsp&nbsp<i>comment# "."{$comments1['id']}"."{$comments1['body']}</i> <br>";
                                  
                                       
                                         echo $dummy1;
                                    } 
                           
                             }
                        }
                }   
            }*/
            function deleteBloogs(){
            
           // echo $_POST['b7'];
           //e echo $_POST['id'];
            
            $query = "select * from post";
            $resultSet = $this->db->query($query);
        //    $dummy = $_POST['b7'];
      //      $query1 = "delete * from post where id = '$dummy'";
     //       $resultSet = $this->db->query($query1);   
//where \'id\' =\'$POST[\'b\'.$i]";   
                    
           for($i=0;$i<$resultSet->rowCount();$i++){
                 $post = $resultSet->fetch();
                 if ($post['bloggerid'] == $_POST['id'] )
                     if ($_POST['b'.$i] == "Y") {
     //                 echo "Removing record index".$i." value".$_POST['b'.$i]."from database <br>";
                      $dummy1 = $post['id'];
                      $query1 = "delete post from post where id = $dummy1";
                      $resultSet1 = $this->db->query($query1);
                     }
                     else {
   //                      echo " Not Removing record index".$i." value".$_POST['b'.$i]."from database <br>";  
                      }         
                               
                           
                  }
            }
              
            
            function deleteBloogs1(){
            
       //     echo $_POST['b7'];
      //      echo $_POST['id'];
            
            $query = "select * from post";
            $resultSet = $this->db->query($query);
       //     $dummy = $_POST['b7'];
      //      $query1 = "delete * from post where id = '$dummy'";
     //       $resultSet = $this->db->query($query1);   
//where \'id\' =\'$POST[\'b\'.$i]";   
                    
           for($i=0;$i<$resultSet->rowCount();$i++){
                 $post = $resultSet->fetch();
  //               if ($post['bloggerid'] == $_POST['id'] )
                     if ($_POST['b'.$i] == "Y") {
            //          echo "Removing record index".$i." value".$_POST['b'.$i]."from database <br>";
                      $dummy1 = $post['id'];
                      $query1 = "delete post from post where id = $dummy1";
                      $resultSet1 = $this->db->query($query1);
                     }
                     else {
             //            echo " Not Removing record index".$i." value".$_POST['b'.$i]."from database <br>";  
                      }         
                               
                           
                  }
            }
            
            function deleteUsers(){
            
       //     echo $_POST['b7'];
      //      echo $_POST['id'];
            
            $query = "select * from user";
            $resultSet = $this->db->query($query);
            $dummy = $_POST['b7'];
      //      $query1 = "delete * from post where id = '$dummy'";
     //       $resultSet = $this->db->query($query1);   
//where \'id\' =\'$POST[\'b\'.$i]";   
                    
           for($i=0;$i<$resultSet->rowCount();$i++){
                 $user = $resultSet->fetch();
  //               if ($post['bloggerid'] == $_POST['id'] )
                     if ($_POST['b'.$i] == "Y") {
           //               echo "Deleting record index".$i." value".$_POST['b'.$i]."from database <br>";
                          $dummy1 = $user['id'];
                       $query1 = "delete user from user where id = $dummy1";
                        $resultSet1 = $this->db->query($query1);
                     }
                     else {
            //             echo " Not Deleting record index".$i." value".$_POST['b'.$i]."from database <br>";  
                      }         
                               
                           
                  }
            }
            
            
            function SuspendUsers (){
                $query = "select * from user";
            $resultSet = $this->db->query($query);
            $dummy = $_POST['b7'];
      //      $query1 = "delete * from post where id = '$dummy'";
     //       $resultSet = $this->db->query($query1);   
//where \'id\' =\'$POST[\'b\'.$i]";   
                    
           for($i=0;$i<$resultSet->rowCount();$i++){
                 $user = $resultSet->fetch();
  //               if ($post['bloggerid'] == $_POST['id'] )
                     if ($_POST['b'.$i] == "Y") {
     //                 echo "Updating record index".$i." value".$_POST['b'.$i]."from database <br>";
                      $dummy1 = $user['id'];
                      $query1 = "update user set suspend=1  where id = $dummy1";
                     
                     }
                     else {
     //                   echo " Updating record index".$i." value".$_POST['b'.$i]."from database <br>"; 
                        $dummy1 = $user['id'];
                        $query1 = "update user set suspend=0  where id = $dummy1";
                      }         
                       $resultSet1 = $this->db->query($query1);         
                           
                  }
            }
            
            
            
            
            
            
            
}     
      
      
 ?>