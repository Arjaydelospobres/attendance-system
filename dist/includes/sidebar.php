


    <!-- Logo Header -->
    <div class="logo-header"style="background: linear-gradient(to right, #e55d5d 0%, #f2cf79 100%)">
      <h4 class="text-black">Scheduling System</h4>
        <a href="logout.php" class="dropdown-toggle">
                      &nbsp&nbsp&nbsp&nbsp<i class="glyphicon glyphicon-off text-red"></i> 
                      
                    </a>

        
    </div>
<div class="sidebar sidebar-style-2" style="background: radial-gradient( circle farthest-corner at 10% 20%, rgba(20,108,89,1) 0%, rgba(7,144,160,0.8) 90% )">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
           <div class="user">
                

                

                    
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                               <a href="profile.php" class="dropdown-toggle"style="color:black;">
                      <i class="glyphicon glyphicon-user" ></i>&nbsp&nbsp
                      <?php echo $_SESSION['name'];?>
                    </a>    
                                
                            </li>
                        </ul>
                    </div>
                
            </div>
            
            <ul class="nav nav-primary" >
                <li class="nav-item <?= $current_page=='home.php' ? 'active' : null ?>">
                    <a href="home.php" >
                        <i class="glyphicon glyphicon-star-empty"></i>
                        <p style="color:black;">Class Schedule</p>

                    </a>
                </li>
                
              
                <li class="nav-item <?= $current_page=='exam.php' ? 'active' : null ?>">
                    <a href="exam.php">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <p style="color:black;">Exam Schedule</p>
                    </a>
                </li>
                

                <li class="nav-item <?= $current_page=='resident_certification.php' || $current_page=='resident_indigency.php' || $current_page=='business_permit.php' || $current_page=='other_form.php' ? 'active' : null ?>">
                    <a href="#set" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="glyphicon glyphicon-file"></i>
                            <p style="color:black;">Entry</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='resident_certification.php' || $current_page=='resident_indigency.php' || $current_page=='business_permit.php' || $current_page=='other_form.php' ? 'show' : null ?>" id="set">
                        <ul class="nav nav-collapse">
                            <li class=" <?= $current_page=='class.php' ? 'active' : null ?>">
                    <a href="class.php">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <p style="color:black;">Class</p>
                    </a>
                </li>
                           <li class=" <?= $current_page=='room.php' ? 'active' : null ?>">
                    <a href="room.php">
                        <i class="glyphicon glyphicon-scale"></i>
                        <p style="color:black;">Room</p>
                    </a>
                </li>

                            <li class="<?= $current_page=='subject.php' ? 'active' : null ?>">
                    <a href="subject.php">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <p style="color:black;">Subject</p>
                    </a>
                </li>

                            <li class=" <?= $current_page=='teacher.php' ? 'active' : null ?>">
                    <a href="teacher.php">
                        <i class="glyphicon glyphicon-user"></i>
                        <p style="color:black;">Teacher</p>
                    </a>
                </li>

                      <li class=" <?= $current_page=='signatories.php' ? 'active' : null ?>">
                    <a href="signatories.php">
                        <i class="glyphicon glyphicon-user"></i>
                        <p style="color:black;">Signatories</p>
                    </a>
                </li>
                    
                          
                            
                        </ul>
                    </div>
                </li>
                
                
                
                 

                
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section" style="color:black;">System</h4>
                    </li>
                
                
               
                <li class="nav-item <?= $current_page=='purok.php' || $current_page=='position.php' || $current_page=='chairmanship.php' || $current_page=='precinct.php' ||$current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'active' : null ?>">
                    <a href="#settings" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="glyphicon glyphicon-wrench"></i>
                            <p style="color:black;">Settings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='purok.php' || $current_page=='position.php'  || $current_page=='precinct.php' || $current_page=='chairmanship.php' || $current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'show' : null ?>" id="settings">
                        <ul class="nav nav-collapse">
                            <li class="<?= $current_page=='settings.php' ? 'active' : null ?>">
                                <a href="settings.php">
                                    <span class="sub-item" style="color:black;">Semester</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='department.php' ? 'active' : null ?>">
                                <a href="department.php">
                                    <span class="sub-item" style="color:black;">Department</span>
                                </a>
                            </li>

                            <li class="<?= $current_page=='designation.php' ? 'active' : null ?>">
                                <a href="designation.php">
                                    <span class="sub-item" style="color:black;">Designation</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='program.php' ? 'active' : null ?>">
                                <a href="program.php">
                                    <span class="sub-item" style="color:black;">Program</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='rank.php' ? 'active' : null ?>">
                                <a href="rank.php">
                                    <span class="sub-item" style="color:black;">Rank</span>
                                </a>
                            </li>

                            <li class="<?= $current_page=='salut.php' ? 'active' : null ?>">
                                <a href="salut.php">
                                    <span class="sub-item" style="color:black;">Salutation</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='sy.php' ? 'active' : null ?>">
                                <a href="sy.php">
                                    <span class="sub-item" style="color:black;">School Year</span>
                                </a>
                            </li>

                            <li class="<?= $current_page=='time.php' ? 'active' : null ?>">
                                <a href="time.php">
                                    <span class="sub-item" style="color:black;">Time</span>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </li>
               
            </ul>
        </div>
    </div>
</div>