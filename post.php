<?php
    include_once('templates/header.php');

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, dolore? Soluta officiis numquam harum explicabo similique eveniet beatae est eius eum, laboriosam omnis id accusamus ipsum? Repudiandae eos consequuntur tenetur?
            Eius, eos quibusdam quod id natus vel maxime accusamus ut provident a! Exercitationem assumenda quis similique cupiditate, saepe blanditiis ex laboriosam recusandae veniam quia sapiente, dicta repellat, nostrum vitae excepturi.
            Praesentium nam animi voluptates mollitia, aliquid minus repudiandae distinctio consequatur odio at expedita facere laudantium culpa sunt dolore a quo et consectetur, iure asperiores quas ut! Laboriosam, porro? Ad, cupiditate?
            Quas nihil odit rem? Dignissimos ipsum veritatis repellat dolor saepe, quos voluptate nostrum a ad, dicta rem sunt! Dolores ducimus qui, praesentium deleniti suscipit nihil maxime voluptatum sed perferendis distinctio.
            Vitae quo neque, maxime atque odio illo saepe maiores, quibusdam mollitia delectus porro eum commodi. Natus deleniti, ullam sequi adipisci fuga omnis ab libero repellat eum quaerat cumque aliquid veritatis.</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, dolore? Soluta officiis numquam harum explicabo similique eveniet beatae est eius eum, laboriosam omnis id accusamus ipsum? Repudiandae eos consequuntur tenetur?
            Eius, eos quibusdam quod id natus vel maxime accusamus ut provident a! Exercitationem assumenda quis similique cupiditate, saepe blanditiis ex laboriosam recusandae veniam quia sapiente, dicta repellat, nostrum vitae excepturi.
            Praesentium nam animi voluptates mollitia, aliquid minus repudiandae distinctio consequatur odio at expedita facere laudantium culpa sunt dolore a quo et consectetur, iure asperiores quas ut! Laboriosam, porro? Ad, cupiditate?
            Quas nihil odit rem? Dignissimos ipsum veritatis repellat dolor saepe, quos voluptate nostrum a ad, dicta rem sunt! Dolores ducimus qui, praesentium deleniti suscipit nihil maxime voluptatum sed perferendis distinctio.
            Vitae quo neque, maxime atque odio illo saepe maiores, quibusdam mollitia delectus porro eum commodi. Natus deleniti, ullam sequi adipisci fuga omnis ab libero repellat eum quaerat cumque aliquid veritatis.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once('templates/footer.php');