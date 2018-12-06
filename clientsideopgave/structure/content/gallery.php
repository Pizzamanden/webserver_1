
    <div class="gallery_wrap">
        <div class="gallery_cont">
            <?php
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);
                $imgPre = "img/";
                while ($row = $result->fetch_assoc()) {

            ?>

            <div class="gallery_obj">
                <img src="<?php echo $imgPre . $row["img_filename"]; ?>" alt="Gallery Image">
                <div class="image_boxshader">
                    <a href="" class="image_link">
                        <span>
                            View Image
                        </span>
                    </a>
                    <a href="?page=profile&user=1" class="author_link">
                        Artist name
                    </a>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
