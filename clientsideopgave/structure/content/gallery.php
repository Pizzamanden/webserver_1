
    <div class="gallery_wrap">
        <div class="gallery_cont">
            <?php
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);
                $imgPre = "img/";
                while ($row = $result->fetch_assoc()) {
            ?>

            <div class="gallery_obj">
                <div>
                    <img src="<?php echo $imgPre . $row["img_filename"]; ?>" alt="Gallery Image">
                    <div class="image_boxshader">
                        <a href="" class="image_link">
                            <span>
                                View Image
                            </span>
                        </a>
                        <a href="?page=profile&user=1" class="author_link">
                            <?php echo $row["img_author"]; ?>
                        </a>
                    </div>
                </div>
                <div class="image_title">
                    <?php echo $row["img_name"]; ?>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
