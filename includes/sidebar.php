



         <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>

                    <form action="search.php" method="post">
                         <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
<?php
$arg = ['SELECT' => '*', 'TABLE' => 'categories '];
$categories = CategoryData($arg, $db);

?>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                            <?php
if($categories) {
                                foreach($categories as $key => $value) {

        echo "<li><a href='#'> $value[cat_title] </a></li>";
                                }
}
else {
    echo "<p>No Categories Found</p>";

}

?>

                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->


                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
