<?php get_header(); //ヘッダーを呼び出す ?> 

<main>
    


    <?php if(have_posts()): //投稿があるか確認 ?>
        <?php while(have_posts()):the_post(); //投稿があれば取得してある分だけ繰り返す ?>
            <?php
            $cat = get_the_category(); //カテゴリー情報を取得する
            // error_log(print_r($cat));
            $catname = $cat[0]->cat_name; 
            ?>
            <article>
            <h2 class="article-title">
                <a href="<?php the_permalink(); ?>"><?php the_category(); //パーマリンクを取得、カテゴリー名を取得する ?></a>
            </h2>
            <ul class="meta">
                <li><?php the_time('Y/m/d'); //日付の表示 ?></li> 
                <li><?php echo the_title(); //投稿名の表示 ?></li>
            </ul>
            </article>
        <?php endwhile; //繰り返しの終了 ?>
    <?php else: ?>
        <p>投稿がありません</p> 
    <?php endif; //繰り返しの終了 ?>
</main>

<?php get_footer(); //フッターの取得 ?>