<div class="minDiv">
    <div class="galleryWrap">
        <div class="galleryCont">
            <?php
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);
                $imgPre = "img/";
                while ($row = $result->fetch_assoc()) {

            ?>

            <div class="galleryObj">
                <a href="?sdb=<?php echo $row["_id"] ?>">
                    <img src="<?php echo $imgPre . $row["img_filename"]; ?>" alt="Gallery Image">
                    <div class="artistInf">
                        <a href="<?php echo "?user=HerSkulleUserensIdSåVæreHMMMMMMMM" ?>">
                            <?php echo "HerSkulleUserensUsername(wow)SåVære"; ?>
                        </a>
                    </div>
                </a>
            </div>

            <?php } ?>
        </div>
    </div>
</div>
