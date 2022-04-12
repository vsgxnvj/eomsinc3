
<?php
include(public_path('resume-cv/connect.php'));

if(isset($_GET['bcode'])){
    $bcode = $_GET['bcode'];
}


    
    $getPersonal = $db -> query("select * from users where bcode = '$bcode'");
    while($rows = $getPersonal -> fetch_assoc()){
        $lastname = $rows['name'];
        $firstname = $rows['firstname'];
        $middlename = $rows['middlename'];
        $objective = $rows['career_objectives'];
        $img = $rows['photo'];
    }

    $getPersonal2 = $db -> query("select * from personal_informations where bcode = '$bcode'");
    while($rows = $getPersonal2 -> fetch_assoc()){
        $gender = $rows['gender'];
        $bday = $rows['dob'];
        $height = $rows['height'];			
    }

    $initial = $middlename;
    //Get the first character.
    $firstChar = $initial[0];
    //Get the first character using substr.
    $firstChar = substr($initial, 0, 1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<title><?php echo $bcode?> - <?php echo $firstname." ".$firstChar." ".$lastname ?></title>

<!-- favicon -->
<link rel="shortcut icon" href="images/ico/favicon.png">

<!-- css -->
<link rel="stylesheet" type="text/css" href="resume-cv/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="resume-cv/css/materialdesignicons.min.css" />
<link rel="stylesheet" type="text/css" href="resume-cv/css/template.css" />

<!-- <link rel="stylesheet" type="text/css" href="css/print.css" media="print"/> -->

</head>
<body>


<!-- Wrapper
================================================== -->
<!-- <button class="btn btn-danger" id="print" style="margin-left: 1180px;"><i class="fa fa-upload"></i>Print</button> -->
<div id="nino-cvWrap">
    <div layout="row" class="fw">
        <div id="nino-leftSide" class="fsr">
            <div layout="row" class="fw">
                <header class="col-md-12 col-sm-6 col-xs-12">
                <img src="../images/<?php echo $img ?>" height="150px;" width="150px; alt="">
                    <h1 class="name"><?php echo $firstname." ". $firstChar." ". $lastname?></h1>
                    <!-- <h3 class="regency">Sales Executive</h3> -->
                </header>
                <section class="nino-aboutMe col-md-12 col-sm-6 col-xs-12">
                    <h2 class="nino-sectionHeading1">
                        <i class="mdi mdi-account nino-icon1"></i>Personal Data
                    </h2>
                    <div class="nino-sectionContent">
                        <ul class="nino-listWithIcon">
                        <li layout="row">
                            <div class="fsr">
                                <i class="mdi mdi-calendar nino-icon"></i>
                            </div>
                            <div class="fg">
                                <?php echo $bday?>								</div>
                        </li>
                        <li layout="row">
                            <div class="fsr">
                                <i class="mdi mdi-gender-male-female nino-icon"></i>
                            </div>
                            <div class="fg">
                                <?php
                                if($gender=="His"){
                                    echo "Male";
                                }else{
                                    echo "Female";
                                }
                                
                                
                                ?>								</div>
                        </li>
                        <li layout="row">
                            <div class="fsr">
                                <i class="mdi mdi-format-line-spacing nino-icon"></i>
                            </div>
                            <div class="fg">
                                <?php echo $height?> cm
                            </div>
                        </li>
                    </ul>
                    </div>
                </section>
                <section class="nino-contactInfo col-md-12 col-sm-6 col-xs-12">
                    <h2 class="nino-sectionHeading1">
                        <i class="mdi mdi-school nino-icon1"></i>Education
                    </h2>
                    <ul class="nino-listWithIcon">
                        <?php
                        
                        $getEducation = $db -> query("select * from education where bcode = '$bcode'");
                        while($rows = $getEducation -> fetch_assoc()){
                            $degree = $rows['course'];
                            $school = $rows['school_name'];
                            $year = $rows['school_month']." ".$rows['school_year'];
                        echo '
                        <li layout="row">
                            <div class="fsr">
                                <i class="mdi mdi-school nino-icon"></i>
                            </div>
                            <div class="fg">
                                '.$degree.'<br>
                                '.$school.'<br>
                                '.$year.'
                            </div>
                        </li>';

                        }
                        ?>
                            
                    </ul>
                </section>
            </div>
        </div>
        <div id="nino-rightSide" class="fg">
            <main id="nino-mainContent">

                <svg id="barcode" style="margin-top: -20px; margin-left: 360px;"></svg>
                <input type="hidden" id="bcode" value="<?php echo $bcode; ?>">
                
                
                            <?php if($objective==""){ ?>
                                <br>
                            <?php }else{ ?>
                                <section>
                                    <h2 class="nino-sectionHeading">
                                        <i class="mdi mdi-account nino-icon"></i>Career Profile
                                    </h2>
                                    <div class="nino-sectionContent">
                                        <div class="inner">
                                            <article>
                                                <div class="nino-articleContent">
                                                    <?php echo $objective ?>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </section>
        
                            <?php }?>
                        
    
                                <?php
                                $getExperience = $db -> query("select * from work_exp_models where bcode = '$bcode'");
                                if($getExperience->num_rows != 0){
                                echo '
                                <section>
                                <h2 class="nino-sectionHeading">
                                <i class="mdi mdi-briefcase nino-icon"></i>Work Experience
                                </h2>
                                <div class="nino-sectionContent">
                                <div class="inner">
                                ';
                                while($rows = $getExperience -> fetch_assoc()){
                                $position = $rows['position'];
                                $company = $rows['company'];
                                $date = $rows['date_exp'];
                                $desc = $rows['job_desc'];

                                echo '
                                <article>
                                <h3 class="nino-articleTitle">'.$position.'</h3>
                                <div class="nino-articleMeta">
                                    <span><i class="mdi mdi-domain nino-icon"></i>'.$company.'</span>
                                    <span><i class="mdi mdi-calendar-text nino-icon"></i>'.$date.'</span>
                                </div>
                                <div class="nino-articleContent">
                                    <p style="text-align: justify;"> '.$desc.'</p>
                                </div>
                                </article>
                                ';
                                }
                                echo '
                                </div>
                                </div>
                                </section>
                                ';
                                }else{

                                }


                                ?>
                                                                
                
                            
                                <?php

                                        $getSkills = $db -> query("select * from skills where bcode = '$bcode' ");
                                            if($getSkills->num_rows != 0){
                                            echo '
                                                    <section>
                                                        <h2 class="nino-sectionHeading">
                                                            <i class="mdi mdi-trophy-award nino-icon"></i>Skills
                                                        </h2>
                                                        <div class="nino-sectionContent">
                                                            <div class="inner">
                                            ';
                                                while($rows = $getSkills -> fetch_assoc()){
                                                    $sdesc = $rows['skills'];

                                                    echo '
                                                        <article>
                                                            <div class="nino-articleContent">
                                                                <p style="text-align: justify;"> '.$sdesc.'</p> 
                                                            </div>
                                                        </article>
                                                    ';
                                                }
                                                echo '
                                                    </div>
                                                    </div>
                                                </section>
                                                ';
                                            }else{
                                                
                                            }
                                            

                                        ?>
                                                                        
                        
                
                            
                                        <?php

                                        $getseminar= $db -> query("select * from semtrains where bcode = '$bcode' ");
                                            if($getseminar->num_rows != 0){
                                                echo '
                                                    <section>
                                                        <h2 class="nino-sectionHeading">
                                                            <i class="mdi mdi-trophy-award nino-icon"></i>Seminars/ Trainings
                                                        </h2>
                                                        <div class="nino-sectionContent">
                                                            <div class="inner">
                                                ';
                                                while($rows = $getseminar -> fetch_assoc()){
                                                    $stdesc = $rows['trainingsem'];

                                                    echo '
                                                        <article>
                                                            <div class="nino-articleContent">
                                                                <p style="text-align: justify;"> '.$stdesc.'</p> 
                                                            </div>
                                                        </article>
                                                    ';
                                                }
                                                echo '
                                                            </div>
                                                        </div>
                                                    </section>
                                                ';
                                            }else{
                                                
                                            }
                                            

                                        ?>
                                                                        
                            <section>
                                <div class="nino-sectionContent">
                                    <div class="inner">
                                        <article>
                                            <div class="nino-articleContent">
                                                <p style="text-align: justify;"><b><i>I hereby signify that the above information is true and correct to the best of my knowledge and belief.</i></b></p>
                                                <p style="text-align: right;"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
                                                <p style="text-align: right;"><b><?php echo $firstname." ".$middlename." ".$lastname;?></b></p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>
                            
                            
                        
            </main>
        </div>
    </div>
</div>
<div id="editor"></div>
<!-- Scroll to top
================================================== -->
<a href="#" id="nino-scrollToTop">Go to Top</a>

<!-- javascript -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="resume-cv/js/JsBarcode.code128.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript" src="resume-cv/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resume-cv/js/template.js"></script>
<script>
var bcode = $("#bcode").val();
JsBarcode("#barcode", bcode, {
   format: "CODE128A",
width: 1,
  height: 30,
  fontSize: 14
});


$(document).ready(function(){
       window.print();
});

</script>	
    
</body>
</html>