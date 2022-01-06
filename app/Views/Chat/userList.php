<link rel="stylesheet" type="text/css"   href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/> 

<!-- Chat styles   -->
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('/assets/css/chat.css') ?>" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('/assets/css/screen.css') ?>" />

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]--> 

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('/Views/Chat/chat.js') ?>"></script>
  
<!-- drag the chat box  -->
<script type="text/javascript"   src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<script src="js/jquery/ui/jquery.ui.draggable.js"></script>

<script type="text/javascript">
    $(function(){ 
        if($(".chatbox")[0]) {
            $(".chatbox").draggable();
        }
        
        $('.chatboxhead').live('click',function () {
            $(".chatbox").draggable();
        });

    });
</script> 
    
<!--   *****   DISPLAY ONLINE USERS LIST *********************************  -->
    

        <table width="96%" cellspacing="1" cellpadding="2" id="chatUsersTbl">
       <tbody>
          <tr>
             <th>User ID</th>
             <th>User Name</th>
          </tr>
    
    <?php
    // Regens session
    session();

    $userModel = new \App\Models\userModel;
        
    // Checks if user is logged in
    if (isset($_SESSION['UserID']) == true) 
    { 

        $userId = session()->get('UserID'); // Gets the user ID from the session session
        $userName = session()->get('First Name'); // Gets the User's Name from the session

        // Runs query to get approved ads of the user
        $query = $userModel -> query("SELECT * FROM registrations WHERE id = $userId"); 

        foreach ($query -> getResult() as $row) 
        {
    ?>              
          <tr>
            <td><?php echo $userId?></td>
            <td>
               <a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $Users->user_name; ?>');">
               <?php echo $userName?>
               </a>
            </td>
         </tr>
        <?php     
        }
        ?>                
        </tbody>
    </table>

        <?php
            } else {
        ?>
            <!-- If user is not logged in -->    
            <div class="alert">
                <strong> ERROR! </strong> You are not logged in! Please log in to view profile information.
            </div>;

        <?php
            }
        ?>