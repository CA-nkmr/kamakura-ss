<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>工場の換気に省エネをプラス｜株式会社 鎌倉製作所</title>
	<meta name="keywords" content="鎌倉製作所,カマクラ,かまくら,kamakura,ルーフファン,クールルーフファン,換気扇,扇風機,送風機,空調,工場,産業用,CADデータ,ダウンロード,排気,エアカーテン,ハッチ,ドーム,排煙,採光" />
	<meta name="description" content="鎌倉製作所は換気扇と換気システムの総合メーカー。産業用換気扇のルーフファン、送風装置、排煙・採光システム機器の開発・製造。工場や作業所に快適な作業空間をつくるための製品、会社情報などをお伝えしています。" />
	<meta name="viewport" content="width=device-width">
<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/google_tagmanager.php');
?>
    <style>
    @import url("https://use.typekit.net/vuw7nev.css");
    </style>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="/energy_saving/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/energy_saving/assets/css/style_top.css">
</head>
<body>

<?php
	$gnav = "es-sim";
	include( $_SERVER['DOCUMENT_ROOT'] . '/energy_saving/assets/inc/header.php');
?>
<!--パララックス用-->
<img class="el-parallax" src="/energy_saving/assets/images/bg.jpg" alt="背景画像">
<div class="body__wrap sim">

