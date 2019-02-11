<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/themes/custom/styles.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>
   <div class="container">
       <?php 
       $success=$this->session->flashdata("success_message");
       $error=$this->session->flashdata("error_message");
       ?>
       <h1>My Friends</h1>
       <?php echo anchor ("friends/hello/new_friend/", "add friend"); ?>
       <table>
           <tr>
           <th>Count
                </th>
               <th>Name
                </th>
                <th>Age
                </th>
                <th>Gender
                </th>
                <th>Hobby
                </th>
            </tr>
            <?php
            if($all_friends->num_rows()>0){
                $count=0;
                foreach($all_friends->result()
                 as $row){
                    {
                        $count++;
                        $id=$row->friend_id;
                        $name=$row->friend_name;
                        $age=$row->friend_age;
                        $gender=$row->friend_gender;
                        $hobby=$row->friend_hobby;
                        ?>
                        <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $name.'  ';?></td>
                            <td><?php echo $age.'  ';?></td>
                            <td><?php echo $gender;?></td>
                            <td><?php echo $hobby;?></td>
                            <td> 
                            <?php echo anchor("friends/hello/welcome/".$id,"View");?>
                    <a href="<?php echo site_url()?>friends/hello/welcome/">
                        </td>
                    </tr>
                    <?php
                    }
                }

            }
          ?>
</table>
</div> 
</body>
</html>