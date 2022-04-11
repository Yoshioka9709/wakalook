<?php

session_start();
require_once(dirname( __FILE__ ) . "/db/ManagementLogic.php");

$id = $_GET['id'];

if(!isset($_SESSION['login_user']) || !isset($id) || $id != $_SESSION['login_user']['id']) {
    header('Location:' . home_url());
    exit();
}

$posts = ManagementLogic::getPostsByUserId($id);

?>

<?php $title = "-マイページ"; require_once(dirname(__FILE__) . "/mypageHeader.php"); ?>

<!-- 投稿の一覧を表示 -->
<h1>マイページ</h1>

<?php foreach($posts as $post) { ?>
    <div class="card">
        <div class="bar-wrapper">
            <p>ファイル名：<?php echo $post['title']?></p>
            <div class="bar">
                <a href="<?php bloginfo("home_url"); ?>/edit?id=<?php echo $post['id']; echo ManagementLogic::getAutopwd($_GET['id'], $post['id']) ?>" class="mypageButton">編集する</a>
                <a href="#" onclick="deletePost(<?php echo $post['id']?>, <?php echo "'" . $post['title'] . "'"?>)" class="mypageButton">削除する</a>
                <a href="#" onclick="shareUrl(<?php echo $post['id']?>, '<?php echo ManagementLogic::getAutopwd($_SESSION['login_user']['id'], $post['id']); ?>')" class="mypageButton">共有する</a>
            </div>
        </div>
        <div class="image-wrapper">
            <?php $images = ManagementLogic::getImagesByPostId($post['id']); ?>
            <?php foreach($images as $image) { ?>
                <img src="<?php bloginfo("template_url"); ?>/images/data/<?php echo $image['file_name']?>?<?php echo date("Y/m/d H:i:s"); ?>" alt="">
            <?php } ?>
        </div>
    </div>
<?php } ?>

<script>
    function shareUrl(id, autopwd) {
        //var text = "http://wakalook.com/edit?id=" + id;
        console.log(autopwd);
        var text = "http://wakalook.com/edit?id=" + id + autopwd;
        navigator.clipboard.writeText(text).then(e => {
            alert("クリップボードに共有URLをコピーしました");
        });
    }

    function deletePost(id, title) {
        var message = "ファイル「" + title + "」を削除してもよいですか？"
        if(confirm(message)) {
            var url = "http://wakalook.com/deletePost?id=" + id;
            window.location.href = url;
        }
    }
</script>

<?php include ('footer.php') ?>