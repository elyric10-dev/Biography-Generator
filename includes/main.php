

<div class="main_master_container">

            <div class="left_container_master">
                <div class="left-glass-container">
                    <div class="fullname">
                        <h1><?php echo $fullname;?></h1>
                    </div>
                    <div class="titles">
                        <div class="title1 active"><?php echo $title1;?><span></span></div>
                        <div class="title2"><?php echo $title2;?><span></span></div>
                    </div>
                    <div class="short_message">
                        <p>
                            <?php echo $short_message;?>
                        </p>
                    </div>
                </div>
            </div>


            <div class="right_container_master">
                <div class="right-glass-container">
                    <div class="biography_title">
                        <h1><?php echo $right_panel_title;?></h1>
                    </div>
                    <div class="biography_parag">
                        <p>
                            <?php echo $right_panel_biography; ?>
                        </p>
                    </div>
                    <div class="bio_details">

            
<?php 
        for($i=0;$i<=7;$i++)
            {
                echo '<div class="details"><p class="detail"><b>';
                echo $information[$i][0];
                echo '</b><div class="details_label">';
                echo $information[$i][1];
                echo '</div></p></div>';
            }
?>
                    </div>
                </div>
            </div>
</div>