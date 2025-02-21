<?php get_header(); ?>
<main>
  <div class="mid_titile">
    <div class="text_box">
      <h1>About us</h1>
      <h3>地球を守り、未来を築くパートナー</h3>
      <button class="more_btn"><i class="fa-solid fa-caret-right fa-2x"></i>
        <p>Read more</p>
      </button>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/EcoWave Ventures_logo.svg" alt="" />
  </div>
  <div class="content">
    <h1>WHAT HAVE WE DONE</h1>
    <div class="container">
      <div class="labels">
        <?php
        $tag = get_tag(2);
        if (!is_wp_error($tag) && !empty($tag)) {
          echo '<label for="tag">' . esc_html($tag->name) . '</label>';
        } else {
          echo '<label for="tag">タグが見つかりません</label>';
        }
        ?>

        <?php
        $tag = get_tag(3);
        if (!is_wp_error($tag) && !empty($tag)) {
          echo '<label for="tag">' . esc_html($tag->name) . '</label>';
        } else {
          echo '<label for="tag">タグが見つかりません</label>';
        }
        ?>
      </div>
      <div class="text_box">
        <h1>プロジェクト名<br>
          もしくは簡単な説明</h1>
        <p>
          どこか苦しいというふうに、眼の前がさあっと明るくなって、半分以上掘り出されていました。ぐあい悪くなかったのです。カムパネルラは、その紙切れが何だったか待ちかねたというふうではきはき談しているからな早いからねえザウエルという犬がいるよあの森琴の宿でしょう。
        </p>

      </div>
      <div class="img_box">
        <div class="img01">
          <img src="<?php echo get_template_directory_uri(); ?>/img/FV.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/FV.png" alt="">
        </div>
        <div class="img02">
          <img src="<?php echo get_template_directory_uri(); ?>/img/FV.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/FV.png" alt="">
        </div>
      </div>
    </div>
    <div class="container">
    <div class="img_box">
        <div class="img01">
            <?php
            $post = get_post(15);
            if (!is_wp_error($post) && !empty($post)) {
                // 投稿コンテンツ
                $content = $post->post_content;

                // 正規表現で画像を抽出
                preg_match_all('/<img[^>]+>/i', $content, $images);

                // 抽出した画像を img01 に表示
                if (!empty($images[0])) {
                    $count = 0;
                    foreach ($images[0] as $img) {
                        if ($count < 2) { // 最初の2つの画像を img01 に表示
                            echo $img;
                            $count++;
                        }
                    }
                }
            }
            ?>
        </div>
        <div class="img02">
            <?php
            // 抽出した画像の残りを img02 に表示
            if (!empty($images[0])) {
                $count = 0;
                foreach ($images[0] as $img) {
                    if ($count >= 2) { // 3枚目以降の画像を img02 に表示
                        echo $img;
                    }
                    $count++;
                }
            }
            ?>
        </div>
    </div>
    <div class="text_box">
        <?php
        if (!is_wp_error($post) && !empty($post)) {
            echo "<h1>" . esc_html($post->post_title) . "</h1>";
            echo apply_filters('the_content', preg_replace('/<img[^>]+>/i', '', $post->post_content)); // コンテンツから画像を除外
        }
        ?>
    </div>
</div>
  </div>
  </div>
  </div>
  <div class="recruit_bread">
    <h3>私たちと共に<br>地球を守りませんか</h3>
    <button class="more_btn"><i class="fa-solid fa-caret-right fa-2x"></i>
      <p>To Recruit</p>
    </button>
  </div>
</main>
<?php get_footer(); ?>