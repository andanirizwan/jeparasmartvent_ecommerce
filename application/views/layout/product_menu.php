<div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Kategori</h2>
                        <div class="panel-group category-products" id="accordian">

                            <?php foreach ($starts as $start ) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                            <!-- here to get name of product and show all ot same type -->
                                <?=  anchor('home/category/'.$start->pro_name,$start->pro_name) ?>
                                    </h4>
                                </div>
                            </div>
                            <?php endforeach; ?>                            
                        </div><!--/category-products-->
                        
                    
                    </div>
                </div>
