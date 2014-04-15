    <li place-id="<?php echo $id; ?>" place-lat="<?php echo $lat; ?>" place-lng="<?php echo $lng; ?>">
            <div class="place">
                <a class="name" href=""><?php echo $name; ?></a>
                <p><?php echo "$address"; ?> </p>
            </div>
            <div class="options">
                <button class="btn-remove" rel-place="<?php echo $id; ?>">Remove</button>
            </div>
    </li>