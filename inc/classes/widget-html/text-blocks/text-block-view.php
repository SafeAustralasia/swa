<div class="container home-text-block-container" id="text-block-<?php echo $this->id ?>">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $instance['imageuri'] ?>" alt="">
        </div>
        <div class="col-lg-6">
            <h1><?php echo $instance['title']; ?></h1>
            <p><?php echo nl2br($instance['details']); ?></p>
            <p><a href="<?php echo $instance['linkuri']; ?>" class="btn btn-secondary"><?php echo $instance['linktext']; ?></a></p>
        </div>
    </div>
</div>

