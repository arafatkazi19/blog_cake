
<?php //pr($posts); ?>

<div class="col-md-9">
    <div class="row">

        <?php foreach ($posts as $p){ ?>
    <div class="col-md-4 col-12">
        <div class='card h-100'>
            <div class='row'>
                <div class='col-md-12 col-4'>
                    <img width="300" src='https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Y2hhbmdlfGVufDB8fDB8fA%3D%3D&w=1000&q=80' class='img-fluid rounded-start' alt='...'>
                </div>
                <div class='col-md-12 col-8'>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $p->title?></h5>
                        <p class='card-text'> <?php echo $p->details ?> </p>

                        <p>Category : <span style="font-weight: bold"> <?php echo $p->category->title ?></span></p>
                        <p>Posted By : <span><?php echo $p->user->username ?></span></p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

    </div>
</div>