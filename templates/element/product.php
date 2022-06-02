            <?php foreach ($products as $product): ?>
            
            <div class="prd">
                <img src="http://localhost:8080/store/webroot/img/products/<?= $product->id; ?>.jpg">
                <div class="desc">
                    <span><?= $product->has('category') ? h($product->category->name) : '' ?></span>
                    <h4><?= $product->name ?></h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $product->price ?></h4>
                </div>
                <a href="/store/shop/<?= $product->id ?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <?php endforeach ?>