<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;  //投稿や固定ページのスラッグ
?>
		
        
	<div class="content-body sim_lev2">
        <?php if(get_field('sim_type') == 'change'||get_field('sim_type') == 'new'||get_field('sim_type') == 'other'): ?>
            <h1 class="el-heading"><span>換気診断シミュレーション</span><br>ルーフファン省エネ形</h1>
        <?php elseif(get_field('sim_type') == 'bj-change'||get_field('sim_type') == 'bj-new'||get_field('sim_type') == 'bj-other'): ?>
            <h1 class="el-heading"><span>換気診断シミュレーション</span><br>ブルージェットエコ<span>（省エネモデル）
            </span></h1>
        <?php endif; ?>
		
		<div class="section main">
            <?php if(get_field('sim_type') == 'change'): ?>
			<div class="section__inner">
                <div class="sim-header">
                    <p class="num">1</p>
                    <h2>従来機種からの買い替えの方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                </div>
                <div class="model">
                    <div class="before">
                        <h3><?php the_field('model_before_type'); ?> <?php the_field('model_before'); ?></h3>
                        （ファン径<?php the_field('diameter_before'); ?>cm）
                    </div>
                    <div class="after">
                        <h3>省エネ形 <?php the_field('model_after'); ?></h3>
                        （ファン径<?php the_field('diameter_after'); ?>cm）
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2‧</sub>電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_top_02.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th><?php the_field('model_before_type'); ?> <?php the_field('model_before'); ?></th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネ形 <?php the_field('model_after'); ?></th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-wrap -->
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>


            <?php elseif(get_field('sim_type') == 'new'): ?>
            <div class="section__inner">
                <div class="sim-header">
                    <p class="num">2</p>
                    <h2>新規購入の方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                    <p class="ex"><span>従来モデル</span>（標準形・低騒音形）と<span>省エネ形</span>を比較します。</p>
                    <p class="caution">ファン径は60〜105cmまでご用意しています。用途に合わせてお選びください。</p>
                </div>
                <ul>
                    <?php if(get_field('hz') == '50'): ?>
                    <li <?php if($slug == 'new01'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new01/">ファン径60cm</a></li>
                    <li <?php if($slug == 'new02'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new02">ファン径75cm</a></li>
                    <li <?php if($slug == 'new03'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new03/">ファン径90cm</a></li>
                    <li <?php if($slug == 'new04'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new04/">ファン径105cm</a></li>
                    <?php else: ?>
                    <li <?php if($slug == 'new05'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new05/">ファン径60cm</a></li>
                    <li <?php if($slug == 'new06'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new06">ファン径75cm</a></li>
                    <li <?php if($slug == 'new07'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new07/">ファン径90cm</a></li>
                    <li <?php if($slug == 'new08'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/new08/">ファン径105cm</a></li>
                    <?php endif; ?>
                </ul>
                <p class="anchor"><a href="#h">標準形</a>・<a href="#n">低騒音形</a></p>
                <div class="model" id="h">
                    <div class="before">
                        <h3><?php the_field('model_before_type'); ?></h3>
                        <?php the_field('model_before'); ?><br class="sp_only">（ファン径<?php the_field('diameter_before'); ?>cm）
                    </div>
                    <div class="after">
                        <h3>省エネ形</h3>
                        <?php the_field('model_after'); ?><br class="sp_only">（ファン径<?php the_field('diameter_after'); ?>cm）
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_top_02.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th><?php the_field('model_before_type'); ?> <?php the_field('model_before'); ?></th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネ形 <?php the_field('model_after'); ?></th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			
            <hr>
            
                <div class="model" id="n">
                    <div class="before">
                        <h3>低騒音形</h3>
                        <?php the_field('model_before-2'); ?><br class="sp_only">（ファン径<?php the_field('diameter_before-2'); ?>cm）
                    </div>
                    <div class="after">
                        <h3>省エネ形</h3>
                        <?php the_field('model_after-2'); ?><br class="sp_only">（ファン径<?php the_field('diameter_after-2'); ?>cm）
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction-2'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_top_02.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>低騒音形 <?php the_field('model_before-2'); ?></th>
                                    <th><strong><?php the_field('kwh-4'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-4'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-4'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネ形 <?php the_field('model_after-2'); ?></th>
                                    <td><strong><?php the_field('kwh-5'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-5'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-5'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-6'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-6'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-6'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>


            <?php elseif(get_field('sim_type') == 'other'): ?>

                <div class="section__inner">
                <div class="sim-header">
                    <p class="num">3</p>
                    <h2>他社製品からの買い替えや形式がわからない方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                    <p class="ex"><span>従来モデル</span>（標準形・低騒音形）と<span>省エネ形</span>を比較します。</p>
                    <p class="caution">ファン径は60〜105cmまでご用意しています。用途に合わせてお選びください。</p>
                </div>
                <ul>
                <?php if(get_field('hz') == '50'): ?>
                    <li <?php if($slug == 'other01'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other01/">ファン径60cm</a></li>
                    <li <?php if($slug == 'other02'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other02">ファン径75cm</a></li>
                    <li <?php if($slug == 'other03'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other03/">ファン径90cm</a></li>
                    <li <?php if($slug == 'other04'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other04/">ファン径105cm</a></li>
                    <?php else: ?>
                    <li <?php if($slug == 'other05'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other05/">ファン径60cm</a></li>
                    <li <?php if($slug == 'other06'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other06">ファン径75cm</a></li>
                    <li <?php if($slug == 'other07'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other07/">ファン径90cm</a></li>
                    <li <?php if($slug == 'other08'):?>class="active"<?php endif;?>><a href="<?php echo esc_url(home_url()); ?>/energy_saving/other08/">ファン径105cm</a></li>
                    <?php endif; ?>
                </ul>
                <p class="anchor"><a href="#h">標準形</a>・<a href="#n">低騒音形</a></p>
                <div class="model" id="h">
                    <div class="before">
                        <h3><?php the_field('model_before_type'); ?></h3>
                        <?php the_field('model_before'); ?><br class="sp_only">（ファン径<?php the_field('diameter_before'); ?>cm）
                    </div>
                    <div class="after">
                        <h3>省エネ形</h3>
                        <?php the_field('model_after'); ?><br class="sp_only">（ファン径<?php the_field('diameter_after'); ?>cm）
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_top_02.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th><?php the_field('model_before_type'); ?> <?php the_field('model_before'); ?></th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネ形 <?php the_field('model_after'); ?></th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kW/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			
            <hr>
            
                <div class="model" id="n">
                    <div class="before">
                        <h3>低騒音形</h3>
                        <?php the_field('model_before-2'); ?><br class="sp_only">（ファン径<?php the_field('diameter_before-2'); ?>cm）
                    </div>
                    <div class="after">
                        <h3>省エネ形</h3>
                        <?php the_field('model_after-2'); ?><br class="sp_only">（ファン径<?php the_field('diameter_after-2'); ?>cm）
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction-2'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_top_02.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>低騒音形 <?php the_field('model_before-2'); ?></th>
                                    <th><strong><?php the_field('kwh-4'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-4'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-4'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネ形 <?php the_field('model_after-2'); ?></th>
                                    <td><strong><?php the_field('kwh-5'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-5'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-5'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-6'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-6'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-6'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>
                </div>
                
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>
            <?php elseif(get_field('sim_type') == 'bj-change'): ?>
            <div class="section__inner">
                <div class="sim-header">
                    <p class="num">1</p>
                    <h2>従来機種からの買い替えの方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                </div>
                <div class="model">
                    <div class="before">
                        スタンダードモデル<br class="sp_only">（標準形）
                        <h3><?php the_field('model_before'); ?></h3>
                    </div>
                    <div class="after">
                        省エネモデル<br class="sp_only">（標準形）
                        <h3><?php the_field('model_after'); ?></h3>
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2‧</sub>電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_bj.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>スダンダードモデル</th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネモデル</th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-wrap -->
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>                    
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>

            <?php elseif(get_field('sim_type') == 'bj-change2'): ?>
            <div class="section__inner">
                <div class="sim-header">
                    <p class="num">1</p>
                    <h2>従来機種からの買い替えの方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                </div>
                <div class="model">
                    <div class="before">
                        スタンダードモデル<br class="sp_only">（低騒音形）
                        <h3><?php the_field('model_before'); ?></h3>
                    </div>
                    <div class="after">
                        省エネモデル<br class="sp_only">（低騒音形）
                        <h3><?php the_field('model_after'); ?></h3>
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2‧</sub>電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_bj.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>スダンダードモデル</th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネモデル</th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-wrap -->
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>                    
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>

            <?php elseif(get_field('sim_type') == 'bj-new'): ?>
            <div class="section__inner">
                <div class="sim-header">
                    <p class="num">2</p>
                    <h2>新規購入の方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                    <p class="ex"><span>スタンダードモデル</span>と<span>省エネ形</span>を比較します。</p>
                </div>

                <p class="anchor"><a href="#h">標準形</a>・<a href="#n">低騒音形</a></p>
                <div class="model" id="h">
                    <div class="before">
                        <h3 class="mid">スタンダードモデル<br class="sp_only">（標準形）</h3>
                        <?php the_field('model_before'); ?>
                    </div>
                    <div class="after">
                        <h3 class="mid">省エネモデル<br class="sp_only">（標準形）</h3>
                        <?php the_field('model_after'); ?>
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_bj.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>スタンダードモデル</th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネモデル</th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			
            <hr>
            
                <div class="model" id="n">
                    <div class="before">
                        <h3 class="mid">スタンダードモデル<br class="sp_only">（低騒音形）</h3>
                        <?php the_field('model_before-2'); ?>
                    </div>
                    <div class="after">
                        <h3 class="mid">省エネモデル<br class="sp_only">（低騒音形）</h3>
                        <?php the_field('model_after-2'); ?>
                    </div>
                </div>
                <div class="reduction">
                    <p>消費電⼒‧CO<sub>2</sub>‧電気代を<br>
                        <span class="rate"><?php the_field('reduction-2'); ?></span> <span class="percent">%</span> <span class="red">削減!</span></p>
                    <div class="img"><img src="/energy_saving/assets/images/img_bj.png" alt="イメージ画像"></div>
                </div>
                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>スタンダードモデル</th>
                                    <th><strong><?php the_field('kwh-4'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-4'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-4'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>省エネモデル</th>
                                    <td><strong><?php the_field('kwh-5'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-5'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-5'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>省エネ効果</th>
                                    <td><strong><?php the_field('kwh-6'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-6'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-6'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>
            <?php else: ?>
            <div class="section__inner">
                <div class="sim-header">
                    <p class="num">3</p>
                    <h2>他社製品からの買い替えの方</h2>
                    <p class="hz">（<?php the_field('hz'); ?>Hz）</p>
                    <p class="ex"><span>他社省エネモデル</span>と<span>当社省エネモデル</span>を比較します。</p>
                </div>

                <p class="anchor"><a href="#h">標準形</a>・<a href="#n">低騒音形</a></p>
                <div class="model" id="h">
                    <div class="before">
                        <h3 class="mid l1">他社省エネモデル<br class="sp_only">（標準形）</h3>
                    </div>
                    <div class="after">
                        <h3 class="mid">当社省エネモデル<br class="sp_only">（標準形）</h3>
                        <?php the_field('model_after'); ?>
                    </div>
                </div>

                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>他社省エネモデル</th>
                                    <th><strong><?php the_field('kwh-1'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-1'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-1'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>当社省エネモデル</th>
                                    <td><strong><?php the_field('kwh-2'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-2'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-2'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>年間の差</th>
                                    <td><strong><?php the_field('kwh-3'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-3'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-3'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			
            <hr>
            
                <div class="model" id="n">
                    <div class="before">
                        <h3 class="mid l1">他社省エネモデル<br class="sp_only">（低騒音形）</h3>
                    </div>
                    <div class="after">
                        <h3 class="mid">当社省エネモデル<br class="sp_only">（低騒音形）</h3>
                        <?php the_field('model_after-2'); ?>
                    </div>
                </div>

                <div class="compare">
                    <div class="table-wrap">
                        <table>
                            <tbody>
                                <tr class="mi">
                                    <th></th>
                                    <th>消費電⼒</th>
                                    <th>CO<sub>2</sub></th>
                                    <th>ランニングコスト</th>
                                </tr>
                                <tr class="before">
                                    <th>他社省エネモデル</th>
                                    <th><strong><?php the_field('kwh-4'); ?></strong> kWh/年</th>
                                    <td><strong><?php the_field('co2-4'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-4'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="after">
                                    <th>当社省エネモデル</th>
                                    <td><strong><?php the_field('kwh-5'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-5'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-5'); ?></strong> 円/年</td>
                                </tr>
                                <tr class="result">
                                    <th>年間の差</th>
                                    <td><strong><?php the_field('kwh-6'); ?></strong> kWh/年</td>
                                    <td><strong><?php the_field('co2-6'); ?></strong> kg-CO<sub>2</sub>/年</td>
                                    <td><strong><?php the_field('cost-6'); ?></strong> 円/年</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        $page = get_post( get_the_ID() );
                        $slug = $page->post_name;
                    ?>
                    <p class="btn"><a href="/energy_saving/assets/pdf/<?php echo $slug; ?>.pdf" target="_blank" rel="noopener">結果をダウンロードする</a></p>
                </div>
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>
            <?php endif; ?>
		</div>
	</div>

</div>
		

<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/energy_saving/assets/inc/footer-short.php');
?>

<script src='//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?ver=3.3.1' id='jquery-js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script><!--パララックス用-->
<script src="/energy_saving/assets/js/common.js"></script>

<?php wp_footer(); ?>	


</body>
</html>