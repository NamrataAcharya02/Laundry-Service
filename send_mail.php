<?php

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'contact'){
            $to = 'rk.laundryservice@gmail.com';
            $subject = 'Contact Form - RK Laundry';
            $message = $_POST['name'].' '.$_POST['surname'].' . Contact  at '.$_POST['email'];
            $from = 'From: on-reply@rk-laundry.com';
            if(mail($to, $subject, $message, $from)){
                $retrunArr['err'] = 0; 
                $retrunArr['msg'] = 'Thank You for contacting us, We will get back to you at the earliest';
                echo '<h2>'.$retrunArr['msg'] .'</h2><br><a href="/">Home</a>';
            }else{
                $retrunArr['err'] = 1; 
                $retrunArr['msg'] = 'Mail not sent. Come back later.';
                echo json_encode($retrunArr); exit;
            }
        }else if($action == 'feedback'){
            $to = 'rk.laundryservice@gmail.com';
            $subject = 'Feedback Form - RK Laundry';
            $message = $_POST['message'];
            $from = 'From: on-reply@rk-laundry.com';
            if(mail($to, $subject, $message, $from)){
                $retrunArr['err'] = 0; 
                $retrunArr['msg'] = 'Thank You for your feedback, We will look into it.';
                echo '<h2>'.$retrunArr['msg'] .'</h2><br><a href="/">Home</a>';
            }else{
                $retrunArr['err'] = 1; 
                $retrunArr['msg'] = 'Mail not sent. Come back later.';
                echo json_encode($retrunArr); exit;
            }
        }
    }
    
?>