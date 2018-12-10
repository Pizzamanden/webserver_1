
    <div class="gallery_wrap">
        <div class="gallery_cont">
            <?php

                $imgPre = "img/";
                // SQL sætning til at hente billeder
                //$sql = "SELECT * FROM gallery";
                //$result = $conn->query($sql);
                //while ($row = $result->fetch_assoc()) {
            ?>

            <div class="gallery_obj">
                <div>
                    <img src="<?php
                            // Her skulle billed-filens navn echo'es ud
                            //echo $imgPre . $row["img_filename"];
                            echo $imgPre . "art1.png";
                        ?>" alt="Gallery Image">
                    <div class="image_boxshader">
                        <a href="?page=gallery&lightbox=true" class="image_link">
                            <span>
                                View Image
                            </span>
                        </a>
                        <a href="?page=profile&user=1" class="author_link">
                            <?php
                                // Her ville jeg hente authoren på mit billede
                                //echo $row["img_author"];
                                echo "gedeElsker2756";
                            ?>
                        </a>
                    </div>
                </div>
                <div class="image_title">
                    <?php
                        // Her skal billedets navn skrives ud
                        //echo $row["img_title"];
                        echo "Min yndlings ged";
                    ?>
                </div>
            </div>

            <?php
                // Slutning af while-loopet
                //}
            ?>
        </div>
    </div>
